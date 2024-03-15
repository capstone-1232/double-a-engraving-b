<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package doubleAengraving
 */

get_header();
?>

<main class="catalog-main">

    <h1>Our Catalog</h1>

    <!-- Carousel Section  -->
    <div class="slider">
    <?php echo do_shortcode('[sp_wpcarousel id="242"]'); ?>
    </div>
    <!-- this will most likely actually use a plugin of sorts, but this is HTML to give an idea.
    ideally, the user will be able to add images to the carousel and make it random each time. -->
    <!-- end of carousel section -->

    <h2> Various Engraved Products</h2>
    <p>Browse the category of our products in the catalog. Click any of category images to be taken to the page for
        those products.</p>

    <!-- Catalog section -->
    <!-- the gallery class will use breakpoints to display 2x2 on mobile and 4x4 on larger screens -->
    <article>
    <?php
    $args = array(
        'taxonomy'   => 'category',
        'hide_empty' => false,
        'exclude'    => get_cat_ID('Uncategorized'), // Exclude the Uncategorized category
    );

    $categories = get_categories($args);

    foreach ($categories as $category) {
        // Output category name
        echo '<h3>Category: ' . esc_html($category->name) . '</h3>';

        // Get the featured image of the category
        $category_image = get_tax_image($category->term_id);

        // Check if the category has a featured image
        if (!empty($category_image)) {
            echo '<div class="category-image">';
            echo '<img src="' . esc_url($category_image) . '" alt="' . esc_attr($category->name) . '">';
            echo '</div>';
        }
    }
    ?>
    </article>
</main>

<?php
get_sidebar();
get_footer();
?>
