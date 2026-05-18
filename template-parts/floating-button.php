<?php
/**
 * フローティングボタン
 */

// 1. 全ボタンの定義(マスター)
$all_buttons = [
    'reserve' => [
        'url'   => 'https://aposuru.com/salon/salon_schedules/create/fab37cc0-ddfe-44f9-9023-7772489e2b1f',
        'icon'  => 'calendar-icon.svg',
        'text'  => '来院予約',
        'class' => 'blue',
    ],
    'reserve-manjaro' => [
        'url'   => 'https://aposuru.com/salon/salon_schedules/create/fab37cc0-ddfe-44f9-9023-7772489e2b1f',
        'icon'  => 'calendar-icon.svg',
        'text'  => '来院で予約する',
        'class' => 'blue',
    ],
    // 'reserve-botox' => [
    //     'url'   => 'https://aposuru.com/salon/salon_schedules/create/f2b821f8-8b1c-45dd-9f90-ff3c993219cd',
    //     'icon'  => 'calendar-icon.svg',
    //     'text'  => '来院予約',
    //     'class' => 'blue',
    // ],
    'online' => [
        'url'   => 'https://liff.line.me/2003578447-9LneB3xY?flowPathId=837&basicId=@436fsscv&liffId=2003578447-9LneB3xY&clientId=2003578447',
        'icon'  => 'laptop-icon.svg',
        'text'  => 'オンライン',
        'class' => 'sky',
    ],
    'online-beautymedicine' => [
        'url'   => 'https://liff.line.me/2003578447-9LneB3xY?flowPathId=1357&basicId=@436fsscv&liffId=2003578447-9LneB3xY&clientId=2003578447',
        'icon'  => 'laptop-icon.svg',
        'text'  => 'オンライン',
        'class' => 'sky',
    ],
    'online-manjaro' => [
        'url'   => 'https://liff.line.me/2003578447-9LneB3xY?flowPathId=1358&basicId=@436fsscv&liffId=2003578447-9LneB3xY&clientId=2003578447',
        'icon'  => 'laptop-icon.svg',
        'text'  => 'オンライン診療を予約',
        'class' => 'sky',
    ],
    'line' => [
        'url'   => 'https://liff.line.me/2003578447-9LneB3xY?flowPathId=837&basicId=@436fsscv&liffId=2003578447-9LneB3xY&clientId=2003578447',
        'icon'  => 'line-icon.svg',
        'text'  => 'LINE',
        'class' => 'green',
    ],
    'tel' => [
        'url'   => 'tel:0312345678',
        'icon'  => 'tel-icon.svg',
        'text'  => '電話',
        'class' => 'white',
    ],
    'kensa-kit' => [
        'url'   => 'https://femuse-clinic.jp/std/test-kit/',
        'icon'  => 'kit-icon.svg',
        'text'  => 'キット注文',
        'class' => 'sky',
    ],
];

// 2. ページごとに「表示するキー」と「順番」を指定
if ( is_front_page() ) {
    $show_keys = ['reserve','online','line','tel'];
} elseif ( is_page(['pill','medical-diet']) ) { //ピルとメディカルダイエット
    $show_keys = ['online','reserve','line','tel'];
} elseif ( is_page( 'std' ) ) { //性感染症
    $show_keys = ['kensa-kit','reserve','line','tel'];
} elseif ( is_page(['beauty-drip','drip-care']) ) { //美容点滴・体調ケア点滴
    $show_keys = ['reserve','tel','line'];
} elseif ( is_page( 'beauty-medicine') ) { //美容内服
    $show_keys = ['online-beautymedicine','reserve','line','tel'];
} elseif ( is_page( 'manjaro') ) { 
    $show_keys = ['reserve-manjaro','online-manjaro'];
} else {
    return;
}
?>
<div class="floating-button">
    <?php foreach ( $show_keys as $key ) : ?>
        <?php if ( ! isset( $all_buttons[ $key ] ) ) continue; ?>
        <?php $btn = $all_buttons[ $key ]; ?>
        <a href="<?php echo esc_url( $btn['url'] ); ?>" class="floating-button__link <?php echo esc_attr( $btn['class'] ); ?>">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/img/common/' . $btn['icon'] ); ?>" alt="" class="floating-button__icon">
            <span><?php echo esc_html( $btn['text'] ); ?></span>
        </a>
    <?php endforeach; ?>
</div>
