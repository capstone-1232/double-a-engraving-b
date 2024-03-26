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
<main class="catalog-main catalog-content">

    <h1>
        Our Catalog

    </h1>

    <!-- Carousel Section  -->
    <div class="catalog-carousel">
    <?php echo do_shortcode('[sp_wpcarousel id="242"]'); ?>
    </div>
    <!-- end of carousel section -->

    <div class="inner-container">
        <h2> Various Engraved Products</h2>
        <p>Browse the category of our products in the catalog.</p>
        <p> Click any of category images to be taken to the page for
            those products.</p>
    
        <!-- Catalog section -->
        <!-- the gallery class will use breakpoints to display 2x2 on mobile and 4x4 on larger screens -->
        <section class="catalog-flex-container">
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
                            <h3><?php echo $cat->name; ?></h3>
                        </a>
    
    
                    </div>
    
    
                    <?php
                    ?>
                </div>
    
            <?php endforeach; ?>
        </section>
        <!-- End of Catalog section -->

    </div>
</main>

<?php
get_sidebar();
get_footer();