<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>

    <?php if (is_search()) : ?>
        <meta name="robots" content="noindex, nofollw" />
    <?php endif; ?>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/icons/icon.png" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.min.css">

    <link rel="pingback" href="<?php bloginfo('pingback_url') ?>">

    <?php wp_head() ?>

</head>

<body <?php body_class() ?> id="start">
    <nav>
        <div class="_nav_mainNav">
            <div class="_nav_mainNav_logo">
                <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/logo.png" alt="logo"></a>
            </div>
            <div id="_nav_mobileToggler">
                <span id="oneSpan"></span>
                <span id="twoSpan"></span>
                <span id="threeSpan"></span>
            </div>
            <div class="_nav_mainNav_links">
                <?php wp_nav_menu(array(
                    'name' => 'Menu główne'
                )) ?>
            </div>
        </div>
    </nav>