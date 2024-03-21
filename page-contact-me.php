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

	<main id="primary" class="contactme-main">


    <section>
     <div class="inner-container">
         <article>
             <h1 class="text-white pt-4">Contact Information</h1>
             <p>If you want to contact me for questions about my services or inquiries that aren’t for a custom engraving order, feel free to find me in-person or fill out the form below.</p>
         </article>

         <div class="contact-form">
             <?php dynamic_sidebar('contact_form') ?>
         </div>
     </div>
    </section>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
