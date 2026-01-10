<?php get_header(); ?> 
<main class="menu">
    <div class="container">
        <div class="about-kv">
            <picture>
                <source media="(min-width: 768px)" srcset="<?php my_theme_uri(); ?>/assets/images/about/pc_kv.png">
                <img class="about-kv-img fadein" src="<?php my_theme_uri(); ?>/assets/images/about/sp_kv.png" alt="">
            </picture>
            <h1>メニュー名メニュー名</h1>
        </div>
        <div class="about-container">
            <h1>
                About <br>
                femuse clinic
            </h1>
            <div class="about-info">
                <h2 class="about-info-main-copy">
                メインコピーが入りますメイン<br>コピーが入ります
                </h2>
                <p>
                ブランドメッセージのテキストが入ります。ブランドメッセージのテキストが入ります。ブランドメッセージのテキストが入ります。ブランドメッセージのテキストが入ります。ブランドメッセージのテキストが入ります。ブランドメッセージのテキストが入ります。
                </p>
            </div>
            <div class="about-title-area">
                <div class="about-title-line"></div>
                <div class="title">
                    <h2> femuse clinic の強み </h2>
                    <span>advantage</span>
                </div>
            </div>
            <div class="about-detail">
                <div class="about-detail-group">
                    <div class="about-detail-box">
                        <h3 class="about-line-title">強みのコピーが入ります強みのコピー が入ります<h3>
                        <p>
                        ブランドメッセージのテキストが入ります。ブランドメッセージのテキストが入ります。ブランドメッセージのテキストが入ります。ブランドメッセージのテキストが入ります。ブランドメッセージのテキストが入ります。ブランドメッセージのテキストが入ります。
                        </p>
                    </div>
                    <div class="about-detail-box">
                        <img src="<?php my_theme_uri(); ?>/assets/images/about/temp.png">
                    </div>
                </div>
                <div class="about-detail-group">
                    <div class="about-detail-box">
                        <img src="<?php my_theme_uri(); ?>/assets/images/about/temp.png">
                    </div>
                    <div class="about-detail-box">
                        <h3  class="about-line-title">強みのコピーが入ります強みのコピー が入ります<h3>
                        <p>
                        ブランドメッセージのテキストが入ります。ブランドメッセージのテキストが入ります。ブランドメッセージのテキストが入ります。ブランドメッセージのテキストが入ります。ブランドメッセージのテキストが入ります。ブランドメッセージのテキストが入ります。
                        </p>
                    </div>
                </div>
                <div class="about-detail-group">
                    <div class="about-detail-box">
                        <h3 class="about-line-title">強みのコピーが入ります強みのコピー が入ります<h3>
                        <p>
                        ブランドメッセージのテキストが入ります。ブランドメッセージのテキストが入ります。ブランドメッセージのテキストが入ります。ブランドメッセージのテキストが入ります。ブランドメッセージのテキストが入ります。ブランドメッセージのテキストが入ります。
                        </p>
                    </div>
                    <div class="about-detail-box">
                        <img src="<?php my_theme_uri(); ?>/assets/images/about/temp.png">
                    </div>
                </div>
            </div>
        </div>
        <?php get_template_part('parts/store', null, $args = ['is-disp-title' => false]) ?> 
    </div>
</main>
<?php get_template_part('parts/reserve-modal') ?> 

<?php get_footer(); ?>