<!-- コラム記事の記事ページです -->
<?php get_header(); ?>
<main class="single-column">
    <div class="thumbnail">
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('full', array('alt' => get_the_title())); ?>
        <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/article/no-image.jpg" alt="<?php the_title_attribute(); ?>">
        <?php endif; ?>
    </div>
    <div class="sub-container">
        <div class="top-title">
            <div class="flex">
                <?php
                    // カテゴリースラッグとbadgeクラスの対応表
                    $badge_colors = array(
                        'news'       => 'badge-gray',    // お知らせ
                        'campaign'   => 'badge-green',    // キャンペーン
                        'menu'       => 'badge-gray',   // メニュー更新
                        'holiday'    => 'badge-pink',  // 休診
                    );

                    // 投稿のカテゴリーを取得
                    $categories = get_the_category();
                    if ( ! empty( $categories ) ) :
                        $cat = $categories[0]; // 最初のカテゴリーを使用
                        $badge_class = isset( $badge_colors[ $cat->slug ] ) ? $badge_colors[ $cat->slug ] : 'badge-gray';
                    ?>
                        <span class="category <?php echo esc_attr( $badge_class ); ?>"><?php echo esc_html( $cat->name ); ?></span>
                    <?php endif; ?>
                <p class="time"><?php echo get_the_date('Y.m.d'); ?></p>
            </div>
            <h1><?php the_title(); ?></h1>
        </div>
        <div class="content-box">
            <?php the_content(); ?>
        </div>
    </div>
    <section class="doctor">
        <div class="sub-container">
            <p class="sub-title">監修医師</p>
            <div class="box">
                <!-- <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/common/doctor-icon01.png" alt="" class="icon"> -->
                <div class="text">
                    <p class="name">広川 麻理菜（ひろかわ まりな）</p>
                    <p>フェミューズクリニック院長<br>
                    精神保健指定医 / 東京慈恵会医科大学卒</p>
                </div>
            </div>
            <a href="<?php echo esc_url( get_site_url().'/doctor' ); ?>" class="btn-outline">医師紹介を見る</a>
        </div>
    </section>
    <!-- 関連記事 -->
    <?php
    // 現在の記事のカテゴリを取得
    $current_terms = get_the_terms(get_the_ID(), 'column_cat');
    $term_ids = array();
    if (!empty($current_terms) && !is_wp_error($current_terms)) {
        foreach ($current_terms as $term) {
            $term_ids[] = $term->term_id;
        }
    }

    // 関連記事を取得
    $related_args = array(
        'post_type'      => 'column',
        'posts_per_page' => 3, // 表示件数
        'post__not_in'   => array(get_the_ID()), // 現在の記事を除外
        'orderby'        => 'rand', // ランダム表示（'date'にすれば新着順）
        'post_status'    => 'publish',
    );

    // 同じカテゴリで絞り込み
    if (!empty($term_ids)) {
        $related_args['tax_query'] = array(
            array(
                'taxonomy' => 'column_cat',
                'field'    => 'term_id',
                'terms'    => $term_ids,
            ),
        );
    }

    $related_query = new WP_Query($related_args);

    if ($related_query->have_posts()) : ?>
        <section class="related-posts">
            <h2 class="related-title">関連記事</h2>
            <div class="article-list">
                <?php while ($related_query->have_posts()) : $related_query->the_post();
                    $terms = get_the_terms(get_the_ID(), 'column_cat');
                ?>
                <article class="card">
                    <a href="<?php the_permalink(); ?>">
                        <div class="card-thumbnail">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('medium', array('alt' => get_the_title())); ?>
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/article/no-image.jpg" alt="<?php the_title_attribute(); ?>">
                            <?php endif; ?>
                        </div>
                        <div class="card-body">
                            <div class="set">
                                <h3 class="card-title"><?php the_title(); ?></h3>
                                <time class="card-meta"><?php echo get_the_date('Y.m.d'); ?></time>
                            </div>
                        </div>
                    </a>
                </article>
                <?php endwhile; ?>
            </div>
        </section>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
        <div class="post-nav-back">
            <a href="<?php echo home_url('/column'); ?>" class="nav-button nav-button-back">
                コラム一覧に戻る
            </a>
        </div>
    <section class="cta-section" aria-labelledby="cta-title">
        <div class="cta-inner">
            <h2 class="cta-title wh">まずはお気軽に<br>ご相談ください。</h2>
            <p class="cta-sub">初診料1,500円(税込)。保険証は不要です。</p>
            <nav class="cta-buttons" aria-label="相談と予約">
                <a href="https://aposuru.com/salon/salon_schedules/create/fab37cc0-ddfe-44f9-9023-7772489e2b1f" class="btn-cta btn-blue">来院で予約する</a>
                <a href="https://liff.line.me/2003578447-9LneB3xY?flowPathId=837&basicId=@436fsscv&liffId=2003578447-9LneB3xY&clientId=2003578447" class="btn-cta btn-sky">オンライン診療を予約する</a>
            </nav>
        </div>
    </section>
</main>
<?php get_footer(); ?>