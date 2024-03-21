<?php

/**
 * page for displaying the testimonials page
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * @package doubleAengraving
 */

get_header();
?>

<main>
    <h1>
        <section class="testimonials-section">
        <?php the_title(); ?>
    </h1>
    <!-- the idea behind this section is that it will be scrollable -->
    <!-- on mobile views, it will show 1 testimonial but be scrollable, and on larger views it will show 3 -->
        <article class="inner-container">
           
            <h4>Read what our customers say about our products and services.</h4>
            
            <?php echo do_shortcode('[site_reviews hide="date" display="10" assigned_terms="user-testimonials"]') ?>
        
        </article>
    </section>
    <button>Write a Review</button>
    <button>Back to Home</button>
</main>

<?php
get_footer();
?>