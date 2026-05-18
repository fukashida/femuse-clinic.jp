<?php get_header(); ?>
<main class="news">
    <section class="top-title">
        <h1>お知らせ</h1>
        <p class="en">NEWS</p>
        <p>メニュー更新やキャンペーン、休診など<br>
            クリニックの最新情報をお知らせします。</p>
    </section>
    <section class="content">
        <div class="sub-container">
        <?php
        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

        $args = array(
            'post_type'      => 'post',        // カスタム投稿タイプの場合は変更
            'posts_per_page' => 8,             // 1ページに8記事
            'paged'          => $paged,
            'post_status'    => 'publish',
            'orderby'        => 'date',
            'order'          => 'DESC',
            // カテゴリー指定する場合
            // 'category_name' => 'news',
            // タクソノミー指定する場合
            // 'tax_query' => array(
            //     array(
            //         'taxonomy' => 'genre',
            //         'field'    => 'slug',
            //         'terms'    => array('sample'),
            //     ),
            // ),
        );
        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) : ?>

            <ul class="news-list">
                 <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <li class="news-item">
                    <a href="<?php the_permalink(); ?>" class="news-article">
                        <div class="news-header">
                            <time class="news-date"><?php echo get_the_date('Y.m.d'); ?></time>
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
                                <span class="badge <?php echo esc_attr( $badge_class ); ?>"><?php echo esc_html( $cat->name ); ?></span>
                                <?php endif; ?>
                        </div>
                        <p class="news-title"><?php the_title(); ?></p>
                    </a>
                </li>
                 <?php endwhile; ?>
            </ul>
            <nav class="pagination">
                <?php
                echo paginate_links( array(
                    'total'     => $the_query->max_num_pages,
                    'current'   => $paged,
                    'prev_text' => '«',
                    'next_text' => '»',
                ) );
                ?>
            </nav>
            <?php
            wp_reset_postdata();
        else :
            echo '<p>記事が見つかりませんでした。</p>';
        endif;
        ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>