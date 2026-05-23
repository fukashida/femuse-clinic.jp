<?php get_header(); ?>
<main class="flow-content">
    <section class="top-title copy">
        <img src="<?php echo get_template_directory_uri(); ?>/img/info/flow-bg.png" alt="">
        <div class="text">
            <h1><span>予約も診察も処方も、</span><br>
                <span>かんたんです。</span></h1>
            <p>スマホで注文・オンライン診療・来院の<br>
            3つの使い方があります。</p>
        </div>
    </section>
    <section class="guides-section">
        <div class="guides-header">
            <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/info/logo-green.svg" alt="" class="logo">
            <h2>3つの使い方</h2>
        </div>
        <div class="cards-container">
            <div class="guide-card green">
                <div class="card-header">
                    <div class="card-title-row">
                        <h3>スマホで注文</h3>
                        <span class="badge green">24時間</span>
                    </div>
                    <p class="card-description sm">診察なし。選んで買って、届くのを待つだけ。</p>
                </div>
                <div class="card-divider"></div>
                <div class="card-body">
                    <div class="step-row">
                        <div class="step-number"><span>1</span></div>
                        <div class="step-content">
                            <h4>チャットで商品を選ぶ</h4>
                            <p>LINEまたはチャットボットから選択</p>
                        </div>
                    </div>
                    <div class="step-row">
                        <div class="step-number"><span>2</span></div>
                        <div class="step-content">
                            <h4>お届け先・決済を入力</h4>
                            <p>約2分で完了</p>
                        </div>
                    </div>
                    <div class="step-row">
                        <div class="step-number"><span>3</span></div>
                        <div class="step-content">
                            <h4>届いたら使う</h4>
                            <p>通常2〜3営業日でお届け</p>
                        </div>
                    </div>
                    <p class="card-note">無地の箱でポスト投函。伝票の品名は「日用品」。</p>
                </div>
            </div>
            <div class="guide-card sky">
                <div class="card-header">
                    <div class="card-title-row">
                    <h3>オンライン診療</h3>
                    <span class="badge sky">月〜土曜　18:00~23:00</span>
                    </div>
                    <p class="card-description xs">医師に相談してから処方。届くのを待つだけ。</p>
                </div>
                <div class="card-divider"></div>
                <div class="card-body">
                    <div class="step-row">
                        <div class="step-number"><span>1</span></div>
                        <div class="step-content">
                            <h4>Web予約 + 問診入力</h4>
                            <p>スマホから事前に回答</p>
                        </div>
                    </div>
                    <div class="step-row">
                        <div class="step-number"><span>2</span></div>
                        <div class="step-content">
                            <h4>医師とビデオ通話</h4>
                            <p>5〜10分。症状や希望を伝えてください</p>
                        </div>
                    </div>
                    <div class="step-row">
                        <div class="step-number"><span>3</span></div>
                        <div class="step-content">
                            <h4>処方薬が届く</h4>
                            <p>クレカ決済 → 自宅に配送</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="guide-card blue">
                <div class="card-header">
                    <div class="card-title-row">
                        <h3>来院</h3>
                        <span class="badge blue">主に木金土 18-23時</span>
                    </div>
                    <p class="card-description xs">注射・検査・処方、その場で完結。</p>
                </div>
                <div class="card-divider"></div>
                <div class="card-body">
                    <div class="step-row">
                        <div class="step-number"><span>1</span></div>
                        <div class="step-content">
                            <h4>Web予約 + 問診入力</h4>
                            <p>当日予約もOK。問診は事前入力がスムーズ</p>
                        </div>
                    </div>
                    <div class="step-row">
                        <div class="step-number"><span>2</span></div>
                        <div class="step-content">
                            <h4>来院 → 診察 → 施術</h4>
                            <p>東新宿駅A3出口 徒歩1分</p>
                        </div>
                    </div>
                    <div class="step-row">
                        <div class="step-number"><span>3</span></div>
                        <div class="step-content">
                            <h4>その場でお会計</h4>
                            <p>クレジットカードまたは現金</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="info-box">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"/>
                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/>
                    <line x1="12" y1="17" x2="12.01" y2="17"/>
                </svg>
                <span>まず相談してから決めたい → オンライン or 来院どちらでもOK</span>
            </div>
        </div>
    </section>
    <section class="pricing-section">
        <div class="sub-container">
            <h2>共通のご案内</h2>
            <div class="pricing-list">
                    <div class="pricing-item">
                        <div class="pricing-label green"><span>初診料</span></div>
                        <div class="pricing-value"><div class="val">1,500円（税込）</div></div>
                    </div>
                    <div class="pricing-item">
                        <div class="pricing-label sky"><span>再診料</span></div>
                        <div class="pricing-value"><div class="val">500円（税込）</div></div>
                    </div>
                    <!-- <div class="pricing-item">
                        <div class="pricing-label blue"><span>配送料</span></div>
                        <div class="pricing-value">
                        <div class="val">
                            550円
                            <small>※オンライン・スマホ注文</small>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="notes-list">
                <p>・保険証は不要です（すべて自由診療）</p>
                <p>・持ち物（来院）: クレジットカード or 現金</p>
                <p>・キャンセル: 予約日前日まで変更・キャンセル可能</p>
            </div>
        </div>
    </section>
    <section class="faq">
        <div class="sub-container">
            <h2>よくある質問</h2>
            <div class="qa-boxes">
                <div class="qa-box">
                    <p class="question">予約なしで行っても大丈夫ですか？</p>
                    <p class="answer">予約制です。当日でも空きがあればご予約いただけます。</p>
                </div>
                <div class="qa-box">
                    <p class="question">初めてですが、何を準備すればいいですか？</p>
                    <p class="answer">LINEまたはお電話（03-6205-特別な準備は不要です。保険証もいりません。事前にWebで問診を入力しておくとスムーズです。</p>
                </div>
                <div class="qa-box">
                    <p class="question">オンライン診療と来院、どちらがいいですか？</p>
                    <p class="answer">その場で受ける施術（注射・点滴・検査など）は来院のみ。処方薬はオンラインでも来院でも同じ価格です。迷ったらオンラインがお手軽。各メニューの対応チャネルは料金一覧で確認できます。</p>
                </div>
                <div class="qa-box">
                    <p class="question">キャンセルや変更はできますか？</p>
                    <p class="answer">予約日前日までに、予約システムから変更・キャンセルが可能です。</p>
                </div>
            </div>
        </div>
    </section>
    <section class="cta-section" aria-labelledby="cta-title">
        <div class="cta-inner">
            <h2 class="cta-title wh">気になるメニューを<br>探してみてください。</h2>
            <nav class="cta-buttons" aria-label="相談と予約">
                <a href="<?php echo esc_url( get_site_url().'/price' ); ?>" class="btn-outline">メニュー・料金を見る</a>
                <a href="<?php echo esc_url(home_url()); ?>" class="btn-cta btn-black">トップに戻る</a>
            </nav>
        </div>
    </section>
</main>
<?php get_footer(); ?>