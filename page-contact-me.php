<?php
/**
 * The template for displaying the about me page
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

<main id="primary" class="contactme-main temp-wrapper">




    <div class="inner-container contact-flex ">
        <div class="contact-flex">

            <section class="contact-info">
                <h1>Contact Information</h1>
                <p>If you want to contact me for questions about my services or inquiries that aren’t for a custom
                    engraving order, feel free to find me in-person or fill out the form below.</p>
            </section>
            <div class="google-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2371.0042031659023!2d-113.42576822325653!3d53.53983917234609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53a022bdafe5e06b%3A0xaa6dffcfe514a0f!2sCapilano%20Mall!5e0!3m2!1sen!2sca!4v1711235570981!5m2!1sen!2sca"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
    
            <section class="contact-form">
                <h2>Contact Form</h2>
                <?php dynamic_sidebar('contact_form') ?>
            </section>
        </div>
    </div>


</main><!-- #main -->

<?php
get_sidebar();
get_footer();
