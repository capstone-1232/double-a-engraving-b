<?php
/**
 * The front page template file
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

<!-- Hero section  -->
<section>
    <div class="banner-area">
        <div class="banner-container">
            <h1>Double-A Engraving</h1>
            <p> Offering affordable, custom laser engravings on a variety of materials.
                If you imagine it, I create it.</p>
            <div>
                <a class="call-to-action" type="button">Make a Request</a>
            </div>
        </div>
    </div>
</section>
<!-- end of hero section -->
<main id="primary" class="site-main container-fluid container-lg">
    <!-- fluid until large breakpoint to have a smooth-ish transition as content strethces  -->


    <!-- Catalog section -->
    <article>
        <section class="catalog-container">
            <h2>Carved Collections</h2>
            <p>Explore our collection and the versatility of engravings across
                a range of materials. Click the button to view more categories.
            </p>
    
            <!-- when CSS is implemented, this will display images at 2x2 on mobile screens
            then 4x4 on larger screens -->
            <div class="catalog-flex-container">
                <?php
                $categories = get_categories();
                // this is to make it so it loops only 4 times, displaying a maximum of 4 categories
                $count = 0;
                foreach ($categories as $cat):
                    if ($count >= 4) {
                        break;
                    }
                    $count++;
                    ?>
                    <!-- create a card to contain the category image and name -->
                    <div class="category-card">
    
                        <?php
                        $size = 'category-thumb';
                        $url = get_term_link($cat);
                        ?>
                        <!-- section for the category image -->
                        <div class="category-image">
                            <a href="<?php echo esc_url($url); ?>">
                                <!-- grabs the category image, sets its size to the custom size, and grabs alt text -->
                                <?php z_taxonomy_image($cat->term_id, $size, $attr); ?>
                            </a>
                        </div>
                        <!-- section for the category name -->
                        <div class="category-name">
                            <?php
                            // this is to make the name also clickable instead of just the image and link to category
                            $url = get_term_link($cat);
                            ?>
                            <a href="<?php echo esc_url($url); ?>"><h3>
                                <?php echo $cat->name; ?>
                            </h3>
                            </a>
                        </div>
                        <?php
                        ?>
                    </div>
    
                <?php endforeach; ?>
            </div>
                <a class="view-catalog-button" type="button">View Catalog</a>
        </section>
    </article>
    <!-- end of catalog section -->
    <!-- testimonials section  -->
    <section class="testimonials-container">
        <h2>Testimonials</h2>
        <div class="testimonials">
        <?php echo do_shortcode('[site_reviews hide="date" display="3" assigned_terms="user-testimonials"]') ?>
        </div>
            <a class="view-testimonials-button" type="button">View Testimonials</a>

    </section>
    <!-- end of testimonials section -->

    <!-- about me section -->
    <section class="about-me-section">
        <h2> About Me</h2>
        <div class="allan-anderson-pic-container">
            <img src="http://www.benishaanand.ca/double-a-engraving/wp-content/uploads/2024/03/allan-anderson-pic.webp" alt="Allan Anderson">
        </div>
        <p>I am Allan Anderson, I have been laser engraving since 2022. I work out of my home and sell products at
            various farmers markets around Edmonton.</p>
        <p> It started as a hobby first but after retiring, I turned it into a
            business and it has been awesome.</p>
            <a class="about-me-button" type="button"> More About Me</a>
    </section>
    <!-- end of about me section -->
    <!-- location section -->
    <section class="location-container">
        <h2>Location</h2>
        <p>To meet in person or buy any products, come over to <u> Capilano Mall, 5004 98 Ave Edmonton </u>.</p>
        <p>I am available on Saturdays from <u>9:30 AM - 3:00 PM.</u> You can also reach out to me at <u>780-220-9681. </u></p>
        <p> Use the google maps below to get accurate location details.</p>

    </section>

    <!-- end of location section -->
    <!-- tagline section -->
    <section class="tagline-container">

        <p class="tagline-paragraph"> If you imagine it, I create it.</p>
        <a class="tagline-button" type="button"> Make a Request<a>

    </section>
</main><!-- #main -->

<?php
get_sidebar();
get_footer();
