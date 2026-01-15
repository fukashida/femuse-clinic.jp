<?php get_header(); ?> 
<?php
global $post;

// 共通URL
$visit_url  = 'https://example.com/visit-reserve/';
$online_url = 'https://example.com/online-reserve/';

$children = get_pages([
  'parent'      => $post->ID,
  'sort_column' => 'menu_order',
  'sort_order'  => 'ASC',
  'post_status' => 'publish',
]);
?>


<section class="menu-list">
  <div class="container">
    <div class="menu-grid">
      <?php foreach ($children as $child): ?>
        <?php
          // チェックボックス or True/False どっちでも耐える判定
          $has_online = get_field('has_online', $child->ID);

          // True/False（bool）でも、チェックボックス（配列/文字列）でもOKにする
          $enabled =
            $has_online === true ||
            $has_online === 1 ||
            $has_online === '1' ||
            (is_array($has_online) && in_array('1', $has_online, true));
        ?>

        <div class="menu-card">
          <a class="menu-card__panel" href="<?php echo esc_url(get_permalink($child->ID)); ?>">
            <h3 class="menu-card__title"><?php echo esc_html($child->post_title); ?></h3>
            <span class="menu-card__detail">詳細</span>
          </a>

          <div class="menu-card__actions">
            <?php if ($enabled): ?>
              <a class="btn btn--primary" href="<?php echo esc_url($online_url); ?>">
                オンライン診療予約
              </a>
            <?php endif; ?>

            <a class="btn btn--secondary" href="<?php echo esc_url($visit_url); ?>">
              来院予約
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<?php get_template_part('parts/section', 'access'); ?>

<?php get_footer(); ?>