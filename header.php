<!-- ここはheadタグと左側の固定バー -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>フェミューズクリニック</title> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <?php wp_head(); ?>
</head>
<body>
    <div class="pc-bg">

        <?php if ( ! wp_is_mobile() ) : ?>
            <?php get_sidebar( 'left' ); ?>
        <?php endif; ?>
        
        <div class="main-content">
            <div class="window">
                <div class="inner-content">
                    <!-- ナビゲーションメニュ -->
                    <header>
                        <a href="<?php echo esc_url(home_url()); ?>" class="top-logo">
                            <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/common/logo.svg" alt="" class="logo">
                        </a>
                        <nav>
                            <div class="top-bar-open__click" id="hamburger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="close-menu" id="close-menu">
                                <div class="top-bar">
                                    <div class="top-bar__menu">
                                        <div class="top-menu">
                                            <p class="title">施術メニュー</p>
                                            <ul>
                                                <li><a href="<?php echo esc_url( get_site_url().'/pill' ); ?>">ピル</a></li>
                                                <li class="aco-block">
                                                    <div class="aco-content q content-q">
                                                        <a href="<?php echo esc_url( get_site_url().'/std' ); ?>">性感染症</a>
                                                    </div>
                                                    <ul class="aco-content a content-a">
                                                        <li><a href="<?php echo esc_url( get_site_url().'/std/test-kit' ); ?>">検査キット</a></li>
                                                        <li><a href="<?php echo esc_url( get_site_url().'/std/doxypep' ); ?>">ドキシペップ</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="<?php echo esc_url( get_site_url().'/beauty-drip' ); ?>">美容注射・点滴</a></li>
                                                <li><a href="<?php echo esc_url( get_site_url().'/drip-care' ); ?>">体調ケア注射・点滴</a></li>
                                                <li><a href="<?php echo esc_url( get_site_url().'/beauty-medicine' ); ?>">美容内服</a></li>
                                                <li class="aco-block">
                                                    <div class="aco-content q content-q">
                                                        <a href="<?php echo esc_url( get_site_url().'/medical-diet' ); ?>">メディカルダイエット</a>
                                                    </div>
                                                    <ul class="aco-content a content-a">
                                                        <li><a href="<?php echo esc_url( get_site_url().'/medical-diet/manjaro' ); ?>">マンジャロ</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="<?php echo esc_url( get_site_url().'/botox' ); ?>">ボトックス</a></li>
                                                <li><a href="<?php echo esc_url( get_site_url().'/xolair' ); ?>">ゾレア</a></li>
                                                <li><a href="<?php echo esc_url( get_site_url().'/urso' ); ?>">ウルソ</a></li>
                                            </ul>
                                        </div>
                                        <div class="middle-menu">
                                            <p class="title">ご案内</p>
                                            <ul>
                                                <li><a href="<?php echo esc_url( get_site_url().'/about' ); ?>">クリニック紹介</a></li>
                                                <li><a href="<?php echo esc_url( get_site_url().'/flow' ); ?>">診療の流れ</a></li>
                                                <li><a href="<?php echo esc_url( get_site_url().'/doctor' ); ?>">医師紹介</a></li>
                                                <li><a href="<?php echo esc_url( get_site_url().'/price' ); ?>">料金一覧</a></li>
                                                <li><a href="<?php echo esc_url( get_site_url().'/faq' ); ?>">よくある質問</a></li>
                                                <li><a href="<?php echo esc_url( get_site_url().'/access' ); ?>">アクセス</a></li>
                                                <li><a href="<?php echo esc_url( get_site_url().'/column' ); ?>">コラム</a></li>
                                                <li><a href="<?php echo esc_url( get_site_url().'/news' ); ?>">お知らせ</a></li>
                                                <li><a href="<?php echo esc_url( get_site_url().'/contact' ); ?>">お問い合わせ</a></li>
                                            </ul>
                                        </div>
                                        <div class="bottom-menu">
                                            <a href="tel:03-6205-5937" class="tel">☎ 03-6205-5937</a>
                                            <p>来院 木・金・土 18:00〜23:00 ／ オンライン 月〜土</p>
                                            <div class="cta-buttons">
                                                <a href="https://aposuru.com/salon/salon_schedules/create/fab37cc0-ddfe-44f9-9023-7772489e2b1f" class="btn-cta btn-blue">来院で予約する</a>
                                                <a href="https://liff.line.me/2003578447-9LneB3xY?flowPathId=837&basicId=@436fsscv&liffId=2003578447-9LneB3xY&clientId=2003578447" class="btn-cta btn-sky">オンライン診療を予約する</a>
                                                <a href="https://liff.line.me/2003578447-9LneB3xY?flowPathId=837&basicId=@436fsscv&liffId=2003578447-9LneB3xY&clientId=2003578447" class="btn-cta btn-green">LINEで相談する</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </header>
                    <?php breadcrumb_html(); ?>