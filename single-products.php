<?php

/**
 * This is the template page to display a single product  page
 * These posts will be uploaded by the client user
 * @package doubleAengraving
 * 
 */

get_header();

?>

<main class="single-product-entry">
    <!-- can probably use a container here for whole page, implement reusable CSS -->
    <h1>
        <?php the_title(); ?>
    </h1>


    <!-- whole product section, the image and description -->
    <article class="product">

        <div class="product-image">
            <?php

            $image = get_field('product_image');
            if ($image) {
                echo wp_get_attachment_image($image, 'full');
            }
            ?>
        </div>



        <div class="product-description">
            <?php the_field('product_description'); ?>

        </div>
    </article>
    <!-- end of product section -->
  


    <div class="requestbutton">
        <button>Make A Request</button>
    </div>

    <div class="catalogbtn">
        <button>Back to Catalog</button>
    </div>



</main>


<?php
get_footer();









