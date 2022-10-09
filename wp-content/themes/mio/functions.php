<?php

function mySiteScriptFiles() {
    wp_enqueue_style('coreCSSfile', get_stylesheet_uri(), NULL, microtime());
    wp_enqueue_script('myMainJSfile', get_theme_file_uri('/js/main.js'), array('jquery'), microtime(), TRUE);
    wp_enqueue_style('front-page', get_theme_file_uri('/css/frontPage.css'));

    wp_localize_script('myMainJSfile', 'wp_injection', array(
        'root_url' => get_site_url(),
        'nonce'    => wp_create_nonce( 'wp_rest' )
    ));
}

add_action('wp_enqueue_scripts', 'mySiteScriptFiles');



function mySiteAddedFeatures() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    register_nav_menu( 'main-nav-menu', 'Main Nav Menu' );
}

add_action('after_setup_theme', 'mySiteAddedFeatures');


/*add_action('wp_loaded', 'noAdminBar');

function noAdminBar() {
    $theUser = wp_get_current_user();

    if (count($theUser->roles) == 1 && $theUser->roles[0] == 'subscriber'  && !is_user_logged_in() ) {
        # code...
        show_admin_bar( false );
        exit;
    }
}
*/