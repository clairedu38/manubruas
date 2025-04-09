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

function theme_enqueue_scripts() {
    if ( is_page_template('references.php') ) {
        wp_enqueue_script( 'references-script', get_stylesheet_directory_uri() . '/js/ajax.js', array(), null, true );
        wp_localize_script('references-script', 'ajax_object', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce'    => wp_create_nonce('filter_photos_nonce')
        ));
    } 
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );




// Requete pour affichage des images dans le catalogue
function filter_posts() {

    // ajax securité
    if ( ! isset( $_POST['ajax_nonce'] ) || ! wp_verify_nonce( $_POST['ajax_nonce'], 'filter_photos_nonce' ) ) {
        die( 'Security check failed' );
    }
   
    $filterCategory = $_POST['category'];

    $args = array(
        'post_type' => 'post',
        'posts_per_page' => -1,
        'post_status' => 'publish',
    );

    if (!empty($filterCategory)) {
        $args['tax_query'][] = array(
            'relation' => 'OR',
            array(
                'taxonomy' => 'category',
                'field'    => 'slug',
                'terms'    => $filterCategory,
            ),
        );
    }


        // création d' une nouvelle instance de WP_Query
    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            ?>
            <?php get_template_part('template-part/vignette-reference'); ?>
            <?php
        }
        wp_reset_postdata(); // réinitialisation de la requête
    }

    wp_die();
   
}

add_action('wp_ajax_filter_posts', 'filter_posts');
add_action('wp_ajax_nopriv_filter_posts', 'filter_posts');