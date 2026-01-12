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
    <h2 id="campaign">診療内容</h2>
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


  <section class="access">
    <div class="container">
      <h2 id="access">アクセス</h2>
      <div class="flex">
        <div class="item">
          <img class="logo" src="<?php my_theme_uri(); ?>/assets/images/common/logo.webp" alt="femuse" />
          <p>
            〒160-0022<br>
            東京都新宿区新宿6丁目29-11<br>
            新宿イーストクロスタワー3F<br>
            東新宿駅A3出口より徒歩1分
          </p>
          <img class="schedule" src="<?php my_theme_uri(); ?>/assets/images/common/pc_business_day_footer.webp" alt="診療時間" />
        </div>
        <div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.158262129711!2d139.70514937578844!3d35.69772287258188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188dd95fccaaf1%3A0x89c2535f2a283669!2z44OV44Kn44Of44Ol44O844K644Kv44Oq44OL44OD44Kv!5e0!3m2!1sja!2sjp!4v1768226544336!5m2!1sja!2sjp" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </section>

  <section class="bacground-gray access-flow">
  <div class="container">
    <h2 id="flow" class="left">ご来院までの順路</h2>

    <div class="access-flow__grid">
      <!-- 01 -->
      <div class="access-flow__item">
        <div class="access-flow__head">
          <span class="access-flow__no">01</span>
          <p class="access-flow__title">東新宿駅 A3出口へ</p>
        </div>

        <figure class="access-flow__figure">
          <img class="schedule" src="<?php my_theme_uri(); ?>/assets/images/common/access01.webp" alt="東新宿駅A3出口のエレベーター付近" />
          <figcaption class="access-flow__caption">
            東新宿駅 A3出口のエレベーターで<br />
            1Fまでお上がりください。
          </figcaption>
        </figure>
      </div>

      <!-- 02 -->
      <div class="access-flow__item">
        <div class="access-flow__head">
          <span class="access-flow__no">02</span>
          <p class="access-flow__title">右手のビルに当院</p>
        </div>

        <figure class="access-flow__figure">
          <img class="schedule" src="<?php my_theme_uri(); ?>/assets/images/common/access02.webp" alt="当院が入っているビル外観" />
          <figcaption class="access-flow__caption">
            エレベーターを降りて<br>右手にビルがございます。
          </figcaption>
        </figure>
      </div>

      <!-- 03 -->
      <div class="access-flow__item">
        <div class="access-flow__head access-flow__head--last">
          <span class="access-flow__no">03</span>
          <p class="access-flow__title end">3Fが当院です</p>
        </div>

        <figure class="access-flow__figure">
          <img class="schedule" src="<?php my_theme_uri(); ?>/assets/images/common/access03.webp" alt="ビル入口（エレベーターで3Fへ）" />
          <figcaption class="access-flow__caption">
            1Fのエレベーターより3Fまで<br>お越しください。
          </figcaption>
        </figure>
      </div>
    </div>
  </div>
</section>


</main>

<?php get_footer(); ?>