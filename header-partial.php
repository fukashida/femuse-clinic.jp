<?php
// WP関数不要・純粋なHTMLのみ
$theme_uri = 'https://femuse-clinic.jp/wp-content/themes/femuse';
?>
<header>
  <div class="logo">
    <h1>
      <a href="https://femuse-clinic.jp/?top=1">
        <img src="<?php echo $theme_uri; ?>/assets/images/common/logo.webp" alt="femuse" />
      </a>
    </h1>
  </div>
  <div id="menu-sp" class="header-menu tb">
    <img src="<?php echo $theme_uri; ?>/assets/images/common/menu_button.webp" alt="" />
  </div>
  <nav id="nav-sp" class="nav">
    <div class="nav-logo tb">
      <img src="<?php echo $theme_uri; ?>/assets/images/common/logo.webp" alt="" />
    </div>
    <img id="menu-close-sp" class="nav-close tb" src="<?php echo $theme_uri; ?>/assets/images/common/close.webp" alt="" />
    <ul>
      <li class="nav-sp-link has-plus js-accordion">
        <a href="https://femuse-clinic.jp/?top=1#menu" class="js-accordion-trigger">診療内容</a>
        <ul class="nav-sp-child">
          <li><a href="https://femuse-clinic.jp/injection/">美容注射・点滴</a></li>
          <li><a href="https://femuse-clinic.jp/medicine/">美容内服処方</a></li>
          <li><a href="https://femuse-clinic.jp/pill/">ピル処方</a></li>
          <li><a href="https://femuse-clinic.jp/std/">性感染症検査・治療</a></li>
        </ul>
      </li>
      <li class="nav-sp-link"><a href="https://femuse-clinic.jp/#access">アクセス</a></li>
      <li class="nav-sp-link"><a href="https://femuse-clinic.jp/contact/">お問い合わせ</a></li>
      <li class="nav-sp-link web"><a target="_blank" class="header-nav-online" href="https://femuse-clinic.jp/online/">オンライン診療予約</a></li>
      <li class="nav-sp-link web"><a target="_blank" class="header-nav-web" href="https://aposuru.com/salon/salon_schedules/create/fab37cc0-ddfe-44f9-9023-7772489e2b1f">来院予約</a></li>
      <li class="nav-sp-link line">
        <a class="header-nav-line" href="https://liff.line.me/2003578447-9LneB3xY?flowPathId=1064&basicId=@436fsscv&liffId=2003578447-9LneB3xY&clientId=2003578447">
          <img src="<?php echo $theme_uri; ?>/assets/images/common/line.webp" alt="公式ライン" />
        </a>
      </li>
    </ul>
  </nav>
</header>