<?php
/**
 * The front page template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package doubleAengraving
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container">
        <h2>Welcome</h2>
        <?php if (has_post_thumbnail()): ?>

            <?php the_post_thumbnail('category-thumb'); ?>

        <?php endif; ?>
    </div>

    <div class="container">
        <h2>Test!</h2>

        <div class="landing-image-layout">
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => -1,
            );
            $loop = new WP_Query($args);
            while ($loop->have_posts()){
                $loop->the_post();
                get_template_part('template-parts/content-landing-images');
            }
    
            ?>
        </div>
    </div>




</main><!-- #main -->

<?php
get_sidebar();
get_footer();
