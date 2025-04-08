<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emmanuel Bruas</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ruda:wght@400..900&family=Unica+One&display=swap" rel="stylesheet">
    <?php wp_head(); ?> 
</head>

<body <?php body_class(); ?>>
 

  <header>
            <div class="logo-header">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-bruas.svg" alt="Logo Nathalie"></a>
            </div>
            <nav id="main-menu">
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'header',
                        'container'      => false, 
                        'menu_class'     => 'header-menu',
                    ));               
                ?>
            </nav>
        </header>