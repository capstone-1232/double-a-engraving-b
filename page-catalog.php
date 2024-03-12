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
<p>Browse the category of our products in the catalog. Click any of category images to be taken to the page for those
    products.</p>

<!-- Catalog section -->
<!-- the gallery class will use breakpoints to display 2x2 on mobile and 4x4 on larger screens -->
<div class="gallery gallery-columns-2 gallery-columns-4">
    <?php
    // this loop will display the product categories, see the template-part for more
    $args = array(
        'post_type' => 'product-category',
        'posts_per_page' => -1,
    );
    $loop = new WP_Query($args);
    while ($loop->have_posts()) {
        $loop->the_post();
         get_template_part( 'template-parts/content', 'catalog' );
        ?>
        <?php
    }



    ?>

</div>







<?php
get_sidebar();
get_footer();