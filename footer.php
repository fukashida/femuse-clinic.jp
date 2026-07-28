<!-- Footer＋右側の固定バー-->
                    <footer>
                        <div class="footer-inner">
                            <img class="footer-logo" src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/common/logo-white.svg" alt="クリニックロゴ" onerror="this.style.display='none'" />

                            <div class="footer-contact">
                                <div class="footer-tel-row">
                                    <span class="footer-tel-label">TEL</span>
                                    <span class="footer-tel-number">03-6205-5937</span>
                                </div>
                                <div class="footer-schedule">
                                    <p>来院　　　主に木・金・土　18:00〜23:00</p>
                                    <p>オンライン　月〜土曜　　18:00〜23:00</p>
                                </div>
                                <address class="footer-addr">
                                    東京都新宿区新宿6-29-11 新宿イーストクロスタワー3F<br>
                                    東新宿駅A3出口 徒歩1分
                                </address>
                            </div>
                            <nav class="footer-nav" aria-label="フッターナビゲーション">
                                <div class="footer-nav-col">
                                    <h2>施術メニュー</h2>
                                    <ul>
                                        <li><a href="<?php echo esc_url( get_site_url().'/pill' ); ?>">ピル</a></li>
                                        <li><a href="<?php echo esc_url( get_site_url().'/std' ); ?>">性感染症</a></li>
                                        <li><a href="<?php echo esc_url( get_site_url().'/beauty-drip' ); ?>">美容注射・点滴</a></li>
                                        <li><a href="<?php echo esc_url( get_site_url().'/drip-care' ); ?>">体調ケア注射・点滴</a></li>
                                        <li><a href="<?php echo esc_url( get_site_url().'/beauty-medicine' ); ?>">美容内服</a></li>
                                        <li><a href="<?php echo esc_url( get_site_url().'/medical-diet' ); ?>">メディカルダイエット</a></li>
                                        <li><a href="<?php echo esc_url( get_site_url().'/botox' ); ?>">ボトックス</a></li>
                                        <li><a href="<?php echo esc_url( get_site_url().'/xolair' ); ?>">ゾレア</a></li>
                                        <li><a href="<?php echo esc_url( get_site_url().'/urso' ); ?>">ウルソ</a></li>
                                        <li><a href="<?php echo esc_url( get_site_url().'/acne' ); ?>">ニキビ治療</a></li>
                                    </ul>
                                </div>
                                <div class="footer-nav-col">
                                    <h2>ご案内</h2>
                                    <ul>
                                        <li><a href="<?php echo esc_url( get_site_url().'/about' ); ?>">クリニック紹介</a></li>
                                        <li><a href="<?php echo esc_url( get_site_url().'/flow' ); ?>">診療の流れ</a></li>
                                        <li><a href="<?php echo esc_url( get_site_url().'/regular-delivery' ); ?>">定期配送ガイド</a></li>
                                        <li><a href="<?php echo esc_url( get_site_url().'/doctor' ); ?>">医師紹介</a></li>
                                        <li><a href="<?php echo esc_url( get_site_url().'/price' ); ?>">料金一覧</a></li>
                                        <li><a href="<?php echo esc_url( get_site_url().'/faq' ); ?>">よくある質問</a></li>
                                        <li><a href="<?php echo esc_url( get_site_url().'/access' ); ?>">アクセス</a></li>
                                        <li><a href="<?php echo esc_url( get_site_url().'/column' ); ?>">コラム</a></li>
                                        <li><a href="<?php echo esc_url( get_site_url().'/news' ); ?>">お知らせ</a></li>
                                        <li><a href="<?php echo esc_url( get_site_url().'/contact' ); ?>">お問い合わせ</a></li>
                                    </ul>
                                </div>
                            </nav>
                            <div class="footer-separator"></div>
                            <div class="footer-bottom">
                                <nav class="footer-policy" aria-label="法的情報">
                                    <a href="<?php echo esc_url( get_site_url().'/privacy' ); ?>">プライバシーポリシー</a>
                                    <a href="<?php echo esc_url( get_site_url().'/legal' ); ?>">特定商取引法に基づく表記</a>
                                </nav>
                                <p class="footer-copy sp">© 2026 医療法人能美会 フェミューズクリニック</p>
                            </div>
                        </div>
                        <?php get_template_part( 'template-parts/floating-button' ); ?>
                    </footer>
                </div>
            </div>
            <p class="copylight pc">© 2026 医療法人能美会 フェミューズクリニック</p>
        </div>

        <?php if ( ! wp_is_mobile() ) : ?>
            <?php get_sidebar( 'right' ); ?>
        <?php endif; ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri() ); ?>/js/script.js"></script>
    <?php wp_footer(); ?>
</body>
</html>