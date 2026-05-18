<?php get_header(); ?>
<main class="thanks">
    <section class="top-title">
        <h1>LINE登録<br>
        ありがとうございます！</h1>
        <p class="sub">フェミューズクリニック<br>
        公式LINEへの登録が完了しました。<br>
        LINEからは以下のことができます。</p>
    </section>
    <section class="howto">
        <div class="container">
            <h2>LINEでできること</h2>
            <div class="content-list">
                <div class="box">
                    <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/thanks/thanks-lineicon01.png" alt="">
                    <div class="text">
                        <p class="title">チャット購入</p>
                        <p>性病検査キット・ウルソ・美容内服を24時間注文</p>
                    </div>
                </div>
                <div class="box">
                    <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/thanks/thanks-lineicon02.png" alt="">
                    <div class="text">
                        <p class="title">予約のご案内</p>
                        <p>来院・オンライン診療の予約リンクをお送りします</p>
                    </div>
                </div>
                <div class="box">
                    <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/thanks/thanks-lineicon03.png" alt="">
                    <div class="text">
                        <p class="title">お問い合わせ</p>
                        <p>診療や料金に関するご質問にお答えします</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="other-menu green-bg">
        <div class="container">
            <h2 class="header-title wh">まずはこちらから</h2>
            <div class="btn-box">
                <a href="<?php echo esc_url( get_site_url().'/beauty-drip' ); ?>" class="menu-btn">
                    <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/thanks/shiratama.png" alt="">
                    <div class="text">
                        <p class="name">白玉点滴</p>
                        <p class="desc">美白・疲労回復</p>
                    </div>
                </a>
                <a href="<?php echo esc_url( get_site_url().'/pill' ); ?>" class="menu-btn">
                    <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/thanks/pill.png" alt="">
                    <div class="text">
                        <p class="name">低用量ピル</p>
                        <p class="desc">月経トラブル・避妊</p>
                    </div>
                </a>
                <a href="<?php echo esc_url( get_site_url().'/std/test-kit' ); ?>" class="menu-btn">
                    <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/thanks/test-kit.png" alt="">
                    <div class="text">
                        <p class="name">性感染症検査</p>
                        <p class="desc">即日結果あり</p>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="cta-section">
        <div class="sub-container">
            <div class="cta-inner">
                <nav class="cta-buttons" aria-label="相談と予約">
                    <a href="https://aposuru.com/salon/salon_schedules/create/fab37cc0-ddfe-44f9-9023-7772489e2b1f" class="btn-cta btn-blue">来院で予約する</a>
                    <a href="https://liff.line.me/2003578447-9LneB3xY?flowPathId=837&basicId=@436fsscv&liffId=2003578447-9LneB3xY&clientId=2003578447" class="btn-cta btn-sky">オンライン診療を予約する</a>
                </nav>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>