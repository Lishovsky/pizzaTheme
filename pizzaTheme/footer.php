<footer>
    <div class="_footer_footerNav">
        <?php wp_nav_menu(array(
            'name' => 'Menu w stopce'
        )) ?>
    </div>
    <div class="_footer_footerSocials">
        <div class="_footer_footerSocials_items">
            <a href="<?php echo esc_attr(get_option('require_facebook')) ?>"> <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/fb.svg" alt="facebook"></a>
        </div>
        <div class="_footer_footerSocials_items">
            <a href="<?php echo esc_attr(get_option('require_instagram')) ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/instagram.svg" alt="instagram"></a>
        </div>
        <div class="_footer_footerSocials_items">
            <a href="<?php echo esc_attr(get_option('require_tiktok')) ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/tiktok.svg" alt="tiktok"></a>
        </div>
    </div>
    <p> Szablon wykonany przez: <a href="https://www.lishovsky.pl/">Dominik Liszka</a></p>
</footer>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/navbarAnimation.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/mobileNav.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/videoHero.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/orders.js"></script>

</body>

</html>