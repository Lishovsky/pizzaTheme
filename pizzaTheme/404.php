<?php get_header('page'); ?>

<main class="_wrapper">
    <section id="notFound">
        <div id="notFound_container">
            <h2>404</h2>
            <p>Strona której szukasz nie istnieje...</p>
            <a href="<?php echo esc_url(home_url('/')); ?>">Przejdź na stronę główną</a>
        </div>
    </section>
</main>

<?php get_footer('page'); ?>