<?php

/**
 * This is the template page to display a single product  page
 * These posts will be uploaded by the client user
 * @package doubleAengraving
 * 
 */

get_header();

?>

<main class="single-product-entry temp-wrapper">

    <div class="inner-container">

        <section class="product-content">
            <h1>Product Details</h1>

            <article class="product-card">

                <div class="product-image">
                    <?php
                    $size = 'product-size';
                    $image = get_field('product_image');
                    if ($image) {
                        echo wp_get_attachment_image($image, $size);
                    }
                    ?>
                </div>
                <h2>
                    <?php the_title(); ?>
                </h2>
            </article>
            <div class="product-description">
                <p>
                    <?php the_field('product_description'); ?>
                </p>
                <div class="request-button">
                    <a href="<?php echo esc_url(home_url('/')); ?>custom-request">Make A Request</a>
                </div>

                <div class="catalog-button">
                    <a href="<?php echo esc_url(home_url('/')); ?>catalog">Back to Catalog</a>
                </div>
            </div>
        </section>


    </div>



</main>


<?php
get_footer();









