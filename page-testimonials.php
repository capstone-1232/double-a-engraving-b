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
    <!-- the idea behind this section is that it will be scrollable -->
    <!-- on mobile views, it will show 1 testimonial but be scrollable, and on larger views it will show 3 -->
    <section class="container-fluid">
        <article>
            <h1>
                <?php the_title(); ?>
            </h1>
            <p>Read what our customers say about our products and services.</p>
            <div class="testimonial-gallery">
                <?php
                // this loop will display the testimonials, see the template-part for more
                $args = array(
                    'post_type' => 'customer-testimonial',
                    'posts_per_page' => -1,
                );
                $loop = new WP_Query($args);
                while ($loop->have_posts()) {
                    $loop->the_post();
                    get_template_part('template-parts/content', 'testimonials');
                    ?>
                    <?php
                }
                ?>
            </div>
        </article>
    </section>
    <div class="write-review-button">
        <a>Write a Review</a>
        </div>
        <div class="back-home-button">
        <a>Back to Home</a>
        </div>
</main>

<?php
get_footer();
?>