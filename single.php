<?php get_header();?> 

<main class="menu-detail">

        <div class="menu-detail-kv">
            <h1> <?php the_title(); ?> </h1>
        </div>
        <section class="">
            <div class="container">

                <?php
                while (have_posts()) : the_post();
                    the_content();
                endwhile;
                ?>   

            </div>
        </section>

        <?php get_template_part('parts/section', 'access'); ?>

</main>

<?php get_footer(); ?>