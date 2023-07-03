<?php

function malika_theme_support() {
    // Adds dynamic title
    add_theme_support( 'title-tag' );
    // logo function
    add_theme_support('custom-logo');
    // post thumbnails
    add_theme_support('post-thumbnails');

}

add_action( 'after_setup_theme', 'malika_theme_support');


function malika_menus() {

    $locations = array(
        'primary' => "Desktop Primary menu",
        'footer' => "Footer menu Items"
    );

    register_nav_menus( $locations );

}

add_action( 'init', 'malika_menus');


function malika_register_styles() {

    $version = wp_get_theme()->get( 'Version' );

    wp_enqueue_style('malika-homestyle', get_template_directory_uri() . "/style.css", array(), $version, 'all');
    wp_enqueue_style('malika-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css", array('malika-homestyle'), '5.3.0', 'all');
    wp_enqueue_style('malika-boostrap-icons', "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css", array(), '1.10.5', 'all');
    wp_enqueue_style('malika-google-fonts', "https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,200;0,400;0,600;0,700;0,900;1,400;1,600;1,700;1,900&display=swap", array(), '0.1', 'all');

    if ( is_single() ) {
        wp_enqueue_style('malika-post-style', get_template_directory_uri() . "/assets/css/post.css", array(), $version, 'all');
    }

    // condionally load some css files on respective pages

    $template_directory_uri = get_template_directory_uri();

    if (is_archive()) {
        wp_enqueue_style('malika-archive-style', $template_directory_uri . "/assets/css/journal.css", array(), $version, 'all');
    } elseif (is_page_template('journal.php')) {
        wp_enqueue_style('malika-journal-style', $template_directory_uri . "/assets/css/journal.css", array(), $version, 'all');
    } elseif (is_search()) {
        wp_enqueue_style('malika-search-style', $template_directory_uri . "/assets/css/journal.css", array(), $version, 'all');
    } elseif (is_page_template('contact.php')) {
        wp_enqueue_style('malika-contact-style', $template_directory_uri . "/assets/css/contact.css", array(), $version, 'all');
    } elseif (is_page_template('about.php')) {
        wp_enqueue_style('malika-about-style', $template_directory_uri . "/assets/css/about.css", array(), $version, 'all');
    } elseif (is_404()) {
        wp_enqueue_style('malika-404-style', $template_directory_uri . "/assets/css/about.css", array(), $version, 'all');
    } elseif (is_page_template( 'page.php' )) {
        wp_enqueue_style('malika-page-style', $template_directory_uri . "/assets/css/about.css", array(), $version, 'all');
    } elseif (is_page_template( 'team.php' )) {
        wp_enqueue_style('malika-team-style', $template_directory_uri . "/assets/css/team.css", array(), $version, 'all');
    }
}

add_action('wp_enqueue_scripts', 'malika_register_styles');

function malika_register_scripts() {

    wp_enqueue_script( 'malika-jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', array(), '3.2.1', true);
    // wp_enqueue_script( 'malika-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js', array(), '1.12.9', true);
    wp_enqueue_script( 'malika-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', array(), '4.0.0', true);
    wp_enqueue_script( 'malika-homestyle', get_template_directory_uri() . "/assets/js/index.js", array(), '1.0.0', true);

}

add_action('wp_enqueue_scripts', 'malika_register_scripts');

function malika_widget_areas() {
    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Sidebar area',
            'id' => 'sidebar-1',
            'description' => 'Sidebar Widget area'
        )
        );
}

add_action('widgets_init', 'malika_widget_areas');

?>
