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
        <?php the_title(); ?>
    </h1>
    <!-- the idea behind this section is that it will be scrollable -->
    <!-- on mobile views, it will show 1 testimonial but be scrollable, and on larger views it will show 3 -->
    <section class="container-fluid">
        <article>
            <h2>Testimonials</h2>
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
    <button>Write a Review</button>
    <button>Back to Home</button>
</main>

<?php
get_footer();
?>