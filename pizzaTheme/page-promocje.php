<?php get_header('page'); ?>

<main class="_wrapper">
    <section class="_wrapper_menu">
        <div class="_wrapper_menu_content">
            <h2><?php the_title() ?></h2>

            <?php

            $promo_query = new WP_Query(array(
                'orderby' => 'post_date',
                'order' => 'DESC',
                'post_type' => 'promo',
                'post_status' => 'publish',
            ));

            if ($promo_query->have_posts()) :

            ?>

                <ul>
                    <?php while ($promo_query->have_posts()) : $promo_query->the_post(); ?>
                        <li>
                            <div class="_wrapper_menu_content_top">
                                <h3><?php the_title() ?></h3>
                            </div>
                            <div class="_wrapper_menu_content_bottom">
                                <p><?php the_content() ?></p>
                            </div>
                        </li>
                    <?php endwhile; ?>
                </ul>

            <?php endif; ?>

        </div>
    </section>
</main>

<?php get_footer('page'); ?>