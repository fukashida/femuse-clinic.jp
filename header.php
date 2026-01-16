<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php
  $title = '';
  if (is_home()) {
    $title = 'フェミューズクリニック | 東新宿駅徒歩1分、新宿駅・歌舞伎町からも近い美容皮膚科・婦人科';
  } else if (is_page('doctor')) {
    $title =  '医師紹介 | フェミューズクリニック';
  } else {
    $title = single_post_title('', false) . ' | ' . 'フェミューズクリニック';
  }
  $description = "美容皮膚科と婦人科のトータルケア。美白美肌からデリケートゾーンのお悩みまで、女性の体に寄り添うクリニックです。またオンライン診療にも対応しています。性病検査や性病治療、低用量ピルの処方も行っております。"
  ?>
  <title><?php echo $title ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="keywords" content="">
  <meta name="description" content="<?php echo $description; ?>">
  <meta property="og:url" content="" />
  <?php if (is_home()) : ?>
    <meta property="og:type" content="website" />
  <?php else : ?>
    <meta property="og:type" content="article" />
  <?php endif; ?>
  <meta name="og:title" content="<?php echo $title ?>" />
  <meta property="og:description" content="<?php echo $description; ?>" />
  <meta property="og:site_name" content="" />
  <meta property="og:image" content="<?php my_theme_uri(); ?>/assets/images/ogp.jpg" />
  <meta name="twitter:title" content="<?php echo $title ?>" />
  <meta name="twitter:description" content="<?php echo $description; ?>" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:image" content="<?php my_theme_uri(); ?>/assets/images/ogp.jpg" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css">
  <?php wp_head(); ?>
  <link rel="icon" href="<?php my_theme_uri(); ?>/assets/images/favicon.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Noto+Sans+JP:wght@400;700&family=Noto+Serif+JP&display=swap" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/picturefill/3.0.2/picturefill.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-KP2T5TVL');
  </script>
  <!-- End Google Tag Manager -->
</head>

<body>
  <!-- HEADER_TEST_20260117_A -->

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KP2T5TVL" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <header>
    <div class="logo">
      <h1>
        <a href="<?php my_home_uri(); ?>">
          <img src="<?php my_theme_uri(); ?>/assets/images/common/logo.webp" alt="femuse" />
        </a>
      </h1>
    </div>
    <div id="menu-sp" class="header-menu tb">
      <img src="<?php my_theme_uri(); ?>/assets/images/common/menu_button.webp" alt="" />
    </div>
    <nav id="nav-sp" class="nav">
      <div class="nav-logo tb">
        <img src="<?php my_theme_uri(); ?>/assets/images/common/logo.webp" alt="" />
      </div>
      <img id="menu-close-sp" class="nav-close tb" src="<?php my_theme_uri(); ?>/assets/images/common/close.webp" alt="" />
      <ul>

        <li class="nav-sp-link has-plus js-accordion">
          <a
            href="<?php echo esc_url( home_url('/#menu') ); ?>"
            class="js-accordion-trigger"
          >診療内容</a>

          <ul class="nav-sp-child">
            <li><a href="<?php echo esc_url( home_url('/injection/') ); ?>">美容注射・点滴</a></li>
            <li><a href="<?php echo esc_url( home_url('/medicine/') ); ?>">美容内服処方</a></li>
            <li><a href="<?php echo esc_url( home_url('/pill/') ); ?>">ピル処方</a></li>
          </ul>
        </li>

        <li class="nav-sp-link"><a class="<?php if (is_page("about")) : ?>header-nav-current<?php endif; ?>" href="<?php my_home_uri(); ?>">当院について</a></li>
        <li class="nav-sp-link"><a class="<?php if (is_page("")) : ?>header-nav-current<?php endif; ?>" href="<?php my_home_uri(); ?>#access">アクセス</a></li>
        <li class="nav-sp-link"><a class="<?php if (is_page("faq")) : ?>header-nav-current<?php endif; ?>" href="<?php my_home_uri(); ?>">よくある質問</a></li>
        <li class="nav-sp-link"><a class="<?php if (is_page("contact")) : ?>header-nav-current<?php endif; ?>" href="<?php echo esc_url( home_url('/contact/') ); ?>">お問い合わせ</a></li>
        <li class="nav-sp-link web"><a class="header-nav-online" href="#">オンライン診療予約</a></li>
        <li class="nav-sp-link web"><a class="header-nav-web" href="#">来院予約</a></li>
        <li class="nav-sp-link line"><a class="header-nav-line" href="https://liff.line.me/2003578447-9LneB3xY?flowPathId=1064&basicId=@436fsscv&liffId=2003578447-9LneB3xY&clientId=2003578447"><img src="<?php my_theme_uri(); ?>/assets/images/common/line.webp" alt="公式ライン" /></a></li>
      </ul>
    </nav>
  </header>