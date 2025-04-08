<?php
// Template Name: References
?>
<?php get_header(); ?>

<article>
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            the_content();
        endwhile;
    endif;
    ?>
</article>

<section class="mise-en-page-references">

    <aside class="bloc-filtres">
        <?php $categories = get_categories(); ?>
        <div class="filtre-option tout-filtre selectionne">
            <p><strong>Toutes les catégories</strong></p>
        </div>
        <?php foreach ($categories as $category) : ?>
            <div class="filtre-option choix-filtre">
                <p><?php echo esc_html($category->name); ?></p>
            </div>
        <?php endforeach; ?>
    </aside>

    <div class="vignettes-refs">
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => -1,
            'post_status' => 'publish',
        );
        $ref_query = new WP_Query($args);

        if ($ref_query->have_posts()) :
            while ($ref_query->have_posts()) : $ref_query->the_post();
                get_template_part('template-part/vignette-reference');
            endwhile;
            wp_reset_postdata();
        else :
            echo '<p>Aucune référence trouvée.</p>';
        endif;
        ?>
    </div>

</section>


<?php get_footer(); ?>