<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

// Enregistrement des menus dans WP
register_nav_menus( array(
	'header' => 'Menu Principal',
	'footer1' => 'Bas de page1',
    'footer2' => 'Bas de page2',
) );

function theme_enqueue_styles() {
    wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
    wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/css/style.css' );
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

