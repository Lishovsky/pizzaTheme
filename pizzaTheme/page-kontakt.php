<?php get_header('page'); ?>

<main class="_wrapper">
    <section id="contact">
        <div id="wrapper_contact_container">
            <div class="container_part"> <iframe src="<?php echo esc_attr(get_option('require_google_link')) ?>" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
            <div class="container_part">
                <h2><?php the_title() ?></h2>
                <ul>
                    <li>Adress: <span><?php echo esc_attr(get_option('require_adress')) ?></span></li>
                    <li>Telefon:<span><?php echo esc_attr(get_option('require_phone')) ?></span></li>
                    <li>Godziny otwarcia:
                        <ul id="hours">
                            <li>Pon. - pt.: <span><?php echo esc_attr(get_option('require_openWeek')) ?></span></li>
                            <li>Sobota: <span><?php echo esc_attr(get_option('require_openSaturday')) ?></span></li>
                            <li>Niedziela: <span><?php echo esc_attr(get_option('require_openSunday')) ?></span></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</main>

<?php get_footer('page'); ?>