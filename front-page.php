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

<main id="primary" class="site-main">

    <section class="container-fluid  bg-black">
        <div class="container">

            <h1 class="text-white pt-4">Welcome to Double A Engraving</h1>
            <h5 class="text-white py-3"> Offering affordable, custom laser engravings on a variety of materials. If you
                imagine it, I create it.</h5>

            <button class="btn btn-primary mb-4" type="button">Make a Request</button>

        </div>
    </section>



    <section class="container px-3">
        <h2>Test!</h2>

        <div class="gallery gallery-columns-2 gallery-columns-4">
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => -1,
            );
            $loop = new WP_Query($args);
            while ($loop->have_posts()) {
                $loop->the_post();
                get_template_part('template-parts/content-landing-images');
                ?>
                <?php
            }

            ?>
        </div>
    </section>




</main><!-- #main -->

<?php
get_sidebar();
get_footer();
