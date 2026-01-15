<?php
// /menu/ 配下かどうか判定
function is_menu_section() {
  if (!is_page()) return false;
  global $post;
  $menu_parent = get_page_by_path('menu');
  if (!$menu_parent) return false;

  // 自分が /menu/ または /menu/ の子孫なら true
  return ($post->ID === $menu_parent->ID) || in_array($menu_parent->ID, get_post_ancestors($post->ID), true);
}
?>

<?php get_header(); ?>

<?php if (is_menu_section()): ?>
  <div class="menu-page-title">
    <h1 class="menu-page-title__text"><?php the_title(); ?></h1>
  </div>

  <section class="menu-page-content">
    <?php
      // 本文を表示
      while (have_posts()) : the_post();
        the_content();
      endwhile;
    ?>
  </section>
<?php else: ?>

  <!-- いつものタイトル表示 -->
<?php endif; ?>

<?php get_footer(); ?>
