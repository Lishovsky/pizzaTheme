<?php get_header('page'); ?>

<main class="_wrapper">
    <section class="_wrapper_basicTemplate">
        <div class="wrapper_basicTemplate_container">
            <h2><?php the_title() ?></h2>
            <p><?php the_content() ?></p>
        </div>
    </section>
</main>

<?php get_footer('page'); ?>