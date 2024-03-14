<?php
/**
 * The template for displaying the write a review page
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

<main class="write-a-review-main">
    <!-- start of write a review information -->
    <section>
        <article>

            <h1>
                <?php the_title(); ?>
            </h1>
            <p>
                Your review matters to us a lot! Your time is appreciated.
            </p>
            <p>Thank you!</p>
        </article>

    </section>
    <!-- end of write a review information -->

    <!-- start of review form -->
    <section>
        <article>
            <div class="review-form">
                <?php dynamic_sidebar('review_form') ?>
            </div>
        </article>
    </section>
    <!-- end of review form -->

</main>

<?php
get_footer();
?>