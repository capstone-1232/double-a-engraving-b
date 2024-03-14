<?php

/**
 * This is the template page to display a single product category page
 * These posts will be uploaded by the client user
 * @package doubleAengraving
 * 
 */

get_header();

?>


<main class="single-product-entry">
    <h1>
        <?php the_title(); ?>
    </h1>

    <!-- start of category description - this is input by the user in wordpress  -->
    <div class="category-description">
        <?php the_field('product_description'); ?>

        <div class="requestbutton">
            <button>Make A Request</button>
        </div>
    </div>
    <!-- end of category description -->

    <!-- start of product gallery -->
    <div class="product-gallery gallery gallery-columns-2 ">
        <?php
        // this uses a custom plugin to display images in a gallery, these are input by the  user
        $image = get_field('product_image');
        $size = 'category-thumb'; // category thumb is a custom image size
        if ($image) {
            echo wp_get_attachment_image($image, $size);
        }
        ?>
    </div>

    <!-- end of product gallery -->



</main>


<?php
get_footer();









