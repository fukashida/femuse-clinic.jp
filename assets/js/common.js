const MENU_POSITION_INDEX = 0;
const TELEMEDICINE_POSITION_INDEX = 1;
const RESERVE_POSITION_INDEX = 2;
const SCROLL_POSITON_ADJUST = 100;
let current_position_index = -1;
let position_list = [];

const fadeInScroll = () => {
  const windowHeight = $(window).height();
  const scroll = $(window).scrollTop();

  $(".scroll-fadein").each(function () {
    const targetPosition = $(this).offset().top;
    if (scroll > targetPosition - windowHeight + 150) {
      $(this).addClass("is-scroll-fadein");
    }
  });
};

$(function () {
  // -------------------------
  // SPメニュー開閉（ボタンだけtoggle）
  // -------------------------
  $("#menu-sp, #menu-close-sp").on("click", function () {
    $("#nav-sp").toggleClass("active");
  });

  // -------------------------
  // モーダル（電話）
  // -------------------------
  let modalCallOpen = $(".modal-call-open"),
    modalCallClose = $(".modal-call-close"),
    modalCall = $("#modal-call");

  modalCallOpen.on("click", function () {
    modalCall.addClass("active");
    return false;
  });

  modalCallClose.on("click", function () {
    modalCall.removeClass("active");
  });

  $(document).on("click", function (e) {
    if (!$(e.target).closest(".modal-body").length) {
      modalCall.removeClass("active");
    }
  });

  // -------------------------
  // モーダル（LINE）
  // -------------------------
  let modalLineOpen = $(".modal-line-open"),
    modalLineClose = $(".modal-line-close"),
    modalLine = $("#modal-line");

  modalLineOpen.on("click", function () {
    modalLine.addClass("active");
    return false;
  });

  modalLineClose.on("click", function () {
    modalLine.removeClass("active");
  });

  $(document).on("click", function (e) {
    if (!$(e.target).closest(".modal-body").length) {
      modalLine.removeClass("active");
    }
  });

  // =========================================================
  // ✅ 診療内容（アコーディオン）: ナビ開閉と独立させる
  // =========================================================
  const ACC_BREAKPOINT = 1200;

  // ✅ 診療内容（アコーディオン）：1200px以下だけ開閉
  $(document).on("click", "#nav-sp .js-accordion > a", function (e) {
    // 1200px超 → 通常リンクで #menu へ（何もしない）
    if (window.innerWidth > ACC_BREAKPOINT) return;
  
    // 1200px以下 → アコーディオン
    e.preventDefault();
    e.stopPropagation();
    e.stopImmediatePropagation();
  
    const $parent = $(this).closest(".js-accordion");
    const $child  = $parent.children(".nav-sp-child");
  
    // 1個だけ開ける（不要なら削除）
    $("#nav-sp .js-accordion").not($parent)
      .removeClass("is-open")
      .children(".nav-sp-child").stop(true, true).slideUp(200);
  
    $parent.toggleClass("is-open");
    $child.stop(true, true).slideToggle(200);
  });
  
  // ✅ 子リンク押下 → ナビ閉じる（そのままでOK）
  $(document).on("click", "#nav-sp .js-accordion .nav-sp-child a", function () {
    $("#nav-sp").removeClass("active");
  });
  
  // ✅ 通常のナビ項目押下 → ナビ閉じる（そのままでOK）
  $(document).on("click", "#nav-sp .nav-sp-link:not(.js-accordion) a", function () {
    $("#nav-sp").removeClass("active");
  });
  


  // =========================================================
  // ✅ 通常のナビ項目押下 → ナビ閉じる（アコーディオンは除外）
  // =========================================================
  $("#nav-sp .nav-sp-link").not(".js-accordion").on("click", function () {
    $("#nav-sp").removeClass("active");
  });

  // ❌ これは削除（衝突の元）
  // $("[class^='nav-sp-link']").on("click", function (e) {
  //   $("#nav-sp").toggleClass("active");
  // });

  // =========================================================
  // スムーススクロール（1箇所だけ）
  // =========================================================
  $('a[href*="#"]').on("click", function () {
    // 診療内容（親）は除外（念のため）
    if ($(this).closest(".js-accordion").length) return;

    const adjust = 0;
    const speed = 400;
    const target = $(this.hash === "#" || "" ? "html" : this.hash);
    if (!target.length) return;

    const targetPos = target.offset().top + adjust;
    $("html, body").animate({ scrollTop: targetPos }, speed, "swing");
    $("#nav-sp").removeClass("active");
    return false;
  });

  // -------------------------
  // 位置取得 & スクロール処理
  // -------------------------
  $(".nav-position").each(function (index) {
    position_list[index] = $(this).offset().top;
  });

  fadeInScroll();
  setScrollNaviPosition();

  $(window).on("scroll", function () {
    fadeInScroll();
    setScrollNaviPosition();
  });
});

