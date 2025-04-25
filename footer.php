<footer>
    <div class="first-footer">

        <div class="first-footer-logo">
            <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-bruas.svg" alt="Logo Emmanuel Bruas" width="100%" height="auto">            
        </div>
            <div>
                <p><?php echo esc_html(get_field('texte_3bis', 2)); ?></p>
                <?php 
                $image_3bis = get_field('image_3bis', 2);
                $lien_3bis = get_field('lien_3bis', 2);
                if (is_array($image_3bis) && isset($image_3bis['url'])) : ?>
                    <div class="logo-3bis">
                        <?php if ($lien_3bis) : ?>
                            <a href="<?php echo esc_url($lien_3bis); ?>" target="_blank" rel="noopener noreferrer">
                                <img src="<?php echo esc_url($image_3bis['url']); ?>" alt="Logo 3bis">
                            </a>
                        <?php else : ?>
                            <img src="<?php echo esc_url($image_3bis['url']); ?>" alt="Logo 3bis">
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="first-footer-menu">
            <div class="first-footer-menu-liens">
                <h3><?php echo esc_html(get_field('titre_menu_1', 2)); ?></h3>
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer1',
                        'container'      => false,
                        'menu_class'     => 'footer-menu',
                    ));
                ?>
            </div>
            <div class="first-footer-menu-contact">
                <h3><?php echo esc_html(get_field('titre_menu_2', 2)); ?></h3>
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer2',
                        'container'      => false,
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
        - <?php echo esc_html(get_field('nom', 2)); ?>

        <?php $mentions = get_field('mentions_legales', 2); ?>
        <?php if ($mentions && is_array($mentions)) : ?>
            - <a href="<?php echo esc_url($mentions['url']); ?>">
                <?php echo esc_html($mentions['title']); ?>
            </a>
        <?php endif; ?>

        <?php $rgpd = get_field('rgpd', 2); ?>
        <?php if ($rgpd && is_array($rgpd)) : ?>
            - <a href="<?php echo esc_url($rgpd['url']); ?>">
                <?php echo esc_html($rgpd['title']); ?>
            </a>
        <?php endif; ?>

        <?php $creation = get_field('creation_nom', 2); ?>
        <?php if ($creation && is_array($creation)) : ?>
            - <a href="<?php echo esc_url($creation['url']); ?>">
                <?php echo esc_html($creation['title']); ?>
            </a>
        <?php endif; ?>
    </p>
</div>
</footer>

<?php wp_footer(); ?>
<!-- script Google Analytics ici -->
</body>
</html>