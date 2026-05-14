<?php get_header(); ?>
<main>
  <div class="main price">
    <div class="price-kv">
      <picture>
        <source media="(min-width: 768px)" srcset="<?php my_theme_uri(); ?>/assets/images/price/pc_price_kv.jpg">
        <img src="<?php my_theme_uri(); ?>/assets/images/price/sp_price_kv.jpg" alt="料金表">
      </picture>

      <h1 class="price-kv-title">料金表</h1>
    </div>

    <div class="price-about">
      <h2>自由診療</h2>
      <p>症状のある方の治療に関しては、保険診療を行っております。</p>
    </div>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile;
    endif; ?>
  </div>
</main>
<?php get_footer(); ?>