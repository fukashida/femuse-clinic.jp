<?php get_header(); ?>
<main>
    <div class="main contact">
        <h1 class="contact-title">
            <img src="<?php my_theme_uri(); ?>/assets/images/contact/title_contact.png" alt="CONTACT">
        </h1> <?php the_content(); ?> <div class="menu-top">
            <a href="<?php my_home_uri(); ?>">
                <img src="<?php my_theme_uri(); ?>/assets/images/common/menu_top.png" alt="">
            </a>
        </div>
    </div>
</main>
<?php get_footer(); ?>