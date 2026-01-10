<div id="modal-menu-<?php echo $args['type'] ?>" class="modal-menu-container">
  <h2 class="modal-menu-title-area">
    <div class="modal-menu-title">
      <?php echo $args['title'] ?>
      <img class="modal-menu-close" src="<?php my_theme_uri(); ?>/assets/images/common/close.png" alt="">
    </div>
  </h2>
  <div class="modal-menu-body">
    <div class="modal-menu-content">
      <div class="menu-box-area">
        <?php foreach ($args["menuList"] as $post) :
          setup_postdata($post);
          $prize = get_post_meta($post->ID, '料金', true);
          $tag = get_post_meta($post->ID, 'タグ', true);
          $component = get_post_meta($post->ID, '成分', true);
          $overview = get_post_meta($post->ID, '概要', true);
          $url = get_post_meta($post->ID, '予約URL', true);
        ?>
          <div class="menu-box">
            <div class="menu-open">
              <div class="menu-box-title">
                <h3> <?php the_title(); ?> </h3>
                <div class="menu-box-price"> <?php echo $prize; ?> </div>
              </div>
            </div>
            <div class="menu-box-detail menu-open-area">
              <div>
                <?php if ($tag != "") : ?>
                  <div class="menu-box-tab">
                    <h4> 効果 </h4>
                    <div> <?php echo $tag; ?> </div>
                  </div>
                <?php endif; ?>
                <?php if ($component != "") : ?>
                  <div class="menu-box-component">
                    <h4> 主成分 </h4>
                    <div><?php echo $component; ?> </div>
                  </div>
                <?php endif; ?>
                <div class="menu-box-detail-text"><?php echo $overview; ?></div>
              </div>
              <div class="menu-box-btn-area">
                <a class="menu-box-detail-link" href="<?php the_permalink(); ?>"> 詳細を確認する ></a>
                <a class="menu-box-reserve-btn btn-anime" href="<?php echo $url; ?>" target="_blank"> 予約する </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>