<?php if (!defined('ABSPATH')) exit; ?>

<div class="calculator-sidebar" id="sidebar">
    <div class="calculator-trigger" onclick="toggleCalculator()">
        <span>割引額<br class="sp">シミュレーター</span>
        <div class="calculator-icon">
            <div class="triangle" id="pointer"></div>
        </div>
    </div>
    <div class="calculator-panel" id="calculatorPanel">
        <div class="calculator-content">
            <p class="calculator-description">
                <?php echo nl2br(esc_html($description)); ?>
            </p>

            <div class="period-section">
                <div class="period-header">
                    <strong>服用期間</strong>
                    <small>（購入個数はここで変更できます）</small>
                </div>
                <div class="period-options">
                    <div class="radio-option">
                        <input type="radio" id="month1" name="period" value="1" checked>
                        <label for="month1">1ヶ月分</label>
                    </div>
                    <div class="radio-option">
                        <input type="radio" id="month3" name="period" value="3">
                        <label for="month3">3ヶ月分</label>
                    </div>
                    <div class="radio-option">
                        <input type="radio" id="month6" name="period" value="6">
                        <label for="month6">6ヶ月分</label>
                    </div>
                </div>
            </div>

            <div class="product-table">
                <div class="table-header">
                    <span>購入</span>
                    <span>商品名</span>
                    <span>個数</span>
                    <span>小計</span>
                </div>

                <?php foreach ($medicines as $m) :
                    $price = (int) get_field('price', $m->ID);
                    $qty   = get_field('quantity_label', $m->ID);
                    $thumb = get_the_post_thumbnail_url($m->ID, 'medium');
                ?>
                    <div class="product-row toggle-item">
                        <label class="toggle-switch">
                            <input type="checkbox" data-price="<?php echo esc_attr($price); ?>">
                            <span class="slider"></span>
                        </label>
                        <div class="product-name">
                            <?php if ($thumb) : ?>
                                <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($m->post_title); ?>">
                            <?php endif; ?>
                            <span><?php echo esc_html($m->post_title); ?></span>
                        </div>
                        <span><?php echo esc_html($qty); ?></span>
                        <span><?php echo number_format($price); ?>円</span>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="total-bg">
                <div class="total-section">
                    <div class="total-labels">
                        <div class="result-label">基本料金</div>
                        <div class="discount-label">割引額</div>
                        <div class="set-discount-label" id="periodDiscountLabel">セット割引</div>
                        <div class="payment-label">お支払額<small>(税込み)</small></div>
                        <div class="monthly-label">1ヶ月あたり</div>
                    </div>
                    <div class="total-values">
                        <div class="result-value" id="baseAmount">0円</div>
                        <div class="discount-value" id="itemDiscount">0円</div>
                        <div class="set-discount-value" id="periodDiscount">0円</div>
                        <div class="payment-value" id="totalAmount">0円</div>
                        <div class="monthly-value" id="monthlyAmount">0円/月</div>
                    </div>
                </div>
            </div>

            <a href="https://liff.line.me/2003578447-9LneB3xY?flowPathId=1357&basicId=@436fsscv&liffId=2003578447-9LneB3xY&clientId=2003578447" class="btn-cta btn-green">
                今すぐLINEで予約
            </a>
        </div>
    </div>
</div>