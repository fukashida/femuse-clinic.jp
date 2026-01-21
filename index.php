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
  </div>

  <!-- <section class="bacground-gray">
    <h2 id="campaign">キャンペーン</h2>
  </section> -->


<section>
  <h2 id="menu">診療内容</h2>
  <?php
    // 共通URL
    $visit_url  = 'https://aposuru.com/salon/salon_schedules/create/fab37cc0-ddfe-44f9-9023-7772489e2b1f';
    $online_url = 'https://femuse-clinic.jp/online/';

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
              $has_online = function_exists('get_field') ? get_field('has_online', $child->ID) : null;

              $enabled =
                $has_online === true ||
                $has_online === 1 ||
                $has_online === '1' ||
                (is_array($has_online) && in_array('1', $has_online, true));
            ?>

            <div class="menu-card">
              <a class="menu-card__panel" href="<?php echo esc_url(get_permalink($child->ID)); ?>">
                <h3 class="menu-card__title"><?php echo esc_html($child->post_title); ?></h3>
                <span class="menu-card__detail">詳細</span>
              </a>

              <div class="menu-card__actions">
                <?php if ($enabled): ?>
                  <a target=”_blank” class="btn btn--primary" href="<?php echo esc_url($online_url); ?>">
                    オンライン診療予約
                  </a>
                <?php endif; ?>

                <a target=”_blank” class="btn btn--secondary" href="<?php echo esc_url($visit_url); ?>">
                  来院予約
                </a>
              </div>
            </div>

          <?php endforeach; ?>
        </div>
      </div>
  <?php else: ?>
    <p>現在メニューは準備中です。</p>
  <?php endif; ?>
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

<?php get_footer(); ?>