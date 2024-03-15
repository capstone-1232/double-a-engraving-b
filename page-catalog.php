<?php

/**
 * page for displaying the catalog page
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * @package doubleAengraving
 */


get_header();
?>
<main class="catalog-main">

    <h1>
        <?php the_title(); ?>

    </h1>

    <!-- Carousel Section  -->
    <div class="slider">
        <div class="slider-item">
            <img src="https://via.placeholder.com/500x300" alt="Slider Image 1">
        </div>
        <div class="slider-item">
            <img src="https://via.placeholder.com/500x300" alt="Slider Image 2">
        </div>
        <div class="slider-item">
            <img src="https://via.placeholder.com/500x300" alt="Slider Image 3">
        </div>
    </div>
    <!-- this will most likely actually use a plugin of sorts, but this is HTML to give an idea.
    ideally, the user will be able to add images to the carousel and make it random each time. -->
    <!-- end of carousel section -->

    <h2> Various Engraved Products</h2>
    <p>Browse the category of our products in the catalog. Click any of category images to be taken to the page for
        those products.</p>

    <!-- Catalog section -->
    <!-- the gallery class will use breakpoints to display 2x2 on mobile and 4x4 on larger screens -->
    <article class="gallery gallery-columns-2 gallery-columns-4">
        <?php
        // Get all categories
        $categories = get_categories();

        // Loop through each category
        foreach ($categories as $category) {
            // Get the first image from the category
            $args = array(
                'post_type' => 'products',
                'posts_per_page' => 1,
                'category_name' => $category->name,
                'orderby' => 'rand'
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    // Check if 'use_for_catalog' field is true
                    if (get_field('use_for_catalog')) {
                        // Display the image and link to the category page
                        ?>
                        <?php get_template_part('template-parts/content', 'catalog'); ?>

                        <?php
                    }
                }
            }
            wp_reset_postdata();
        }
        ?>
    </article>
    <!-- End of Catalog section -->


</main>

<?php
get_sidebar();
get_footer();