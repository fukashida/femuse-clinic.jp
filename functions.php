<?php
// フロント側の管理バーを非表示にする
add_filter('show_admin_bar', '__return_false');

// タイトルタグ
function my_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails'); 
}
add_action('after_setup_theme', 'my_theme_setup');

// ============================================================
// スクリプト・スタイルの読み込み
// ============================================================

function my_theme_scripts() {
    // 共通CSS
    wp_enqueue_style('main-style', get_template_directory_uri() . '/css/style.css');

    // TOPページ
    if (is_front_page() || is_home()) {
        wp_enqueue_style('top-style', get_template_directory_uri() . '/top/style.css');
    }
    // コラム記事一覧ページ
    if (is_post_type_archive(array('column')) || is_tax(array('column_cat'))) {
      wp_enqueue_style(
          'column-style',
          get_template_directory_uri() . '/column/style.css'
      );
    }
    // 単一投稿ページ（通常投稿）
    if (is_single()) {
        wp_enqueue_style('single-style', get_template_directory_uri() . '/single/style.css');
    }    
    // 固定ページ（newsページ）
    if (is_page('news')) {
        wp_enqueue_style('news-style', get_template_directory_uri() . '/news/style.css');
    }
    // 施術メニューページ
    if (is_page(array('pill', 'std', 'test-kit', 'xolair', 'urso', 'doxypep', 'beauty-drip', 'drip-care', 'beauty-medicine', 'medical-diet', 'manjaro', 'botox'))) {
        wp_enqueue_style('menu-style', get_template_directory_uri() . '/menu/style.css');
    }
    // ご案内ページ
    if (is_page(array('about', 'flow', 'doctor', 'price', 'faq', 'access', 'contact', 'regular-delivery'))) {
        wp_enqueue_style('info-style', get_template_directory_uri() . '/info/style.css');
    }
    // 法務ページ
    if (is_page(array('privacy', 'legal'))) {
        wp_enqueue_style('law-style', get_template_directory_uri() . '/law/style.css');
    }
    // 404ページ
    if (is_404()) {
        wp_enqueue_style('404-style', get_template_directory_uri() . '/law/style.css');
    }
    // サンクスページ
    if (is_page(array('thanks-line', 'thanks-reserve', 'thanks-purchase'))) {
        wp_enqueue_style('thanks-style', get_template_directory_uri() . '/thanks/style.css');
    }
}
add_action('wp_enqueue_scripts', 'my_theme_scripts');


// コラムページ（カスタム投稿）
function register_column_post_type() {
  register_post_type('column', [
    'label' => 'コラム',
    'public' => true,
    'has_archive' => true,
    'menu_position' => 5,
    'supports' => ['title', 'editor', 'thumbnail'],
    'rewrite' => ['slug' => 'column'],
    'show_in_rest' => true,
  ]);
}
add_action('init', 'register_column_post_type');

function register_column_taxonomy() {
  register_taxonomy(
    'column_cat',
    'column',
    [
      'label' => 'コラムカテゴリ',
      'public' => true,
      'hierarchical' => true,
      'rewrite' => ['slug' => 'column-category'],
      'show_in_rest' => true,
    ]
  );
}
add_action('init', 'register_column_taxonomy');


