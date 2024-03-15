<?php
/**
 * The template for displaying the custom request page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package doubleAengraving
 */

get_header();

?>

<main class="customrequest-main">
    <!-- start of custom engraving request information -->
    <section>
        <article>

            <h1>
                <?php the_title(); ?>
            </h1>
            <p>The core part of our service is that we offer custom engravings on a variety of materials,
                such as wood, plastic, glass, leather, anodized aluminum, ceramics, slate, and stainless steel.
                The frame size we use allows engraving on a maximum of 18" x 22".
            </p>

            <h2>Details & Rates</h2>
            <p>I charge $5.00 per hour for engraving. You may supply your own material or I can purchase
                the material necessary. If you choose wood, you will be prompted to choose from a variety of woods -
                some engravings
                look much better on certain woods. If you aren't sure, choose "Discuss later" and we can talk about it.
            </p>

            <p>
                Delivery methods for the finished product can either be pick-up at the farmers' market,
                delivered to your residence by me, or shipped via Canada post (extra fees added to the final price).

            </p>

            <p>Please fill out the request form below, if you have any questions please contact me.</p>
        </article>

    </section>
    <!-- end of custom engraving request information -->

    <!-- start of custom engraving request form -->
    <section>
        <article>

            <h2>Request Form</h2>
            <p>Fields with * are required.</p>

            <div class="request-form">
                <?php dynamic_sidebar('custom-request_form') ?>
            </div>
        </article>
    </section>
    <!-- end of custom engraving request form -->

</main>

<?php
get_footer();
?>