<?php

if (!defined('Theme_DIR')) {
    define('Theme_DIR', get_theme_root() . '/' . get_template());
}

require_once Theme_DIR . '/posttypes.php';



function show_admin_panel_message()
{
    $phone = esc_attr(get_option('require_phone'));
    $adress = esc_attr(get_option('require_adress'));
    $tiktok = esc_attr(get_option('require_tiktok'));
    $instagram = esc_attr(get_option('require_instagram'));
    $facebook = esc_attr(get_option('require_facebook'));
    $google_link = esc_attr(get_option('require_google_link'));
    $openWeek = esc_attr(get_option('require_openWeek'));
    $openSaturday = esc_attr(get_option('require_openSaturday'));
    $openSunday = esc_attr(get_option('require_openSunday'));

    if (empty($phone) && empty($tiktok) && empty($adress) && empty($instagram) && empty($facebook) && empty($google_link) && empty($openSaturday) && empty($openSunday) && empty($openWeek)) {
        echo '<div style="background: red; color: #fff;" class="error"><p><strong>Szablon wymaga podania danych kontaktowych! Przejdź do "wygląd" -> "ustawienia - Kontakt" i uzupełnij swoje dane.</strong></p></div>';
    }
}
add_action('admin_notices', 'show_admin_panel_message');


//contact data settings

function theme_admin_init()
{
    register_setting('theme-contact', 'require_phone');
    register_setting('theme-contact', 'require_tiktok');
    register_setting('theme-contact', 'require_adress');
    register_setting('theme-contact', 'require_instagram');
    register_setting('theme-contact', 'require_facebook');
    register_setting('theme-contact', 'require_google_link');
    register_setting('theme-contact', 'require_openWeek');
    register_setting('theme-contact', 'require_openSaturday');
    register_setting('theme-contact', 'require_openSunday');
}

add_action('admin_init', 'theme_admin_init');

function page_contact_settings()
{
?>

    <div class="wrap">
        <h2>Ustawienia - strona kontaktowa</h2>

        <form action="options.php" method="post">
            <?php settings_fields('theme-contact'); ?>
            <h3 style="display: flex; flex-direction: column;">
                <label style="margin-bottom: 1vh;" for="require_phone">Numer Telefonu:</label>
                <input name="require_phone" id="require_phone" type="text" style="max-width: 100%; " value="<?php echo esc_attr(get_option('require_phone')); ?>">
            </h3>
            <h3 style="display: flex; flex-direction: column;">
                <label style="margin-bottom: 1vh;" for="require_adress">Adress:</label>
                <input name="require_adress" id="require_adress" type="text" style="max-width: 100%; " value="<?php echo esc_attr(get_option('require_adress')); ?>">
            </h3>
            <h3 style="display: flex; flex-direction: column;">
                <label style="margin-bottom: 1vh;" for="require_instagram">Link do Instagrama:</label>
                <input name="require_instagram" id="require_instagram" type="text" style="max-width: 100%; " value="<?php echo esc_attr(get_option('require_instagram')); ?>">
            </h3>
            <h3 style="display: flex; flex-direction: column;">
                <label style="margin-bottom: 1vh;" for="require_facebook">Link do facebooka:</label>
                <input name="require_facebook" id="require_facebook" type="text" style="max-width: 100%; " value="<?php echo esc_attr(get_option('require_facebook')); ?>">
            </h3>
            <h3 style="display: flex; flex-direction: column;">
                <label style="margin-bottom: 1vh;" for="require_tiktok">Link do tiktoka:</label>
                <input name="require_tiktok" id="require_tiktok" type="text" style="max-width: 100%; " value="<?php echo esc_attr(get_option('require_tiktok')); ?>">
            </h3>
            <h3 style="display: flex; flex-direction: column;">
                <label style="margin-bottom: 1vh;" for="require_google_link">Atrybut SRC mapy google<br>
                    <p>Aby mapa działała w prawidłowy sposób musisz wprowadzić link znajdujący się w atrybucie źródła wygenerowanego kodu do umieszczenia na stronie w google maps. Wejdź w google maps, następnie wyszukaj swój adres i wybierz opcję udostępnij -> umieszczanie mapy. Wprowadź tą część kodu, która jest zaznaczona na czerwono: <i>
                            < iframe src="<span style=" color: red;">https://www.google.com/maps/indywidualne-cyfry</span>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">< /iframe>
                        </i></p>
                </label>
                <input name="require_google_link" id="require_google_link" type="text" style="max-width: 100%; " value="<?php echo esc_attr(get_option('require_google_link')); ?>">
            </h3>
            <h3 style="display: flex; flex-direction: column;">
                <label style="margin-bottom: 1vh;" for="require_openWeek">Godziny otwarcia w tygodniu</label>
                <input name="require_openWeek" id="require_openWeek" type="text" style="max-width: 100%; " value="<?php echo esc_attr(get_option('require_openWeek')); ?>">
            </h3>

            <h3 style="display: flex; flex-direction: column;">
                <label style="margin-bottom: 1vh;" for="require_openSaturday">Godziny otwarcia w sobote</label>
                <input name="require_openSaturday" id="require_openSaturday" type="text" style="max-width: 100%; " value="<?php echo esc_attr(get_option('require_openSaturday')); ?>">
            </h3>

            <h3 style="display: flex; flex-direction: column;">
                <label style="margin-bottom: 1vh;" for="require_openSunday">Godziny otwarcia w niedziele</label>
                <input name="require_openSunday" id="require_openSunday" type="text" style="max-width: 100%; " value="<?php echo esc_attr(get_option('require_openSunday')); ?>">
            </h3>
            <input style="margin-top: 3vh; width: 150px; cursor: pointer" type="submit" value="Zapisz" />
        </form>
    </div>
<?php
}

function theme_contact_settings()
{
    add_theme_page('Ustawienia strony kontaktowej', 'Ustawienia - Kontakt', 'manage_options', 'theme-contact', 'page_contact_settings');
}

add_action('admin_menu', 'theme_contact_settings');


//navigation

if (function_exists('register_nav_menus')) {
    register_nav_menus(array(
        'main_nav' => 'Menu główne',
        'footer_nav' => 'Menu w stopce'
    ));
}
