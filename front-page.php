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
<section class="container-fluid  bg-black">
    <div class="container-md">

        <h1 class="text-white pt-4">Double-A Engraving</h1>
        <h5 class="text-white py-3 text-wrap"> Offering affordable, custom laser engravings on a variety of materials.
            If you
            imagine it, I create it.</h5>

        <div class="d-grid col-lg-4">

            <button class="btn btn-light mb-4 justify-content-md-start" type="button">Make a Request</button>
        </div>
    </div>
</section>
<!-- end of hero section -->
<main id="primary" class="site-main container-fluid container-lg">
    <!-- fluid until large breakpoint to have a smooth-ish transition as content strethces  -->


    <!-- Catalog section -->
    <section class="py-3">
        <h2>Carved Collections</h2>
        <p>Explore our collection and the versatility of engravings across
            a range of materials. Click the button to view more categories.
        </p>

        <!-- when CSS is implemented, this will display images at 2x2 on mobile screens
        then 4x4 on larger screens -->
        <div class="gallery gallery-columns-2 gallery-columns-4">
            <?php
            $args = array(
                'post_type' => 'lp-images',
                'posts_per_page' => -1,
            );
            $loop = new WP_Query($args);
            while ($loop->have_posts()) {
                $loop->the_post();
                $image = get_field('landing_page_images');
                $size = 'category-thumb'; // category thumb is a custom image size
                if ($image) {
                    echo wp_get_attachment_image($image, $size);
                }
                ?>
                <?php
            }

            ?>
        </div>

        <div class="d-grid col-6 mx-auto col-lg-4">
            <button class=" btn btn-primary mb-4 justify-content-md-center" type="button">View Catalog</button>
        </div>
    </section>
    <!-- end of catalog section -->
    <hr>
    <!-- testimonials section  -->
    <section class="py-3">
        <h2> Testimonials</h2>

        <div class="row">
            <div class="col-md-3 py-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">"I love my new engraved cutting board!"</h5>
                        <p class="card-text">- Jane Doe</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-grid col-6 mx-auto col-lg-4">
            <button class="btn btn-primary mb-4 justify-content-md-center" type="button">View Testimonials
            </button>

    </section>
    <!-- end of testimonials section -->

    <!-- about me section -->
    <section class="py-3 px-3">
        <h2> About Me</h2>
        <div class="d-flex justify-content-center">


            <?php
            echo wp_get_attachment_image('https://karikarij.com/wordpress/wp-content/uploads/2024/02/elementor-placeholder-image.webp', 'front-thumb');
            ?>


        </div>
        <p>I am Allan Anderson, I have been laser engraving since 2022. I work out of my home and sell products at
            various farmers markets around Edmonton. It started as a hobby first but after retiring, I turned it into a
            business and it has been awesome.</p>
        <div>
            <button type="button"> More About Me
            </button>
        </div>


    </section>
    <!-- end of about me section -->

    <!-- location section -->
    <section class=" py-3 px-3">
        <h2>Location</h2>

        <p>
            To meet in person or buy any products, come over to <u> Capilano Mall, 5004 98 Ave Edmonton </u>.
            I am available on Saturdays from 9:30 AM - 3:00 PM. You can also reach me at <u>780-220-9681. </u>
            Use the google maps below to get directions if needed.
        </p>

    </section>

    <!-- end of location section -->

    <!-- tagline section -->
    <section class="container-md py-3">

        <h2 class="text-center"> If you imagine it, I create it. </h2>
        <div class="d-grid col-6 mx-auto col-lg-4">

            <button class="catbtn btn btn-primary mb-4 justify-content-md-center" type="button"> Make a Request
            </button>
        </div>

    </section>






</main><!-- #main -->

<?php
get_sidebar();
get_footer();
