<?php

/**
 * This is the template page to display a single product category page
 * These posts will be uploaded by the client user
 * @package doubleAengraving
 * 
 */

get_header();

?>


<main class="single-product-category-entry">
    <h1>
        <?php the_title(); ?>
    </h1>

    <!-- start of category description - this is input by the user in wordpress  -->
    <div class="category-description">
        <?php the_field('category_description'); ?>

        <div class="requestbutton">
            <button>Make A Request</button>
        </div>
    </div>
    <!-- end of category description -->

    <!-- start of product gallery -->
    <div class="product-gallery gallery gallery-columns-2 ">
        <?php
        // this uses a custom plugin to display images in a gallery, these are input by the  user

        $images = acf_photo_gallery('product_images', $post->ID);

        if (count($images)):

            foreach ($images as $image):
                $id = $image['id']; // retrieves the ID of the image
                $title = $image['title']; // retrieves title of the image - used for SEO and alt text
                $full_image_url = $image['full_image_url']; // receives full image URL
                $thumbnail_image_url = $image['thumbnail_image_url']; // gets a thumbnail image
                $thumbnail_image_url = acf_photo_gallery_resize_image($thumbnail_image_url, 250, 250); // resizes the image to 250x250, this can only be customized in the backend
                ?>

                <div class="gallery-placeholder">
                    <!-- when the image is clicked, this will direct the user to the full sized image -->
                    <a href="<?php echo $full_image_url; ?>">
                        <img src="<?php echo $thumbnail_image_url; ?>" alt="<?php echo $title; ?>">
                    </a>
                </div>

            <?php endforeach; endif; ?>
    </div>

    <!-- end of product gallery -->



</main>


<?php
get_footer();









