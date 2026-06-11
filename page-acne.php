<?php get_header(); ?>
<main class="acne">
    <section class="top-title">
        <img src="<?php echo get_template_directory_uri(); ?>/img/menu/acne/acne-bg.png" alt="">
        <div class="text">
            <h1><span>繰り返すニキビ、</span><br>
            <span>オンラインで相談できます。</span></h1>
        </div>
        <div class="point">
            <p class="main-text">まずオンライン診療でご相談ください。<br>
                診察後、処方薬をご自宅にお届けします。<br>
                月1回のフォローもオンラインで対応します。</p>
        </div>
        <div class="cta">
            <a href="https://liff.line.me/2003578447-9LneB3xY?flowPathId=837&basicId=@436fsscv&liffId=2003578447-9LneB3xY&clientId=2003578447" class="btn-cta btn-sky">オンライン診療を予約する</a>
            <a href="https://aposuru.com/salon/salon_schedules/create/f2b821f8-8b1c-45dd-9f90-ff3c993219cd" class="btn-cta btn-blue">来院で予約する</a>
        </div>
    </section>
    <section class="negative">
        <div class="sub-container">
            <h2>こんなニキビに<br>心当たりはありますか？</h2>
            <div class="list-box">
                <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/menu/acne/lady04.png" alt="" class="lady lady04">
                <ul>
                    <li>外用薬を何年も続けているが、やめると再発する</li>
                    <li>皮膚科で抗生剤を出してもらっても、<br>根本的には変わらない</li>
                    <li>「体質だから仕方ない」と言われてきた</li>
                    <li>ニキビ跡（赤み・凹み）になる前に、<br>ちゃんと対処したい</li>
                    <li>イソトレチノインを試したいが、<br>服用中の避妊管理が不安</li>
                    <li>仕事帰りに通えるクリニックが見つからない</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="variation grade-bg02">
        <div class="sub-container">
            <h2><span>症</span><span>状</span>に合わせて<br>
            治療を選べます</h2>
            <div class="card-list">
                <div class="card">
                    <div class="card-image low-dose">
                        <div class="card-image-overlay"></div>
                        <div class="card-tag">
                            <span>チャット購入 or 来院</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-header">
                            <h3 class="card-title">美容内服</h3>
                            <p class="card-price">（ビオチン・ミヤBM）</p>
                        </div>
                        <p class="card-description">皮脂バランスや腸内環境を整えることで、肌荒れ・ニキビの改善をサポートします。</p>
                        <a href="<?php echo esc_url( get_site_url().'/beauty-medicine' ); ?>" class="btn-outline">詳細を見る</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-image after-pill">
                        <div class="card-image-overlay"></div>
                        <div class="card-tag online">
                            <span>オンライン診療</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-header">
                            <h3 class="card-title">経口イソトレチノイン</h3>
                        </div>
                        <p class="card-description">繰り返すニキビへの、次の選択肢<br>重症・難治性ニキビ</p>
                        <a href="#isotretinoin" class="btn-outline">詳細を見る</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="isotretinoin" id="isotretinoin">
        <div class="sub-container">
            <h2>経口イソトレチノイン</h2>
            <div class="hero-img">
                <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/menu/acne/isotoretinoin.png" alt="イソトレチノイン"/>
            </div>
            <div class="contents-group">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">料金</h3>
                    </div>
                    <div class="card-body">
                        <p class="pricing-note">初診料 1,500円（税込）/ 再診料 500円（税込）</p>
                        <div class="pricing-list">
                            <div class="pricing-row">
                                <div class="pricing-col duration">1ヶ月</div>
                                <div class="pricing-col total">¥6,600</div>
                                <div class="pricing-col monthly">¥6,600/月</div>
                            </div>
                            <div class="pricing-row">
                                <div class="pricing-col duration">3ヶ月</div>
                                <div class="pricing-col total">¥16,500</div>
                                <div class="pricing-col monthly">¥5,500/月</div>
                            </div>
                            <div class="pricing-row featured">
                                <div class="pricing-col duration">6ヶ月</div>
                                <div class="pricing-col total">¥29,700</div>
                                <div class="pricing-col monthly">¥4,950/月</div>
                            </div>
                        </div>
                        <p class="pricing-disclaimer">※長期プランほど月あたり単価が下がります。次回お届け日の10日前までスキップ・解約が可能です。</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">処方までの流れ</h3>
                    </div>
                    <div class="card-body">
                        <div class="steps-list">
                            <article class="step-item">
                                <div class="step-label"><span>STEP1</span></div>
                                <div class="step-content">
                                    <div class="step-icon">
                                        <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/menu/acne/acne-step01.png" alt=""/>
                                    </div>
                                    <p class="step-text">オンライン診療で<br>初診・診察</p>
                                </div>
                            </article>
                            <article class="step-item">
                                <div class="step-label"><span>STEP2</span></div>
                                <div class="step-content">
                                    <div class="step-icon">
                                        <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/menu/acne/acne-step02.png" alt=""/>
                                    </div>
                                    <p class="step-text">処方薬を<br>ご自宅にお届け</p>
                                </div>
                            </article>
                            <article class="step-item">
                                <div class="step-label"><span>STEP3</span></div>
                                <div class="step-content">
                                    <div class="step-icon">
                                        <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/menu/acne/acne-step03.png" alt=""/>
                                    </div>
                                    <p class="step-text">月1回の<br>オンラインフォロー</p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="risk">
        <div class="sub-container">
            <h2>リスク・副作用</h2>
            <div class="risk-cards">
                <div class="risk-card">
                    <div class="risk-card__header">
                        <div class="risk-card__title">副作用</div>
                    </div>
                    <div class="risk-card__body">
                        <div class="risk-row">
                            <div class="risk-row__label">非常に多い</div>
                            <div class="risk-row__value">
                                口唇・皮膚の乾燥 / 光線過敏
                            </div>
                        </div>
                        <div class="risk-row risk-row--shaded">
                            <div class="risk-row__label">採血確認</div>
                            <div class="risk-row__value">
                                肝機能障害・中性脂肪上昇（月1回採血）
                            </div>
                        </div>
                        <div class="risk-row">
                            <div class="risk-row__label">要注意</div>
                            <div class="risk-row__value">
                                精神症状（海外添付文書記載、因果関係未確立）
                            </div>
                        </div>
                        <div class="risk-row risk-row--shaded">
                            <div class="risk-row__label">服用できない方</div>
                            <div class="risk-row__value">
                                妊娠中・授乳中・妊娠計画中 / 肝機能障害 / 高中性脂肪・高コレステロール血症
                            </div>
                        </div>
                    </div>
                </div>
                <div class="risk-card">
                    <div class="risk-card__header">
                        <div class="risk-card__title">国内未承認薬に関する記載</div>
                    </div>
                    <div class="risk-card__body">
                        <div class="risk-row">
                            <div class="risk-row__label">承認状況</div>
                            <div class="risk-row__value">
                                日本国内で承認されていない医薬品
                            </div>
                        </div>
                        <div class="risk-row risk-row--shaded">
                            <div class="risk-row__label">入手経路</div>
                            <div class="risk-row__value">
                                薬機法第76条の3の2に基づき輸入
                            </div>
                        </div>
                        <div class="risk-row">
                            <div class="risk-row__label">国内承認薬の有無</div>
                            <div class="risk-row__value">
                                経口イソトレチノインの国内承認薬はありません（外用薬は別）
                            </div>
                        </div>
                        <div class="risk-row risk-row--shaded">
                            <div class="risk-row__label">海外承認</div>
                            <div class="risk-row__value">
                                1982年 米国FDA / 欧州EMA 承認・40年超の実績
                            </div>
                        </div>
                        <div class="risk-row">
                            <div class="risk-row__label">救済制度</div>
                            <div class="risk-row__value">
                                医薬品副作用被害救済制度の対象外
                            </div>
                        </div>
                    </div>
                </div>
                <p>繰り返すニキビの多くは、皮脂の過剰分泌が原因です。経口イソトレチノインは皮脂の分泌量そのものを抑えることで、難治性のニキビに効果を発揮します。</p>
            </div>
        </div>
    </section>
    <section class="faq">
        <div class="sub-container">
            <h2>よくある質問</h2>
            <div class="qa-boxes">
                <div class="qa-box">
                    <p class="question">どの治療が自分に合うかわかりません。</p>
                    <p class="answer">来院またはオンライン診療でご相談ください。医師が症状・治療歴をもとに提案します。</p>
                </div>
                <div class="qa-box">
                    <p class="question">イソトレチノインはどのくらいで効果が出ますか？</p>
                    <p class="answer">個人差がありますが、2〜3ヶ月で皮脂分泌の減少を感じる方が多いです。標準的な治療期間は4〜6ヶ月程度です。</p>
                </div>
                <div class="qa-box">
                    <p class="question">イソトレチノインは日本で未承認と聞きました。受けても大丈夫ですか？</p>
                    <p class="answer">1982年から米国FDA・欧州EMAで承認済み、40年以上の実績があります。月1回採血フォローのもとで処方します。</p>
                </div>
                <div class="qa-box">
                    <p class="question">妊娠中・授乳中でも受けられますか？</p>
                    <p class="answer">妊娠中・授乳中の方は服用できません（絶対禁忌）。当院ではピルも処方しており、避妊管理を含めて相談できます。</p>
                </div>
                <div class="qa-box">
                    <p class="question">ピルと一緒に処方してもらえますか？</p>
                    <p class="answer">はい。当院では低用量ピルも処方しています。イソトレチノイン服用中の避妊管理を含め、同一クリニックで相談・処方できます。</p>
                </div>
                <div class="qa-box">
                    <p class="question">副作用が心配です。</p>
                    <p class="answer">最も多い副作用は口唇・皮膚の乾燥です。非常に多くの方に起こりますが、保湿ケアで対処できる範囲です。肝機能・中性脂肪は月1回の採血で確認します。気になる症状が出た場合はすぐに医師にご相談ください。</p>
                </div>
                <div class="qa-box">
                    <p class="question">保険証は必要ですか？</p>
                    <p class="answer">不要です。自由診療のため、保険証の提示は必要ありません。</p>
                </div>
            </div>
        </div>
    </section>
    <section class="doctor-section">
        <div class="sub-container">
                <p class="doctor-section__label">監修医師</p>
                <div class="doctor-card">
                    <!-- <div class="doctor-card__avatar">
                        <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/common/doctor-icon01.png" alt="広川 麻理菜 医師" onerror="this.style.display='none';this.parentElement.querySelector('.doctor-card__avatar-placeholder').style.display='block'" />
                    </div> -->
                    <p class="doctor-card__role">院長 / 精神保健指定医</p>
                    <h2 class="doctor-card__name">広川 麻理菜</h2>
                    <p class="doctor-card__bio">「何年も薬を使い続けているのに、治ったと思えたことがない」という方がいらっしゃいます。<br>
                        なかなか改善が見られない場合、イソトレチノインが選択肢になります。<br>
                        副作用管理も避妊管理も含めて、オンラインで一緒に進められます。</p>
                    <a href="<?php echo esc_url( get_site_url().'/doctor' ); ?>" class="btn-outline">医師紹介を見る</a>
                </div>
        </div>
    </section>
    <section class="other-menu sky-bg">
        <div class="sub-container">
            <h2 class="header-title wh">関連コンテンツ</h2>
            <div class="btn-box">
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
    <section class="cta-section" aria-labelledby="cta-title">
        <div class="cta-inner">
            <h2 class="cta-title wh">治らないと思っていたニキビ<br>一度相談してみてください。</h2>
            <p class="cta-sub">美容も、婦人科も、ぜんぶ。23時まで。</p>
            <nav class="cta-buttons" aria-label="相談と予約">
                <a href="https://aposuru.com/salon/salon_schedules/create/fab37cc0-ddfe-44f9-9023-7772489e2b1f" class="btn-cta btn-blue">来院で予約する</a>
                <a href="https://liff.line.me/2003578447-9LneB3xY?flowPathId=837&basicId=@436fsscv&liffId=2003578447-9LneB3xY&clientId=2003578447" class="btn-cta btn-sky">オンライン診療を予約する</a>
                <a href="https://liff.line.me/2003578447-9LneB3xY?flowPathId=837&basicId=@436fsscv&liffId=2003578447-9LneB3xY&clientId=2003578447" class="btn-cta btn-green">LINEで相談する</a>
            </nav>
        </div>
    </section>
</main>
<?php get_footer(); ?>