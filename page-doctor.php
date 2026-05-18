<?php get_header(); ?>
    <main class="doctor-content">
        <section class="top-title">
            <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/info/doctor-mainbg.png" alt="">
        </section>
        <section class="profile-section">
            <div class="sub-container">
                <div class="profile-header">
                    <div class="profile-name-row">
                        <h2 class="profile-name">広川 麻理菜</h2>
                        <span class="profile-kana">ひろかわ まりな</span>
                    </div>
                    <p class="profile-title">フェミューズクリニック 院長</p>
                </div>
                <div class="profile-cards">
                    <div class="profile-card green">
                        <p class="profile-card-title">資格</p>
                        <ul>
                            <li>医師免許</li>
                            <li>精神保健指定医</li>
                        </ul>
                    </div>
                    <div class="profile-card sky">
                        <p class="profile-card-title">学歴</p>
                        <ul>
                            <li>東京慈恵会医科大学 卒業（2020年）</li>
                        </ul>
                    </div>
                    <div class="profile-card blue">
                        <p class="profile-card-title">経歴</p>
                        <ul>
                            <li>東京慈恵会医科大学柏病院 初期研修（2020年）</li>
                            <li>湘南鎌倉総合病院 初期研修・病理診断科（2021年）</li>
                            <li>錦糸町駅前クリニック 管理職（2023年）</li>
                            <li>東京慈恵会医科大学附属病院 精神神経科（2024年）</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="message-section">
            <div class="sub-container">
                <h2 class="section-heading">院長メッセージ</h2>
                <div class="message-body">
                    <p>肌のこと、体のこと、生理のこと。</p>
                    <p>気になることがあっても、「まあいいか」で先送りにしていませんか？</p>
                    <p>私はこれまで精神科や病理診断の研修を通じて、心と体は切り離せないものだと実感してきました。肌の悩みの裏にストレスがあったり、ピルの相談の背景に不安があったりすることは珍しくありません。小さな不調を放っておくことが、その後の生活の質を大きく左右することもあります。</p>
                    <p>女性の体の悩みは、どこかに「言いづらさ」がつきまといます。だからこそ、美容も婦人科も検査も、ぜんぶ同じ場所で、気軽に相談できる場所を作りたいと思いました。</p>
                    <p>フェミューズクリニックは夜23時まで、スマホでも来院でも。「今日、ちょっと聞いてみようかな」——それくらいの気持ちで使っていただけるクリニックです。</p>
                    <p>今の医療でできるケアを、もっと身近に、もっと手軽に。みなさまのこれからの毎日が少しでも快適になるお手伝いができたらうれしいです。</p>
                </div>
                <p class="message-signature">
                    フェミューズクリニック 院長<br>
                    広川 麻理菜
                </p>
            </div>
        </section>
        <section class="highlights-section blue-bg">
            <div class="container">
                <h2 class="section-heading">大切にしていること</h2>
                <div class="highlights-list">
                    <div class="highlight-card">
                        <div class="highlight-icon">
                            <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/info/highlight01.png" alt="">
                        </div>
                        <div class="highlight-text">
                            <h3 class="highlight-title">聞かれたことに、ちゃんと答える</h3>
                            <p class="highlight-desc">「何かありますか？」じゃなくて、必要な情報をこちらから伝えます。でも、押しつけはしません。</p>
                        </div>
                    </div>
                    <div class="highlight-card">
                        <div class="highlight-icon">
                            <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/info/highlight02.png" alt="">
                        </div>
                        <div class="highlight-text">
                            <h3 class="highlight-title">心と体は別々じゃない</h3>
                            <p class="highlight-desc">精神科の経験を活かし、症状の背景にあるストレスや生活の変化にも目を向けます。</p>
                        </div>
                    </div>
                    <div class="highlight-card">
                        <div class="highlight-icon">
                            <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/info/highlight03.png" alt="">
                        </div>
                        <div class="highlight-text">
                            <h3 class="highlight-title">気軽に来られる場所でありたい</h3>
                            <p class="highlight-desc">「病院に行くのは大ごと」じゃなくて、「ちょっと寄る」くらいの感覚で使えるクリニックを目指しています。</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="doctors-section">
            <div class="sub-container">
                <h2 class="section-heading">担当医師</h2>
                <p class="doctors-intro">
                    フェミューズクリニックでは、<br>
                    院長のほかにシフト制で複数の医師が<br>
                    診療を担当しています。
                </p>
                <div class="doctors-card">
                    <?php
                    $doctor_query = new WP_Query([
                        'post_type'      => 'doctor_staff',
                        'posts_per_page' => -1,
                        'orderby'        => ['menu_order' => 'ASC', 'date' => 'ASC'],
                        'post_status'    => 'publish',
                    ]);
                    if ($doctor_query->have_posts()) :
                        while ($doctor_query->have_posts()) : $doctor_query->the_post();
                            $detail = get_post_meta(get_the_ID(), '_doctor_staff_detail', true);
                    ?>
                        <div class="doctor-item">
                            <div class="doctor-avatar">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('medium', ['alt' => get_the_title()]); ?>
                                <?php endif; ?>
                            </div>
                            <div class="doctor-info">
                                <p class="doctor-name"><?php the_title(); ?></p>
                                <p class="doctor-detail"><?php echo nl2br(esc_html($detail)); ?></p>
                            </div>
                        </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
                <p class="doctors-note">
                    ※診療日によって担当医師が異なります。<br>
                    ご指名は承っておりません。
                </p>
            </div>
        </section>
        <section class="cta-section" aria-labelledby="cta-title">
            <div class="cta-inner">
                <h2 class="cta-title wh">まずはお気軽に<br>ご相談ください。</h2>
                <p class="cta-sub">初診料1,500円。保険証は不要です。</p>
                <nav class="cta-buttons" aria-label="相談と予約">
                    <a href="https://aposuru.com/salon/salon_schedules/create/fab37cc0-ddfe-44f9-9023-7772489e2b1f" class="btn-cta btn-blue">来院で予約する</a>
                    <a href="https://liff.line.me/2003578447-9LneB3xY?flowPathId=837&basicId=@436fsscv&liffId=2003578447-9LneB3xY&clientId=2003578447" class="btn-cta btn-sky">オンライン診療を予約する</a>
                </nav>
            </div>
        </section>
    </main>
<?php get_footer(); ?>