/**
 * felmat fmcs パラメータ引き継ぎスクリプト（LP用、最小構成）
 *
 * 役割:
 *   1) LP到着時のURL（?fmcs=fm.xxx）から fmcs を取得
 *   2) Cookie に保存（次回訪問時にも復元可能）
 *   3) ページ内の全リンクに fmcs を自動付与（クロスドメイン遷移にも対応）
 *   4) フォーム送信時に hidden input として fmcs を自動挿入
 *   5) 動的に追加されるリンクも MutationObserver で追従
 *
 * 設置方法:
 *   <script src="/path/to/fmcs-tracker.js" async></script>
 *   または GTM の カスタムHTMLタグ で全ページに配信
 *
 * カスタマイズ:
 *   下の CONFIG オブジェクトの値を変更する
 */
(function () {
  'use strict';

  var CONFIG = {
    // 引き継ぐパラメータ名（必要に応じて追加）
    TRACKED_PARAMS: ['fmcs'],
    // Cookie保持日数
    COOKIE_DAYS: 30,
    // Cookie名のプレフィックス
    COOKIE_PREFIX: '_fm_',
    // Cookieドメイン（空ならブラウザのデフォルト＝現在のホスト）
    // 例: '.spirits-ltd.com' でサブドメイン間共有
    COOKIE_DOMAIN: '',
  };

  // ---- ユーティリティ ----

  function getUrlParams() {
    var result = {};
    var search = window.location.search.replace(/^\?/, '');
    if (!search) return result;
    var pairs = search.split('&');
    for (var i = 0; i < pairs.length; i++) {
      var idx = pairs[i].indexOf('=');
      if (idx === -1) continue;
      var key = decodeURIComponent(pairs[i].substring(0, idx));
      var value = decodeURIComponent(pairs[i].substring(idx + 1));
      if (key && value) result[key] = value;
    }
    return result;
  }

  function setCookie(name, value, days) {
    var expires = '';
    if (days) {
      var d = new Date();
      d.setTime(d.getTime() + days * 24 * 60 * 60 * 1000);
      expires = '; expires=' + d.toUTCString();
    }
    var domain = CONFIG.COOKIE_DOMAIN ? '; domain=' + CONFIG.COOKIE_DOMAIN : '';
    document.cookie = name + '=' + encodeURIComponent(value) + expires + domain + '; path=/; SameSite=Lax';
  }

  function getCookie(name) {
    var prefix = name + '=';
    var parts = document.cookie.split(';');
    for (var i = 0; i < parts.length; i++) {
      var c = parts[i].replace(/^\s+/, '');
      if (c.indexOf(prefix) === 0) {
        return decodeURIComponent(c.substring(prefix.length));
      }
    }
    return null;
  }

  // ---- 値の決定（URL優先、無ければCookie） ----

  function resolveTrackedParams() {
    var urlParams = getUrlParams();
    var resolved = {};
    for (var i = 0; i < CONFIG.TRACKED_PARAMS.length; i++) {
      var key = CONFIG.TRACKED_PARAMS[i];
      var value = urlParams[key] || getCookie(CONFIG.COOKIE_PREFIX + key) || null;
      if (value) {
        resolved[key] = value;
        // URLから来た値は最新としてCookie上書き
        if (urlParams[key]) {
          setCookie(CONFIG.COOKIE_PREFIX + key, value, CONFIG.COOKIE_DAYS);
        }
      }
    }
    return resolved;
  }

  // ---- リンク装飾 ----

  function decorateLink(link, params) {
    if (!link || !link.href) return;
    var href = link.getAttribute('href');
    if (!href) return;
    // javascript:, mailto:, tel:, アンカーは除外
    if (/^(javascript:|mailto:|tel:|#)/i.test(href)) return;
    try {
      var url = new URL(link.href, window.location.href);
      var changed = false;
      for (var key in params) {
        if (!params.hasOwnProperty(key)) continue;
        if (!url.searchParams.has(key)) {
          url.searchParams.set(key, params[key]);
          changed = true;
        }
      }
      if (changed) link.href = url.toString();
    } catch (e) {
      // 不正なURLは無視
    }
  }

  function decorateAllLinks(params) {
    var links = document.getElementsByTagName('a');
    for (var i = 0; i < links.length; i++) {
      decorateLink(links[i], params);
    }
  }

  // ---- フォーム装飾 ----

  function decorateForm(form, params) {
    for (var key in params) {
      if (!params.hasOwnProperty(key)) continue;
      var existing = form.querySelector('input[name="' + key + '"]');
      if (existing) {
        if (!existing.value) existing.value = params[key];
      } else {
        var input = document.createElement('input');
        input.type = 'hidden';
        input.name = key;
        input.value = params[key];
        form.appendChild(input);
      }
    }
  }

  function decorateAllForms(params) {
    var forms = document.getElementsByTagName('form');
    for (var i = 0; i < forms.length; i++) {
      decorateForm(forms[i], params);
    }
  }

  // ---- 動的追加要素の監視 ----

  function observeMutations(params) {
    if (typeof MutationObserver === 'undefined') return;
    var observer = new MutationObserver(function (mutations) {
      for (var i = 0; i < mutations.length; i++) {
        var added = mutations[i].addedNodes;
        if (!added) continue;
        for (var j = 0; j < added.length; j++) {
          var node = added[j];
          if (node.nodeType !== 1) continue;
          if (node.tagName === 'A') decorateLink(node, params);
          if (node.tagName === 'FORM') decorateForm(node, params);
          if (node.getElementsByTagName) {
            var subLinks = node.getElementsByTagName('a');
            for (var k = 0; k < subLinks.length; k++) decorateLink(subLinks[k], params);
            var subForms = node.getElementsByTagName('form');
            for (var l = 0; l < subForms.length; l++) decorateForm(subForms[l], params);
          }
        }
      }
    });
    observer.observe(document.body, { childList: true, subtree: true });
  }

  // ---- メイン ----

  function run() {
    var params = resolveTrackedParams();
    if (!params || Object.keys(params).length === 0) return;
    decorateAllLinks(params);
    decorateAllForms(params);
    observeMutations(params);
    // 外部から参照したい場合用
    window.__fmcsTracker = { params: params };
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', run);
  } else {
    run();
  }
})();
