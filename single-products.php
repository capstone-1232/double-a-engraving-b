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

    <div class="inner-container">

        <div class="product-content">
            <h1>Product Details</h1>
    
            <article class="product">
        
                <div class="product-image">
                    <?php
        
                    $image = get_field('product_image');
                    if ($image) {
                        echo wp_get_attachment_image($image, 'full');
                    }
                    ?>
                </div>
                <h2><?php the_title(); ?></h2>
                <div class="product-description">
                    <p><?php the_field('product_description'); ?></p>
                </div>
            </article>
        
            <div class="request-button">
                <a>Make A Request</a>
            </div>
        
            <div class="catalog-button">
                <a>Back to Catalog</a>
            </div>

        </div>
    </div>



</main>


<?php
get_footer();









