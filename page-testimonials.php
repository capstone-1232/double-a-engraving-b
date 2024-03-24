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

        <section class="testimonials-section">
            <h1>
                <?php the_title(); ?>
            </h1>

            <article>
                <p>Read what our customers say about our products and services.</p>


                <?php echo do_shortcode('[site_reviews pagination="ajax" class="testimonials-decor" hide="date" display="3" assigned_terms="user-testimonials"]') ?>

            </article>
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