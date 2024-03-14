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

        <h1 class="">Double-A Engraving</h1>
        <h5 class=""> Offering affordable, custom laser engravings on a variety of materials.
            If you imagine it, I create it.</h5>

        <div class="">

            <button class="">Make a Request</button>
        </div>
    </div>
</section>
<!-- end of hero section -->
<main id="primary" class="site-main container-fluid container-lg">
    <!-- fluid until large breakpoint to have a smooth-ish transition as content strethces  -->


    <!-- Catalog section -->
    <article class="py-3">
        <h2>Carved Collections</h2>
        <p>Explore our collection and the versatility of engravings across
            a range of materials. Click the button to view more categories.
        </p>

        <!-- when CSS is implemented, this will display images at 2x2 on mobile screens
        then 4x4 on larger screens -->
        <div class="gallery gallery-columns-2">
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
                        <a href="<?php echo esc_url($url); ?>">
                            <?php echo $cat->name; ?>
                        </a>


                    </div>


                    <?php
                    ?>
                </div>

            <?php endforeach; ?>
        </div>

        <div class="">
            <button class="" type="button">View Catalog</button>
        </div>
    </article>
    <!-- end of catalog section -->
    <hr>
    <!-- testimonials section  -->
    <section class="py-3">
        <h2> Testimonials</h2>
        <div>
            <?php
            $args = array(
                'post_type' => 'customer-testimonial',
                'posts_per_page' => -1,
            );
            $loop = new WP_Query($args);
            while ($loop->have_posts()) {
                $loop->the_post();
                get_template_part('template-parts/content', 'testimonials');
                ?>
                <?php
            }
            ?>
        </div>


        <div class="">
            <button class="" type="button">View Testimonials
            </button>

    </section>
    <!-- end of testimonials section -->

    <!-- about me section -->
    <section class="">
        <h2> About Me</h2>
        <div class="">
            <img src="https://via.placeholder.com/150" alt="Allan Anderson">

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
    <section class="">
        <h2>Location</h2>

        <p>
            To meet in person or buy any products, come over to <u> Capilano Mall, 5004 98 Ave Edmonton </u>.
            I am available on Saturdays from 9:30 AM - 3:00 PM. You can also reach out to me at <u>780-220-9681. </u>
            Use the google maps below to get accurate location details.
        </p>

    </section>

    <!-- end of location section -->

    <!-- tagline section -->
    <section class="">

        <h2 class=""> If you imagine it, I create it. </h2>
        <div class="">

            <button class="" type="button"> Make a Request
            </button>
        </div>

    </section>
</main><!-- #main -->

<?php
get_sidebar();
get_footer();
