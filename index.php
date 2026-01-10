<?php get_header(); ?>
<main class="top">
  <div id="fv" class="fv fadein">
    <div class="top-kv-slider">
      <div class="top-kv-slide-img-bg-3">
      </div>
      <div class="top-kv-slide-img-bg-1">
      </div>
      <div class="top-kv-slide-img-bg-2">
      </div>
    </div>
    <h1 class="top-kv-title">
      <img src="<?php my_theme_uri(); ?>/assets/images/top/logo_w.png" alt="東新宿駅徒歩1分の美容皮膚科・婦人科フェミューズクリニック">
    </h1>
  </div>

  <!-- <div class="banner scroll-fadein">
    <a href="https://reserve-femuse-clinic.b4a.clinic/clinics/234/bookings/new/select/date/?i=109560">
      <picture>
        <source media="(min-width: 768px)" srcset="<?php my_theme_uri(); ?>/assets/images/common/femuse_41_pc.jpg?20241107">
        <img src="<?php my_theme_uri(); ?>/assets/images/common/femuse_41_sp.jpg?20241107" alt="">
      </picture>
    </a>
  </div>
  <div class="banner2 scroll-fadein">
    <a href="https://reserve-femuse-clinic.b4a.clinic/clinics/234/bookings/new/select/date/?i=186915">
      <picture>
        <source media="(min-width: 768px)" srcset="<?php my_theme_uri(); ?>/assets/images/common/femuse_42_pc.jpg">
        <img src="<?php my_theme_uri(); ?>/assets/images/common/femuse_42_sp.jpg" alt="">
      </picture>
    </a>
  </div> -->
  <div class="container">
    <div class="info-link">
      <a href="<?php my_home_uri(); ?>info">
        休業に関するお知らせ
      </a>
    </div>

    <?php
    $categories = get_categories(array(
      'order' => 'ASC'
    ));
    $posts = [];
    foreach ($categories as $category) {
      $posts[$category->name] = [];
    }
    $query = [
      'order' => 'ASC',
      'orderby' => 'menu_order',
      'post_status' => 'publish',
      'posts_per_page' => 30,
    ];
    $loop = new WP_Query($query);
    $posts_keys = array_keys($posts);
    if (have_posts()) : while ($loop->have_posts()) : $loop->the_post();
        $cat = get_the_category();
        $cat = $cat[0];
        array_push($posts[$cat->name], $post);
      endwhile;
    endif;
    wp_reset_query();
    ?>
    <div id="menu" class="menu scroll-fadein nav-position">
      <div class="title">
        <h2> メニュー </h2>
        <span>menu</span>
      </div>
      <div class="menu-area">
        <div class="menu-card btn-anime" id="menu-card-ippan-hujinka" data-menu="ippan-hujinka">
          <div class="menu-card-title">
            <div class="menu-card-img">
              <img src="<?php my_theme_uri(); ?>/assets/images/top/icon_hujin.jpg" alt="">
            </div>
            <h2>
              一般婦人科
            </h2>
          </div>
          <div class="menu-crad-body">
            生理のお悩みや、おりもの異常、更年期障害といった保険診療の他、生理日調整、アフターピル、ミレーナ、レディースドックなどの自費診療も行っています。
          </div>
          <img class="menu-card-arrow" src="<?php my_theme_uri(); ?>/assets/images/top/pc_menu_card_arrow.jpg" alt="">
        </div>

        <div class="menu-card btn-anime" id="menu-card-biyou-hujinka" data-menu="biyou-hujinka">
          <div class="menu-card-title">
            <div class="menu-card-img">
              <img src="<?php my_theme_uri(); ?>/assets/images/top/icon_hujinka.jpg" alt="">
            </div>
            <h2>
              美容婦人科
            </h2>
          </div>
          <div class="menu-crad-body">
            「婦人科専門医」による小陰唇縮小手術や腟ヒアルロン酸注射を行っています。女性器周りのお悩みをご相談ください。
          </div>
          <img class="menu-card-arrow" src="<?php my_theme_uri(); ?>/assets/images/top/pc_menu_card_arrow.jpg" alt="">
        </div>

        <div class="menu-card btn-anime" id="menu-card-biyou-hihuka" data-menu="biyou-hihuka">
          <div class="menu-card-title">
            <div class="menu-card-img">
              <img src="<?php my_theme_uri(); ?>/assets/images/top/icon_hihuka.jpg" alt="">
            </div>
            <h2>
              美容皮膚科
            </h2>
          </div>
          <div class="menu-crad-body">
            ボトックスやヒアルロン酸による輪郭形成や、 お肌を美しく保つための肌治療を行なっております。 また、ドクターズコスメも多種ご用意しております。
          </div>
          <img class="menu-card-arrow" src="<?php my_theme_uri(); ?>/assets/images/top/pc_menu_card_arrow.jpg" alt="">
        </div>

        <div class="menu-card btn-anime" id="menu-card-biyou-naika" data-menu="biyou-naika">
          <div class="menu-card-title">
            <div class="menu-card-img">
              <img src="<?php my_theme_uri(); ?>/assets/images/top/icon_biyounaika.jpg" alt="">
            </div>
            <h2>
              美容内科
            </h2>
          </div>
          <div class="menu-crad-body">
            各種注射・点滴のほか、美容内服薬・漢方薬・サプリメントの処方をご提案します。内側からの美容メンテナンスに。
          </div>
          <img class="menu-card-arrow" src="<?php my_theme_uri(); ?>/assets/images/top/pc_menu_card_arrow.jpg" alt="">
        </div>
        <div class="menu-card" id="menu-card-vaccine-allergy" data-menu="vaccine-allergy">
          <div class="menu-card-title">
            <div class="menu-card-img">
              <img src="<?php my_theme_uri(); ?>/assets/images/top/icon_vaccine.jpg" alt="">
            </div>
            <h2>
              ワクチン・予防接種
            </h2>
          </div>
          <div class="menu-crad-body">
            当クリニックでは、HPVワクチン・インフルエンザ予防接種など、多様なワクチン・予防接種を実施しております。感染症の予防や健康維持のため、ぜひご活用ください。
          </div>
          <img class="menu-card-arrow" src="<?php my_theme_uri(); ?>/assets/images/top/pc_menu_card_arrow.jpg" alt="">
        </div>
        <div class="menu-card" data-menu="online" id="menu-online-card">
          <div class="menu-card-title">
            <div class="menu-card-img">
              <img src="<?php my_theme_uri(); ?>/assets/images/top/icon_online.jpg" alt="">
            </div>
            <h2>
              オンライン診療
            </h2>
          </div>
          <div class="menu-crad-body">
            通院が難しい方は、スマートフォンやパソコンから、 医師の診察・処方を受けることが可能です。
          </div>
          <img class="menu-card-arrow" src="<?php my_theme_uri(); ?>/assets/images/top/pc_menu_card_arrow.jpg" alt="">
        </div>
      </div>
    </div>
  </div>

  <?php get_template_part('parts/store', null, $args = ['is-disp-title' => true]) ?>
  <?php get_template_part('parts/menu-modal', null, $args = ['title' => "一般婦人科", 'type' => 'ippan-hujinka', 'menuList' => $posts["一般婦人科"]]) ?>
  <?php get_template_part('parts/menu-modal', null, $args = ['title' => "美容婦人科", 'type' => 'biyou-hujinka', 'menuList' => $posts["美容婦人科"]]) ?>
  <?php get_template_part('parts/menu-modal', null, $args = ['title' => "美容皮膚科", 'type' => 'biyou-hihuka', 'menuList' => $posts["美容皮膚科"]]) ?>
  <?php get_template_part('parts/menu-modal', null, $args = ['title' => "美容内科", 'type' => 'biyou-naika', 'menuList' => $posts["美容内科"]]) ?>
  <?php get_template_part('parts/menu-modal', null, $args = ['title' => "ワクチン・予防接種", 'type' => 'vaccine-allergy', 'menuList' => $posts["ワクチン・予防接種"]]) ?>
  <?php get_template_part('parts/menu-online-modal') ?>

</main>

<?php get_footer(); ?>