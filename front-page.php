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
        <?php if ( has_post_thumbnail() ) : ?>
        
                <?php the_post_thumbnail( 'large' ); ?>
          
        <?php endif; ?>
    </div>
  
    

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
