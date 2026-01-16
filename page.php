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

<main>
<?php if (is_menu_section()): ?>

  <div class="menu-page-title">
    <h2 class="menu-page-title__text"><?php the_title(); ?></h2>
  </div>

  <section class="menu-page-content">
    <div class="container">

      <?php
      while (have_posts()) : the_post();
        the_content();
      endwhile;
      ?>

      <!-- モーダル（共通で1つ） -->
      <div class="iv-modal" id="ivModal" aria-hidden="true">
        <div class="iv-modal__backdrop"></div>

        <div class="iv-modal__panel" role="dialog" aria-modal="true" aria-labelledby="ivModalTitle">
          <div class="iv-modal__head">
            <p class="iv-modal__title" id="ivModalTitle"></p>
            <button class="iv-modal__close" type="button" aria-label="閉じる">×</button>
          </div>

          <div class="iv-modal__body">
            <div class="iv-modal__row">
              <div class="iv-modal__label">概要</div>
              <div class="iv-modal__value" data-field="overview"></div>
            </div>

            <div class="iv-modal__row">
              <div class="iv-modal__label">こんな方に</div>
              <div class="iv-modal__value" data-field="forwho"></div>
            </div>

            <div class="iv-modal__row">
              <div class="iv-modal__label">投与頻度</div>
              <div class="iv-modal__value" data-field="frequency"></div>
            </div>
          </div>
        </div>
      </div>

      <?php
        $page_id = get_queried_object_id(); // 今表示しているページID
        $popups  = get_field('iv_popups', $page_id); // ← ここが重要
        $data    = [];

        if (!empty($popups) && is_array($popups)) {
          foreach ($popups as $p) {
            $key = isset($p['popup_key']) ? (string)$p['popup_key'] : '';
            if ($key === '') continue;

            $data[$key] = [
              'title'     => $p['popup_title'] ?? '',
              'overview'  => nl2br($p['popup_overview'] ?? ''),
              'forwho'    => nl2br($p['popup_forwho'] ?? ''),
              'frequency' => nl2br($p['popup_frequency'] ?? ''),
            ];
          }
        }
        ?>
        <script>
        window.ivPopupData = <?php echo wp_json_encode($data, JSON_UNESCAPED_UNICODE); ?>;
        console.log("ivPopupData keys:", Object.keys(window.ivPopupData || {}));
        </script>



    </div>
  </section>

<?php else: ?>
  <!-- /menu/配下以外の通常表示（必要なら） -->
  <?php
  while (have_posts()) : the_post();
    the_content();
  endwhile;
  ?>
<?php endif; ?>

<?php get_template_part('parts/section', 'access'); ?>
</main>

<?php get_footer(); ?>
