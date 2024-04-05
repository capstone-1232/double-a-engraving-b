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

<main class="temp-wrapper">
    <div class="inner-container">

        
        <section class="testimonials-section">
            <h1>
                Customer Testimonials
            </h1>

            <p>Read what our customers say about our products and services.</p>

            <!-- section that contains each customer testimonial -->
            <section class="testimonials">

                <?php echo do_shortcode('[site_reviews pagination="ajax" id="reviews" class="testimonials-decor" hide="date" display="3" assigned_terms="user-testimonials"]') ?>

            </section>
            <!-- end of section that contains each customer testimonial -->
        </section>


        <div class="flex-btn-container">
            <a href="<?php echo esc_url(home_url('/')); ?>write-a-review" class="write-review-button">Write a Review</a>

            <a class="back-home-button" href="<?php echo esc_url(home_url('/')); ?>">Back to Home</a>
        </div>
    </div>
</main>

<?php
get_footer();
?>