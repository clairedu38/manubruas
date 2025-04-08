<?php
// Template Name: Article
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
<div>
    mettre les réferences de mêmes catégories
</div>

<?php get_footer(); ?>