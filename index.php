<?php get_header(); ?>

<style>
.schedule-tabs {
  display: flex;
  gap: 8px;
  margin-bottom: 16px;
}

.schedule-tab-btn {
  padding: 8px 24px;
  border: 1px solid #ccc;
  background: #fff;
  border-radius: 4px;
  font-size: 14px;
  cursor: pointer;
  transition: background 0.2s, color 0.2s, border-color 0.2s;
}

.schedule-tab-btn.active {
  background: #333;
  color: #fff;
  border-color: #333;
}

.schedule-panel {
  display: none;
}

.schedule-panel.active {
  display: block;
}
</style>

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
  </div>

  <!-- <section class="bacground-gray">
    <h2 id="campaign">キャンペーン</h2>
  </section> -->


  <section class="p-newmenu">
  <div class="inner1100">
    <h2 class="">
      メニューのご紹介
    </h2>
  </div>

  <div class="slider-outer">
    <div class="slider-track-wrap">
      <div class="slider-track" id="sliderTrack">
        <!-- slides injected by JS -->
      </div>
    </div>
  </div>

  <ul class="slick-dots" id="slickDots"></ul>
</section>


<section>
  <h2 id="menu">診療内容</h2>
  <?php
    // 共通URL
    $visit_url  = 'https://aposuru.com/salon/salon_schedules/create/fab37cc0-ddfe-44f9-9023-7772489e2b1f';
    $online_url = 'https://femuse-clinic.jp/online/';
    $std_url = 'https://femuse-clinic.jp/std-test/';

    // 親ページ（/menu/）を取得
    $menu_parent = get_page_by_path('menu');
    $menu_parent_id = $menu_parent ? (int) $menu_parent->ID : 0;

    // 子ページ取得
    $children = $menu_parent_id ? get_pages([
      'parent'      => $menu_parent_id,
      'sort_column' => 'menu_order',
      'sort_order'  => 'ASC',
      'post_status' => 'publish',
    ]) : [];
  ?>

  <?php if (!empty($children)): ?>
      <div class="container">
        <div class="menu-grid">
          <?php foreach ($children as $child): ?>

            <?php
              $has_online   = get_field('has_online', $child->ID);
              $has_athome   = get_field('has_athome', $child->ID);
              $has_atclinic = get_field('has_atclinic', $child->ID);

              $online_enabled   = is_array($has_online) && in_array('1', $has_online, true);
              $athome_enabled   = is_array($has_athome) && in_array('1', $has_athome, true);
              $atclinic_enabled = is_array($has_atclinic) && in_array('1', $has_atclinic, true);

              // xolair だけ遷移先を上書き
              $card_url = ($child->post_name === 'xolair')
                ? 'https://femuse-clinic.jp/xolair/'
                : get_permalink($child->ID);
            ?>

            <div class="menu-card">
              <a class="menu-card__panel" href="<?php echo esc_url($card_url); ?>">
                <h3 class="menu-card__title"><?php echo esc_html($child->post_title); ?></h3>
                <span class="menu-card__detail">詳細</span>
              </a>

              <div class="menu-card__actions">

                <?php if ($online_enabled): ?>
                  <a target="_blank" class="btn btn--primary" href="<?php echo esc_url($online_url); ?>">
                    オンライン診療予約
                  </a>
                <?php endif; ?>

                <?php if ($athome_enabled): ?>
                  <a target="_blank" class="btn btn--primary" href="<?php echo esc_url($std_url); ?>">
                    自宅で検査
                  </a>
                <?php endif; ?>

                <?php if ($atclinic_enabled): ?>
                  <a target="_blank" class="btn btn--secondary" href="<?php echo esc_url($visit_url); ?>">
                    クリニックで検査
                  </a>
                <?php else: ?>
                  <a target="_blank" class="btn btn--secondary" href="<?php echo esc_url($visit_url); ?>">
                    来院予約
                  </a>
                <?php endif; ?>

              </div>
            </div>

          <?php endforeach; ?>
        </div>
      </div>
  <?php else: ?>
    <p>現在メニューは準備中です。</p>
  <?php endif; ?>
</section>

<section class="schedule">
  <div class="container">

    <div class="schedule-tabs">
      <button class="schedule-tab-btn active" data-target="schedule-march">3月</button>
      <button class="schedule-tab-btn" data-target="schedule-april">4月</button>
    </div>

    <div class="schedule-panel active" id="schedule-march">
      <img src="https://femuse-clinic.jp/wp-content/uploads/2026/03/3月（PC）.png" alt="3月のスケジュール" class="pc">
      <img src="https://femuse-clinic.jp/wp-content/uploads/2026/03/3月（SP）.png" alt="3月のスケジュール" class="sp">
    </div>

    <div class="schedule-panel" id="schedule-april">
      <img src="https://femuse-clinic.jp/wp-content/uploads/2026/03/4月（PC）.png" alt="4月のスケジュール" class="pc">
      <img src="https://femuse-clinic.jp/wp-content/uploads/2026/03/4月（SP）.png" alt="4月のスケジュール" class="sp">
    </div>

  </div>
</section>

  <section class="bacground-gray">
  <div class="container">

  <h2 id="news" class="left">お知らせ</h2>

  <?php
  $news_query = new WP_Query([
    'post_type'      => 'post',
    'category_name'  => 'news', // カテゴリースラッグ
    'posts_per_page' => 3,      // 表示件数（任意）
  ]);
  ?>
    <?php if ($news_query->have_posts()) : ?>
      <ul class="news-list">
        <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
          <li>
            <a href="<?php the_permalink(); ?>">
              <time datetime="<?php the_time('c'); ?>">
                <?php the_time('Y.m.d'); ?>
              </time>
              <span><?php the_title(); ?></span>
            </a>
          </li>
        <?php endwhile; ?>
      </ul>
    <?php else : ?>
      <p class="news-empty">現在お知らせはありません。</p>
    <?php endif; ?>
  
    <?php wp_reset_postdata(); ?>
  </div>
  </section>

  <?php get_template_part('parts/section', 'access'); ?>

</main>

<script>
document.querySelectorAll('.schedule-tab-btn').forEach(function(btn) {
  btn.addEventListener('click', function() {
    document.querySelectorAll('.schedule-tab-btn').forEach(function(b) {
      b.classList.remove('active');
    });
    document.querySelectorAll('.schedule-panel').forEach(function(p) {
      p.classList.remove('active');
    });
    btn.classList.add('active');
    document.getElementById(btn.dataset.target).classList.add('active');
  });
});
</script>

<?php get_footer(); ?>