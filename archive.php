<?php get_header(); ?>

<main class="reference-page">
    <h1><?php post_type_archive_title(); ?></h1>

    <?php if (have_posts()) : ?>
        <div class="reference-list">
            <?php while (have_posts()) : the_post(); ?>
                <article class="reference-item">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p><?php the_excerpt(); ?></p>
                </article>
            <?php endwhile; ?>
        </div>

        <?php the_posts_navigation(); ?>
    <?php else : ?>
        <p>Aucune référence trouvée.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>