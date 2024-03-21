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
        <?php foreach (get_categories() as $cat): ?>
            <!-- create a card to contain the category image and name -->
            <div class="category-card">

                <?php
                $size = 'category-thumb';
                $url = get_term_link($cat);
                ?>
                <!-- section for category image -->
                <div class="category-image">
                    <!-- grabs the category image, sets its size to the custom size, and grabs alt text -->
                    <a href="<?php echo esc_url($url); ?>">
                        <?php z_taxonomy_image($cat->term_id, $size, $attr); ?>
                    </a>
                </div>

                <!-- section for category name -->
                <div class="category-name">
                    <?php
                    // makes the name clickable and link to category
                    $url = get_term_link($cat);
                    ?>
                    <a href="<?php echo esc_url($url); ?>">
                        <?php echo $cat->name; ?>
                    </a>


                </div>


                <?php
                ?>
            </div>

        <?php endforeach; ?>
    </article>
    <!-- End of Catalog section -->


</main>

<?php
get_sidebar();
get_footer();