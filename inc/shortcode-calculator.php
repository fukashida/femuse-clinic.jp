<?php
if (!defined('ABSPATH')) exit;

function register_discount_calculator_shortcode($atts) {
    $atts = shortcode_atts([
        'title' => '割引額シミュレーター',
    ], $atts, 'discount_calculator');

    // 設定ページのID取得
    $settings_page = get_page_by_path(CALCULATOR_SETTINGS_SLUG);
    $settings_id   = $settings_page ? $settings_page->ID : 0;

    // CSS/JS読み込み
    wp_enqueue_style(
        'calculator-css',
        get_template_directory_uri() . '/calculator/style.css',
        [],
        filemtime(get_template_directory() . '/calculator/style.css')
    );
    wp_enqueue_script(
        'calculator-js',
        get_template_directory_uri() . '/js/calculator.js',
        [],
        filemtime(get_template_directory() . '/js/calculator.js'),
        true
    );

    // 割引率などをJSに渡す
    wp_localize_script('calculator-js', 'CALC_CONFIG', [
        'discount_3month' => (float) get_field('discount_3month', $settings_id),
        'discount_6month' => (float) get_field('discount_6month', $settings_id),
    ]);

    // テンプレートに渡す変数
    $path           = get_template_directory_uri() . '/';
    $shortcode_title = $atts['title'];
    $description    = get_field('description', $settings_id);
    $line_url       = get_field('line_url', $settings_id);

    // 薬剤一覧を取得
    $medicines = get_posts([
        'post_type'      => 'medicine',
        'posts_per_page' => -1,
        'orderby'        => 'menu_order',
        'order'          => 'ASC',
    ]);

    ob_start();
    include get_template_directory() . '/template-parts/calculator.php';
    return ob_get_clean();
}
add_shortcode('discount_calculator', 'register_discount_calculator_shortcode');