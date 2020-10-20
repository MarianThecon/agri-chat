<?php


/*Custom Post type start*/

function femrieri_cpt()
{

    $supports = array(
        'title', // post title
        'editor', // post content
        'author', // post author
        'thumbnail', // featured images
        'excerpt', // post excerpt
        'custom-fields', // custom fields
        'comments', // post comments
        'revisions', // post revisions
        'post-formats', // post formats
    );

    $labels = array(
        'name' => _x('Fermieri', 'plural'),
        'singular_name' => _x('Fermier', 'singular'),
        'menu_name' => _x('Fermieri', 'admin menu'),
        'name_admin_bar' => _x('Fermieri', 'admin bar'),
        'add_new' => _x('Adauga femrier', 'add new'),
        'add_new_item' => __('Adauga fermier nou'),
        'new_item' => __('Fermier nou'),
        'edit_item' => __('Editeaza fermier'),
        'view_item' => __('Vezi femrier'),
        'all_items' => __('Toti fermierii'),
        'search_items' => __('Cauta fermier'),
        'not_found' => __('Nu s-au gasit'),
    );

    $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'public' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'fermieri'),
        'has_archive' => true,
        'hierarchical' => false,
    );
    register_post_type('fermieri', $args);
}

add_action('init', 'femrieri_cpt');

/*Custom Post type end*/

/*Adauga taxonomie */

//Taxonomy: Types of file

$labels = array(
    'name' => _x('Categorii fermieri', 'taxonomy general name'),
    'singular_name' => _x('Categorie', 'taxonomy singular name'),
    'search_items' => __('Cauta categorie'),
    'all_items' => __('Toate categoriile'),
    'parent_item' => __('Categorie parinte'),
    'parent_item_colon' => __('Categorie parinte tip'),
    'edit_item' => __('Editeaza categorie'),
    'update_item' => __('Update categorie'),
    'add_new_item' => __('Adauga categorie noua'),
    'new_item_name' => __('Adauga nume nou categorie'),
    'menu_name' => __('Categorii fermieri'),
);

register_taxonomy('cat_fermieri', array('fermieri'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'cat_fermieri'),
));