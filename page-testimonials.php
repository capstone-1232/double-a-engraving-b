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
    <div class="inner-container">
        <div class="horizontal-scroll-testimonials">
            <section class="testimonials-section">
            <h1><?php the_title(); ?></h1>
    
            <article>
                <p>Read what our customers say about our products and services.</p>
                <div class="content-testimonials"> 
                <div class="testimonials-decor"></div>
                <?php echo do_shortcode('[site_reviews hide="date" display="10" assigned_terms="user-testimonials"]') ?>
                </div>
            </article>
            </section>
        </div>

        <div class="write-review-button">
            <a>Write a Review</a>
            </div>
            <div class="back-home-button">
            <a>Back to Home</a>
            </div>   
</div>
</main>

<?php
get_footer();
?>