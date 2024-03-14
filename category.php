<?php

/**
 * This is the template page to display category page
 * These posts will be uploaded by the client user
 * @package doubleAengraving
 * 
 */

get_header();

?>


<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        // Start the loop
        while ( have_posts() ) : the_post();

            // Include the single post template part
            get_template_part( 'template-parts/content', 'single' );

        endwhile; // End of the loop.
        ?>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>