// パンくずリスト
function get_breadcrumb_items() {

  if (is_front_page()) return [];

  $items = [];

  // HOME
  $items[] = [
    'name' => 'HOME',
    'url'  => home_url('/')
  ];

// 通常投稿（記事詳細）
if (is_single() && get_post_type() === 'post') {

  $category = get_the_category();
  if (!empty($category)) {
    $items[] = [
      'name' => $category[0]->name,
      'url'  => home_url('/news/')  // 固定ページ「news」へのリンク
    ];
  }

  $items[] = [
    'name' => get_the_title(),
    'url'  => ''
  ];
}

  // カテゴリ一覧
  if (is_category()) {
    $items[] = [
      'name' => single_cat_title('', false),
      'url'  => ''
    ];
  }

  // 固定ページ
  if (is_page()) {
    $items[] = [
      'name' => get_the_title(),
      'url'  => ''
    ];
  }

    // コラム一覧
  if (is_post_type_archive('column')) {
    $items[] = [
      'name' => 'コラム',
      'url'  => ''
    ];
  }

  // コラム詳細
  if (is_singular('column')) {

    $items[] = [
      'name' => 'コラム',
      'url'  => get_post_type_archive_link('column')
    ];

    $items[] = [
      'name' => get_the_title(),
      'url'  => ''
    ];
  }

  // 404ページ
  if (is_404()) {
    $items[] = [
      'name' => 'ページが見つかりません',
      'url'  => ''
    ];
  }

  return $items;
}

function breadcrumb_html() {

  if (is_front_page()) return;

  $items = get_breadcrumb_items();
  if (empty($items)) return;

  echo '<nav class="breadcrumb">';
  echo '<ul>';

  foreach ($items as $item) {
    if (!empty($item['url'])) {
      echo '<li><a href="' . esc_url($item['url']) . '">' . esc_html($item['name']) . '</a></li>';
    } else {
      echo '<li>' . esc_html($item['name']) . '</li>';
    }
  }

  echo '</ul>';
  echo '</nav>';
}


// ============================================================
// コラム一覧 Ajaxフィルター
// ============================================================

// JSファイルを読み込み + ajaxurlを渡す
function enqueue_column_filter_script() {
    if (is_post_type_archive('column') || is_tax('column_cat')) {
        wp_enqueue_script(
            'column-filter',
            get_template_directory_uri() . '/column/column.js',
            array('jquery'),
            '1.0.0',
            true
        );
        wp_localize_script('column-filter', 'postFilterAjax', array(
            'ajaxurl'        => admin_url('admin-ajax.php'),
            'posts_per_page' => 6,
            'nonce'          => wp_create_nonce('column_filter_nonce'),
        ));
    }
}
add_action('wp_enqueue_scripts', 'enqueue_column_filter_script');

// Ajaxリクエストを処理する関数
function filter_column_posts() {
    // セキュリティチェック
    check_ajax_referer('column_filter_nonce', 'nonce');

    $category = isset($_POST['category']) ? sanitize_text_field($_POST['category']) : 'all';
    $paged    = isset($_POST['paged']) ? intval($_POST['paged']) : 1;
    $posts_per_page = isset($_POST['posts_per_page']) ? intval($_POST['posts_per_page']) : 8;

    $args = array(
        'post_type'      => 'column',
        'posts_per_page' => $posts_per_page,
        'paged'          => $paged,
        'post_status'    => 'publish',
    );

    // 「すべて」以外なら tax_query を追加
    if ($category !== 'all') {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'column_cat',
                'field'    => 'slug',
                'terms'    => $category,
            ),
        );
    }

    $query = new WP_Query($args);

    ob_start();

    if ($query->have_posts()) : ?>
        <div class="article-list">
            <?php while ($query->have_posts()) : $query->the_post();
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
                      <span class="badge">
                        <?php
                            if (!empty($terms) && !is_wp_error($terms)) {
                              $term_names = array();
                              foreach ($terms as $term) {
                                $term_names[] = $term->name;
                                }
                                echo esc_html(implode(', ', $term_names));
                                }
                                ?>
                        </span>
                        <h2 class="card-title"><?php the_title(); ?></h2>
                        <div class="flex">
                          <time class="card-meta"><?php echo get_the_date('Y.m.d'); ?></time>
                          <p class="card-meta">監修：広川麻理菜</p>
                        </div>
                    </div>
                </a>
            </article>
            <?php endwhile; ?>
        </div>

        <?php if ($query->max_num_pages > 1) : ?>
            <div class="pagination">
                <?php for ($i = 1; $i <= $query->max_num_pages; $i++) :
                    $active = ($i === $paged) ? ' active' : '';
                ?>
                    <button class="page-btn<?php echo $active; ?>" data-page="<?php echo $i; ?>"><?php echo $i; ?></button>
                <?php endfor; ?>
            </div>
        <?php endif;

        wp_reset_postdata();
    else : ?>
        <p class="no-posts">投稿がありません。</p>
    <?php endif;

    $html = ob_get_clean();

    wp_send_json_success(array('html' => $html));
}
add_action('wp_ajax_filter_column_posts', 'filter_column_posts');
add_action('wp_ajax_nopriv_filter_column_posts', 'filter_column_posts');



