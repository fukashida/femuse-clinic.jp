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

  <section class="bacground-gray">
    <h2 id="campaign">キャンペーン</h2>
  </section>

  <section>
    <h2 id="menu">診療内容</h2>
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