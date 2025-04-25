<a href="<?php the_permalink(); ?>" class="reference-card">
    <div class="reference-text">
        <h3><?php the_title(); ?></h3>
        <p><?php echo get_the_date('Y'); ?></p>
        <div class="reference-categories">
            <?php
            $categories = get_the_category();
            if ($categories) {
                $category_names = array_map(function($cat) {
                    return esc_html($cat->name);
                }, $categories);
                echo implode(', ', $category_names);
            }
            ?>
        </div>
    </div>

    <?php if (has_post_thumbnail()) : ?>
        <div class="reference-image">
            <?php the_post_thumbnail('medium'); ?>
        </div>
    <?php endif; ?>
</a>