// ============================================================
// 担当医師（カスタム投稿タイプ）
// ============================================================

function register_doctor_staff_post_type() {
    register_post_type('doctor_staff', [
        'labels' => [
            'name'          => '担当医師',
            'singular_name' => '担当医師',
            'add_new'       => '新規追加',
            'add_new_item'  => '新しい医師を追加',
            'edit_item'     => '医師を編集',
            'new_item'      => '新規医師',
            'all_items'     => '医師一覧',
            'menu_name'     => '担当医師',
        ],
        'public'              => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 6,
        'menu_icon'           => 'dashicons-businessperson',
        'has_archive'         => false,
        'publicly_queryable'  => false,
        'supports'            => ['title', 'thumbnail', 'page-attributes'],
        'show_in_rest'        => true,
    ]);
}
add_action('init', 'register_doctor_staff_post_type');

// 経歴・担当日のカスタムフィールド（メタボックス）
function add_doctor_staff_meta_box() {
    add_meta_box(
        'doctor_staff_detail',
        '経歴・担当日',
        'doctor_staff_detail_callback',
        'doctor_staff',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_doctor_staff_meta_box');

function doctor_staff_detail_callback($post) {
    wp_nonce_field('doctor_staff_detail_save', 'doctor_staff_detail_nonce');
    $value = get_post_meta($post->ID, '_doctor_staff_detail', true);
    ?>
    <textarea
        name="doctor_staff_detail"
        style="width:100%; min-height:120px;"
        placeholder="例：内科専門医／月・水・金 担当"><?php echo esc_textarea($value); ?></textarea>
    <p style="color:#666; font-size:12px;">改行はそのまま反映されます。</p>
    <?php
}

function save_doctor_staff_detail($post_id) {
    if (!isset($_POST['doctor_staff_detail_nonce']) ||
        !wp_verify_nonce($_POST['doctor_staff_detail_nonce'], 'doctor_staff_detail_save')) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;

    if (isset($_POST['doctor_staff_detail'])) {
        update_post_meta(
            $post_id,
            '_doctor_staff_detail',
            sanitize_textarea_field($_POST['doctor_staff_detail'])
        );
    }
}
add_action('save_post_doctor_staff', 'save_doctor_staff_detail');


// ============================================================
// 記事装飾
// ============================================================
function my_register_block_styles() {
  register_block_style('core/group', [
    'name'  => 'titled-box',
    'label' => 'タイトル付きボックス',
  ]);
  register_block_style('core/group', [
    'name'  => 'cta-box',
    'label' => 'CTAボックス',
  ]);
}
add_action('init', 'my_register_block_styles');

// =====================================================
// 1. カスタム投稿タイプ「薬剤」を登録
// =====================================================
add_action('init', function() {
    register_post_type('medicine', [
        'label'        => '薬剤',
        'public'       => false,
        'show_ui'      => true,
        'menu_icon'    => 'dashicons-heart',
        'supports'     => ['title', 'thumbnail', 'page-attributes'],
        'has_archive'  => false,
        'rewrite'      => false,
        'show_in_rest' => true,
    ]);
});

// =====================================================
// 2. ショートコード登録
// =====================================================
require_once get_template_directory() . '/inc/shortcode-calculator.php';

// =====================================================
// 3. 「設定」固定ページのスラッグを定数化（後で使う）
// =====================================================
define('CALCULATOR_SETTINGS_SLUG', 'calculator-settings');