// 現在のスクロール位置がどのコンテンツ位置にあるか判定
function setScrollNaviPosition() {
  scrollPosition = $(window).scrollTop();
  for (let index = position_list.length - 1; index >= 0; index--) {
    if ($(window).scrollTop() > position_list[index] - SCROLL_POSITON_ADJUST) {
      setNavMenuCurrent(index);
      break;
    }
  }
}

// カレント位置ヘッダーメニューにclassを付与
function setNavMenuCurrent(index) {
  if (index == current_position_index) return;

  $("header nav li a").removeClass("header-nav-current");

  switch (index) {
    case RESERVE_POSITION_INDEX:
      $("#haeder-nav-reserve").addClass("header-nav-current");
      break;
    case TELEMEDICINE_POSITION_INDEX:
      $("#haeder-nav-telemedicine").addClass("header-nav-current");
      break;
    case MENU_POSITION_INDEX:
      $("#haeder-nav-menu").addClass("header-nav-current");
      break;
  }

  current_position_index = index;
}


  // =========================================================
  // コピー
  // =========================================================
document.querySelectorAll('.copy-btn').forEach(btn => {
  btn.addEventListener('click', () => {
    const target = document.querySelector(btn.dataset.copy);
    if (!target) return;

    const text = target.innerText.replace(/\n+/g, '\n');
    navigator.clipboard.writeText(text);
    alert('住所をコピーしました');
  });
});


// =========================================================
// ポップアップ
// =========================================================
document.addEventListener("DOMContentLoaded", () => {
  const modal = document.getElementById("ivModal");
  if (!modal) return;

  const titleEl = modal.querySelector("#ivModalTitle");
  const fieldEls = {
    overview: modal.querySelector('[data-field="overview"]'),
    forwho: modal.querySelector('[data-field="forwho"]'),
    frequency: modal.querySelector('[data-field="frequency"]'),
  };

  const openModal = (data, fallbackTitle = "") => {
    titleEl.textContent = data.title || fallbackTitle || "詳細";
    fieldEls.overview.innerHTML = data.overview || "";
    fieldEls.forwho.innerHTML = data.forwho || "";
    fieldEls.frequency.innerHTML = data.frequency || "";

    modal.setAttribute("aria-hidden", "false");
    document.body.style.overflow = "hidden";
  };

  const closeModal = () => {
    modal.setAttribute("aria-hidden", "true");
    document.body.style.overflow = "";
  };

  document.addEventListener("click", (e) => {
    const btn = e.target.closest(".iv-menu__detailBtn");
    if (!btn) {
      if (e.target.closest(".iv-modal__close")) closeModal();
      if (e.target.classList.contains("iv-modal__backdrop")) closeModal();
      return;
    }

    const item = btn.closest(".iv-menu__item");
    const key = item?.dataset.popupKey;
    if (!key) return;

    const data = window.ivPopupData?.[String(key)];
    if (!data) return;

    const fallbackTitle =
      item.querySelector(".iv-menu__name")?.textContent?.trim() || "";
    openModal(data, fallbackTitle);
  });

  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && modal.getAttribute("aria-hidden") === "false") {
      closeModal();
    }
  });
});
