<div id="store" class="store scroll-fadein nav-position">
  <?php if ($args['is-disp-title']) : ?>
    <div class="title">
      <h2>施設情報</h2>
      <span> store information</span>
    </div>
    <div class="store-line"></div>
  <?php endif; ?>
  <div class="store-container">
    <picture>
      <source media="(min-width: 768px)" srcset="<?php my_theme_uri(); ?>/assets/images/top/pc_logo_2.png">
      <img class="store-logo" src="<?php my_theme_uri(); ?>/assets/images/common/logo.png" alt="">
    </picture>
    <div class="store-day">
      <picture>
        <source media="(min-width: 768px)" srcset="<?php my_theme_uri(); ?>/assets/images/common/pc_business_day.png">
        <img src="<?php my_theme_uri(); ?>/assets/images/common/sp_business_day.png" alt="">
      </picture>
      <span>※日曜、祝日、年末年始休み</span>
    </div>
    <div>
      <span class="store-address-title"> 住所 </span>
      <div class="store-address-detail"> 東京都 新宿区新宿 6-29-11<br />新宿イーストクロスタワー３F </div>
      <iframe class="store-address-map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12960.633044062532!2d139.7077243!3d35.6977229!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188dd95fccaaf1%3A0x89c2535f2a283669!2z44OV44Kn44Of44Ol44O844K644Kv44Oq44OL44OD44Kv!5e0!3m2!1sja!2sjp!4v1709104256105!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="store-access">
      <span class="store-address-title"> アクセス </span>
      <p class="store-access-detail">都営地下鉄大江戸線・東京メトロ副都心線「東新宿」駅　A3出口より徒歩1分</p>
      <div class="store-access-img-area">
        <div class="store-access-img">
          <picture>
            <source media="(min-width: 768px)" srcset="<?php my_theme_uri(); ?>/assets/images/common/pc_access_1.png">
            <img src="<?php my_theme_uri(); ?>/assets/images/common/sp_access_1.png" alt="">
          </picture>
        </div>
        <div class="store-access-img">
          <picture>
            <source media="(min-width: 768px)" srcset="<?php my_theme_uri(); ?>/assets/images/common/pc_access_2.png">
            <img src="<?php my_theme_uri(); ?>/assets/images/common/sp_access_2.png" alt="">
          </picture>
        </div>
        <div class="store-access-img">
          <picture>
            <source media="(min-width: 768px)" srcset="<?php my_theme_uri(); ?>/assets/images/common/pc_access_3.png">
            <img src="<?php my_theme_uri(); ?>/assets/images/common/sp_access_3.png" alt="">
          </picture>
        </div>
        <div class="store-access-img">
          <picture>
            <source media="(min-width: 768px)" srcset="<?php my_theme_uri(); ?>/assets/images/common/pc_access_4.png">
            <img src="<?php my_theme_uri(); ?>/assets/images/common/sp_access_4.png" alt="">
          </picture>
        </div>
      </div>
    </div>
  </div>
</div>