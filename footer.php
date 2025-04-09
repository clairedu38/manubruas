<footer>
    <div class="first-footer">

        <div class="first-footer-logo">
            <div>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-bruas.svg" alt="Logo bruas">
                </a>
            </div>
            <div>
                <p><?php echo esc_html(get_field('texte_3bis', 2)); ?></p>
                <a href="#">
                    <img src="<?php echo esc_url(get_field('image_3bis', 2)['url']); ?>" alt="Logo 3bis">
                </a>
            </div>
        </div>

        <div class="first-footer-menu">
            <div class="first-footer-menu-liens">
                <h3><?php echo esc_html(get_field('titre_menu_1', 2)); ?></h3>
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer1',
                        'container'      => false, // N'affiche pas le conteneur ul autour du menu
                        'menu_class'     => 'footer-menu', 
                    ));
                ?>
            </div>
            <div class="first-footer-menu-contact">
                <h3><?php echo esc_html(get_field('titre_menu_2', 2)); ?></h3>
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer2',
                        'container'      => false, // N'affiche pas le conteneur ul autour du menu
                        'menu_class'     => 'footer-menu', 
                    ));
                ?>
                <a class="linkedin-footer" href="<?php echo esc_url(get_field('linkedin', 2)); ?>" target="_blank">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icone-linkedin.svg" alt="lien linkedin">
                </a>
            </div>
        </div>
    </div>

    <div class="second-footer">
  <p>
    <?php echo esc_html(get_field('copyright', 2)); ?>
       -    <?php echo esc_html(get_field('nom', 2)); ?>
       -    <a href="<?php echo esc_url(get_field('mentions_legales', 2)['url']); ?>">
      <?php echo esc_html(get_field('mentions_legales', 2)['title']); ?>
    </a>
       -    <a href="<?php echo esc_url(get_field('rgpd', 2)['url']); ?>">
      <?php echo esc_html(get_field('rgpd', 2)['title']); ?>
    </a>
       -    <a href="<?php echo esc_url(get_field('creation_nom', 2)['url']); ?>">
      <?php echo esc_html(get_field('creation_nom', 2)['title']); ?>
    </a>
  </p>
</div>
</footer>

<?php wp_footer(); ?>
  <!-- script Google Analytics ici -->
</body>
</html>