<?php get_header();?> <main class="menu-detail">
    <div class="container">
        <div class="menu-detail-kv">
            <picture>
                <source media="(min-width: 768px)" srcset="<?php my_theme_uri(); ?>/assets/images/menu/pc_detail_kv.jpg">
                <img class="menu-detail-kv-img fadein" src="<?php my_theme_uri(); ?>/assets/images/menu/sp_detail_kv.jpg" alt="">
            </picture>
            <h1> <?php the_title(); ?> </h1>
        </div>
        <div class="menu-detail-container"> <?php if(have_posts()): while(have_posts()): the_post();?> <?php the_content(); ?> <?php endwhile; endif; ?> </div>
    </div>
</main> <?php get_footer(); ?>