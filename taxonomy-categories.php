<?php

/**
 * This is the template page to display a single product  page
 * These posts will be uploaded by the client user
 * @package doubleAengraving
 */

get_header();

?>

<?php if (have_posts()) : ?>
    <?php while( have_posts()) :?>
        <?php the_post(); ?>
        <div class="review">
            <blockquote>
                <?php the_content(); ?>
                <footer>
                    <cite><?php the_title(); ?></cite>
                </footer>
            </blockquote>
        </div>
    <?php endwhile; ?>
<?php else : ?>
    <p>No reviews to display</p>
<?php endif; ?>

<?php
get_footer();
