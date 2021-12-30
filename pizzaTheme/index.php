<?php get_header(); ?>

<main class="_wrapper">
    <section class="_wrapper_MainSlider">
        <div class="_wrapper_MainSlider_content">
            <h2>Masz ochotę na pizze?</h2>
            <h3>Zamów ją w <?php bloginfo('name'); ?>!</h3>
            <a href="#scrollToDown">
                <img id="arrow" src="<?php echo get_template_directory_uri(); ?>/assets/icons/arrow.svg" alt="arrow">
            </a>
        </div>
        <div class="_wrapper_MainSlider_video">
            <video muted>
                <source src="<?php echo get_template_directory_uri(); ?>/assets/video/v1.mp4" type="video/mp4">
            </video>
        </div>
    </section>
    <section id="scrollToDown" class="_wrapper_menu">
        <div class="_wrapper_menu_content">
            <h2>MENU</h2>
            <?php

            $meals_query = new WP_Query(array(
                'orderby' => 'post_date',
                'order' => 'DESC',
                'post_type' => 'meals',
                'post_status' => 'publish',
            ));

            if ($meals_query->have_posts()) :

            ?>

                <ul>
                    <?php while ($meals_query->have_posts()) : $meals_query->the_post(); ?>
                        <li>
                            <div class="_wrapper_menu_content_top">
                                <h3><?php the_title() ?></h3>
                                <h4><?php echo get_post_meta($post->ID, 'cena', true); ?>
                                </h4>
                                <button>Dodaj do koszyka</button>
                            </div>
                            <div class="_wrapper_menu_content_bottom">
                                <p><?php the_content() ?></p>
                                <?php echo get_the_term_list($post->ID, 'Składniki', '<ul class="_wrapper_menu_content_ingredient"><li>', '</li><li>', '</li> <ul>'); ?>
                            </div>
                        </li>
                    <?php endwhile; ?>
                </ul>

            <?php endif; ?>

        </div>
    </section>
    <section id="scrollToOrder" class="_wrapper_order">
        <div class="wrapper_order_background">
            <h2>Zdecydowany?</h2>
            <button>
                Złóż zamówienie!
            </button>
        </div>
    </section>

    <section id="_wrapper_google_maps">
        <iframe src="<?php echo esc_attr(get_option('require_google_link')) ?>" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>

</main>

<section id="order">
    <div id="order_box">
        <div id="order_box_toggler">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/exit.svg" alt="exit">
        </div>
        <h3>Już wiesz na co masz ochotę?</h3>
        <h4>Zadzwoń i zamów!</h4>
        <ul id="order_box_summary_food">
        </ul>
        <ul id="order_box_summary_price">
            <li id="nameOfCost"></li>
            <li id="cost"></li>
            <li>
                Zamów: <span><?php echo esc_attr(get_option('require_phone')) ?></span><br>
                <p><?php echo esc_attr(get_option('require_adress')) ?></p>
            </li>
        </ul>
    </div>
</section>

<section id="basket">
    <div id="basket_image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/basket.svg" alt="basket">
    </div>
    <span>1</span>
</section>

<?php get_footer() ?>