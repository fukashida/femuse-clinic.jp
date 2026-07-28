<?php get_header(); ?>
<main class="column">
    <section class="top-title">
        <h1>コラム</h1>
        <p class="en">COLUMN</p>
        <p>美容・ピル・性病検査・体調ケアに関する情報を、<br>
            医師監修のもとお届けします。</p>
    </section>
    <!-- カテゴリフィルターボタン -->
    <div class="category-filter">
        <button class="filter-btn active" data-category="all">すべて</button>
        <button class="filter-btn" data-category="beauty">美容</button>
        <button class="filter-btn" data-category="pill">ピル・婦人科</button>
        <button class="filter-btn" data-category="test">検査・予防</button>
        <button class="filter-btn" data-category="care">体調ケア</button>
        <button class="filter-btn" data-category="guide">診療ガイド</button>
    </div>
    <section class="content">
        <div class="sub-container">
            <!-- 投稿一覧（Ajaxで更新される部分） -->
            <div id="post-list-container">
                <?php
                $posts_per_page = 6; // 1ページあたりの表示件数
                $args = array(
                    'post_type'      => 'column',
                    'posts_per_page' => $posts_per_page,
                    'paged'          => 1,
                    'post_status'    => 'publish',
                );
                $query = new WP_Query($args);

                if ($query->have_posts()) :
                ?>
                    <div class="article-list">
                        <?php while ($query->have_posts()) : $query->the_post();
                            // column_cat タクソノミーを取得
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
                                    <span class="badge">
                                        <?php
                                        if (!empty($terms) && !is_wp_error($terms)) {
                                            $term_names = array();
                                            foreach ($terms as $term) {
                                                $term_names[] = $term->name;
                                                }
                                                echo esc_html(implode(', ', $term_names));
                                                }
                                                ?>
                                    </span>
                                    <h2 class="card-title"><?php the_title(); ?></h2>
                                    <div class="flex">
                                        <time class="card-meta"><?php echo get_the_date('Y.m.d'); ?></time>
                                        <p class="card-meta">監修：広川麻理菜</p>
                                    </div>
                                </div>
                            </a>
                        </article>
                        <?php endwhile; ?>
                    </div>

                    <!-- ページネーション -->
                    <?php if ($query->max_num_pages > 1) : ?>
                        <div class="pagination">
                            <?php for ($i = 1; $i <= $query->max_num_pages; $i++) :
                                $active = ($i === 1) ? ' active' : '';
                            ?>
                                <button class="page-btn<?php echo $active; ?>" data-page="<?php echo $i; ?>"><?php echo $i; ?></button>
                            <?php endfor; ?>
                        </div>
                    <?php endif; ?>

                <?php
                    wp_reset_postdata();
                else :
                ?>
                    <p class="no-posts">投稿がありません。</p>
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>