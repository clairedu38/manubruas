<footer>
    <div class="first-footer">

        <div class="first-footer-logo">
            <div>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-bruas.svg" alt="Logo bruas">
            </a>
            </div>
            <div>
            <p>Membre de la Coopérative d'Activités et d'Emploi </p>
            <a href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-3bis.svg" alt="Logo 3bis">
            </a>
            </div>
        </div>

        <div class="first-footer-menu">
            <div class="first-footer-menu-liens">
                <h3>Liens rapides</h3>
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer1',
                        'container'      => false, // N'affiche pas le conteneur ul autour du menu
                        'menu_class'     => 'footer-menu', 
                    ));
                ?>
            </div>
            <div class="first-footer-menu-contact">
                <h3>Contacts et Réseaux</h3>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer2',
                    'container'      => false, // N'affiche pas le conteneur ul autour du menu
                    'menu_class'     => 'footer-menu', 
                ));
            ?>
            <a href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icone-linkedin.svg" alt="lien linkedin">
            </a>
            </div>
        </div>
    </div>

    <div class="second-footer">
        <p>
        ©2025  I  Emmanuel Bruas  I  Mentions Légales  I  Politiques de confidentialité  I  Site créé par Claire Duwig
        </p>
    </div>
</footer>

<?php wp_footer(); ?>
  <!-- script Google Analytics ici -->
</body>
</html>