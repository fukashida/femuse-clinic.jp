<!-- お知らせ記事の記事ページです -->
<?php get_header(); ?>
<main class="single">
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
    <nav class="post-navigation">
        <div class="post-nav-prev">
            <?php
            $prev_post = get_previous_post();
            if (!empty($prev_post)) : ?>
                <a href="<?php echo get_permalink($prev_post->ID); ?>" class="nav-button">
                    <span class="nav-label">←前の記事</span>
                    <span class="nav-title"><?php echo esc_html($prev_post->post_title); ?></span>
                </a>
            <?php else : ?>
                <span class="nav-button is-disabled">
                    <span class="nav-label">←前の記事</span>
                </span>
            <?php endif; ?>
        </div>
        <div class="post-nav-next">
            <?php
            $next_post = get_next_post();
            if (!empty($next_post)) : ?>
                <a href="<?php echo get_permalink($next_post->ID); ?>" class="nav-button">
                    <span class="nav-label">次の記事→</span>
                    <span class="nav-title"><?php echo esc_html($next_post->post_title); ?></span>
                </a>
                <?php else : ?>
                    <span class="nav-button is-disabled">
                        <span class="nav-label">次の記事→</span>
                    </span>
                    <?php endif; ?>
        </div>
        <div class="post-nav-back">
            <a href="<?php echo home_url('/news'); ?>" class="nav-button nav-button-back">
                お知らせ一覧に戻る
            </a>
        </div>
    </nav>
</main>
<?php get_footer(); ?>