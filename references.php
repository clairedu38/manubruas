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
            <p><?php echo esc_html(get_field('titre_filtre', 13)); ?></p>
        </div>
        <?php foreach ($categories as $category) : ?>
            <div class="filtre-option choix-filtre">
                <p><?php echo esc_html($category->name); ?></p>
            </div>
        <?php endforeach; ?>
    </aside>

    <div class="vignettes-refs portfolio">
        
    </div>

</section>


<?php get_footer(); ?>