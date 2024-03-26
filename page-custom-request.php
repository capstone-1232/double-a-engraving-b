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

    <div class="inner-container">
        <section>
            <h1>Custom Request</h1>
            <p>The core part of our service is that we offer custom engravings on a variety of materials.</p>
            <p>
                This includes wood, plastic, glass, leather, anodized aluminum, ceramics, slate, and stainless steel.
                The frame size we use allows engraving on a maximum of 15" x 16".
            </p>

            <h2>Details & Rates</h2>
            <p>I charge $5.00 per hour and I can purchase the necessary material which will be including in your final
                cost.</p>
            <p> If you choose wood, you will be prompted to choose from a variety of woods</p>
            <p>Some engravings look much better on certain woods. If you aren't sure, choose "Discuss later" and we can
                talk about it.</p>
            <p>Delivery methods for the finished product can either be pick-up at the farmers' market, delivered to your
                residence, or shipped via Canada post (extra fees added to the final price).</p>
            <p>Please fill out the request form below, if you have any questions please contact me.</p>
        </section>
    </div>

    <!-- end of custom engraving request information -->

    <!-- start of custom engraving request form -->
    <section>
        <div class="inner-container">
            <h2>Request Form</h2>
            <p>Fields with * are required.</p>
            <div class="request-form">
                <?php dynamic_sidebar('custom-request_form') ?>
            </div>
            <a class="view-catalog-button" href="<?php echo esc_url(home_url('/')); ?>catalog" type="button">Back to
                Catalog</a>
        </div>
    </section>
    <!-- end of custom engraving request form -->

</main>

<?php
get_footer();
?>