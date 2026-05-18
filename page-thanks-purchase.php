<?php get_header(); ?>
<main class="thanks">
    <section class="top-title purchase">
        <h1>ご注文<br>ありがとうございます！</h1>
        <p class="sub">ご注文を受け付けました。<br>
        確認メールをお送りしていますので<br>
        ご確認ください。</p>
    </section>
    <section class="howto">
        <div class="container">
            <h2>配送について</h2>
            <table class="delivery">
                <tr>
                    <th>お届け目安</th>
                    <td>通常2〜3営業日</td>
                </tr>
                <tr>
                    <th>届け方</th>
                    <td>無地のコンパクトな箱で<br>ポスト投函</td>
                </tr>
                <tr>
                    <th>伝票の品名</th>
                    <td>日用品</td>
                </tr>
                <tr>
                    <th>差出人</th>
                    <td>個人名で表記</td>
                </tr>
            </table>
            <p class="ano">※届く荷物の外見から中身がわかることはありません。</p>
            <h2 class="mt">届いたら</h2>
            <div class="box purchase">
                <div class="text">
                    <p class="title">医薬品をご購入の場合</p>
                    <p>同封の説明書をよく読み、用法・用量を守って服用してください。服用後に気になることがあれば、オンライン診療でご相談いただけます。</p>
                </div>
            </div>
            <div class="box purchase">
                <div class="text">
                    <p class="title">検査キットをご購入の場合</p>
                    <p>1. 同封のキットで検体を採取<br>
                    2. 返送用封筒で送付<br>
                    3. 結果はLINEまたはメールでお知らせします</p>
                </div>
            </div>
        </div>
    </section>
    <section class="other-menu sky-bg">
        <div class="container">
            <h2 class="header-title wh">こちらもチェック</h2>
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
                <a href="<?php echo esc_url( get_site_url().'/beauty-medicine' ); ?>" class="menu-btn">
                    <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/thanks/naihuku.png" alt="">
                    <div class="text">
                        <p class="name">美容内服</p>
                        <p class="desc">肌・髪のケア</p>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="cta-section">
        <div class="sub-container">
            <div class="cta-inner">
                <p class="cta-sub">商品に関するご質問や<br>
                お困りのことがあれば、<br>
                お気軽にご連絡ください。</p>
                <nav class="cta-buttons" aria-label="相談と予約">
                    <a href="https://liff.line.me/2003578447-9LneB3xY?flowPathId=837&basicId=@436fsscv&liffId=2003578447-9LneB3xY&clientId=2003578447" class="btn-cta btn-green">LINE(24時間受付)</a>
                    <a href="tel:03-6205-5937" class="btn-cta btn-black">電話(03-6205-5937)</a>
                </nav>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>