<?php

?>
<?php get_header(); ?>
<?php
// Récupération l'id de la publication actuelle
$post_id = get_the_ID();
$categories = get_the_category();
?>
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
    <h3 class="titre-autre-projet">Parcourir d'autres projets</h3>
</div>
<?php
$categories = get_the_category();
if ($categories) {
    $cat_ids = wp_list_pluck($categories, 'term_id');

    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 2,
        'post__not_in' => array(get_the_ID()),
        'category__in' => $cat_ids,
    );

    $related_query = new WP_Query($args);

    if ($related_query->have_posts()) : ?>
        <section class="vignettes-ref">
            <?php while ($related_query->have_posts()) : $related_query->the_post(); 
                get_template_part('template-part/vignette-reference'); 
            endwhile;
            wp_reset_postdata(); ?>
        </section>
    <?php endif;
}
?>

<?php get_footer(); ?>