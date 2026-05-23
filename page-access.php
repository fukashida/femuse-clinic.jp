<?php get_header(); ?>
<main class="access">
    <section class="top-title">
        <h1>アクセス</h1>
        <p>ACCESS</p>
    </section>
    <section class="clinic-overview">
        <div class="sub-container">
            <h2 class="section-title">クリニック情報</h2>
            <div class="info-list">
                <div class="info-item">
                    <dt class="info-label">クリニック名</dt>
                    <dd class="info-value">フェミューズクリニック<br>（医療法人能美会）</dd>
                </div>
                <div class="info-item">
                    <dt class="info-label">住所</dt>
                    <dd class="info-value">〒160-0022<br>東京都新宿区新宿6-29-11<br>新宿イーストクロスタワー3F</dd>
                </div>
                <div class="info-item">
                    <dt class="info-label">電話番号</dt>
                    <dd class="info-value">03-6205-5937</dd>
                </div>
                <div class="info-item">
                    <dt class="info-label">最寄駅</dt>
                    <dd class="info-value">東新宿駅A3出口 徒歩1分<br>（東京メトロ副都心線・都営<br>大江戸線）</dd>
                </div>
                <div class="info-item">
                    <dt class="info-label">標榜科</dt>
                    <dd class="info-value">皮膚科・美容皮膚科・婦人<br>科・内科</dd>
                </div>
        </div>
        </div>
    </section>
    <section class="hours-section sky-bg">
        <div class="sub-container">
            <div class="hours-inner">
                <h2 class="hours-title">診療時間</h2>
                <div class="hours-card">
                    <div class="hours-rows">
                        <div class="hours-row">
                            <span class="hours-badge badge-visit">来院</span>
                            <div class="hours-content">
                                <p class="hours-main">主に木・金・土 18:00〜23:00</p>
                                <p class="hours-note">※最終受付は閉院15分前</p>
                            </div>
                        </div>
                        <div class="hours-row">
                            <span class="hours-badge badge-online">オンライン</span>
                            <div class="hours-content">
                                <p class="hours-main">月〜土曜　18:00~23:00</p>
                            </div>
                        </div>
                        <div class="hours-row">
                            <span class="hours-badge badge-closed">休診</span>
                            <div class="hours-content">
                                <p class="hours-main">日曜</p>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="hours-disclaimer">
                ※シフト制のため、月により診療日・時間が変動します。<br>
                最新のスケジュールはお知らせをご確認ください
                </p>
            </div>
            <div class="directions">
                <h3 class="directions-title">東新宿駅A3出口から<br>徒歩1分</h3>
                <div class="directions-content">
                    <div class="map-placeholder">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.158262129713!2d139.7051493765248!3d35.697722872581835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188dd95fccaaf1%3A0x89c2535f2a283669!2z44OV44Kn44Of44Ol44O844K644Kv44Oq44OL44OD44Kv!5e0!3m2!1sja!2sjp!4v1777547133957!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="フェミューズクリニック 地図"></iframe>
                    </div>
                    <ol class="steps-list">
                        <li class="step-card">
                            <span class="step-number">1</span>
                            <p class="step-text">A3出口を出る</p>
                        </li>
                        <li class="step-card">
                            <span class="step-number">2</span>
                            <p class="step-text">右に進む — 大久保通り沿い</p>
                        </li>
                        <li class="step-card">
                            <span class="step-number">3</span>
                            <p class="step-text">新宿イーストクロスタワーに入る</p>
                        </li>
                        <li class="step-card">
                            <span class="step-number">4</span>
                            <p class="step-text">エレベーターで3Fへ</p>
                        </li>
                    </ol>
                    <div class="tip-card">
                    新宿駅からの場合: 東口から徒歩約12分。副都心線で東新宿駅まで1駅（約2分）。
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="visitor-section blue-bg">
        <div class="sub-container">
            <h2 class="visitor-title">来院時のご案内</h2>
            <div class="guideline-list">
                <div class="guideline-card">
                    <div class="guideline-icon">
                        <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/info/guideline-icon01.png" alt="">
                    </div>
                    <div class="guideline-body">
                        <h3 class="guideline-heading">持ち物</h3>
                        <p class="guideline-desc">保険証は不要です(すべて自由診療)。<br>クレジットカードまたは現金をお持ちください。</p>
                    </div>
                </div>
                <div class="guideline-card">
                    <div class="guideline-icon">
                        <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/info/guideline-icon02.png" alt="">
                    </div>
                    <div class="guideline-body">
                        <h3 class="guideline-heading">予約</h3>
                        <p class="guideline-desc">完全予約制です。<br>当日予約も空きがあれば可能です。</p>
                    </div>
                </div>
                <div class="guideline-card">
                    <div class="guideline-icon">
                        <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/info/guideline-icon03.png" alt="">
                    </div>
                    <div class="guideline-body">
                        <h3 class="guideline-heading">駐車場</h3>
                        <p class="guideline-desc">専用駐車場はありません。<br>近隣のコインパーキングをご利用ください。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>    
    <section class="cta-section" aria-labelledby="cta-title">
        <div class="cta-inner">
            <h2 class="cta-title wh">ご来院をお待ちしています。</h2>
            <nav class="cta-buttons" aria-label="相談と予約">
                <a href="https://aposuru.com/salon/salon_schedules/create/fab37cc0-ddfe-44f9-9023-7772489e2b1f" class="btn-cta btn-blue">来院で予約する</a>
                <a href="https://liff.line.me/2003578447-9LneB3xY?flowPathId=837&basicId=@436fsscv&liffId=2003578447-9LneB3xY&clientId=2003578447" class="btn-cta btn-sky">オンライン診療を予約する</a>
            </nav>
        </div>
    </section>
</main>
<?php get_footer(); ?>