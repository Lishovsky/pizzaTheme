<?php

add_action('init', 'init_posttypes');
function init_posttypes()
{
    $meals = array(
        'labels' => array(
            'name' => 'Potrawy',
            'singular_name' => 'Potrawy',
            'all_items' => 'Wszystkie Potrawy',
            'add_new' => 'Dodaj nową potrawę',
            'add_new_item' => 'Dodaj nową potrawę',
            'edit_item' => 'Edytuj potrawę',
            'new_item' => 'Nowa potrawa',
            'view_item' => 'Zobacz potrawę',
            'search_items' => 'Szukaj w Potrawach',
            'not_found' => 'Nie znaleziono żadnych potraw',
            'not_found_in_trash' => 'Nie znaleziono żadnych potraw w koszu',
            'parent_item_colon' => ''
        ),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 6,
        'supports' => array(
            'title', 'editor', 'author', 'thumbnail', 'custom-fields'
        ),
        'has_archive' => false
    );
    register_post_type('meals', $meals);

    $promo = array(
        'labels' => array(
            'name' => 'Promocje',
            'singular_name' => 'Promocje',
            'all_items' => 'Wszystkie promocje',
            'add_new' => 'Dodaj nową promocje',
            'add_new_item' => 'Dodaj nową promocje',
            'edit_item' => 'Edytuj promocje',
            'new_item' => 'Nowa promocja',
            'view_item' => 'Zobacz promocje',
            'search_items' => 'Szukaj w promocjach',
            'not_found' => 'Nie znaleziono żadnych promocji',
            'not_found_in_trash' => 'Nie znaleziono żadnych promocji w koszu',
            'parent_item_colon' => ''
        ),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 6,
        'supports' => array(
            'title', 'editor', 'author', 'thumbnail', 'custom-fields'
        ),
        'has_archive' => false
    );
    register_post_type('promo', $promo);
}


add_action('init', 'init_taxonomies');

function init_taxonomies()
{
    register_taxonomy(
        'Składniki',
        array('meals'),
        array(
            'hierarchical' => true,
            'labels' => array(
                'name' => 'Składniki',
                'singular_name' => 'Składniki',
                'search_items' =>  'Wyszukaj po Składnikach',
                'all_items' => 'Składniki',
                'most_used_items' => null,
                'parent_item' => null,
                'parent_item_colon' => null,
                'edit_item' => 'Edytuj Składniki',
                'update_item' => 'Aktualizuj Składniki',
                'add_new_item' => 'Dodaj nowy Składniki',
                'new_item_name' => 'Wartość nowego Składnika',
                'add_or_remove_items' => 'Dodaj lub usuń Składniki',
                'choose_from_most_used' => 'Wybierz spośród najczęścież używanych Składników',
                'menu_name' => 'Składniki',
            ),
            'show_ui' => true,
            'update_count_callback' => '_update_post_term_count',
            'query_var' => true,
            'rewrite' => array('slug' => 'skladniki')
        )
    );
}
