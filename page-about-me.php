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

	<main id="primary" class="aboutme-main">


    <section class="container-fluid">
        <div class="container">
            <article>
                <h1 class="text-white pt-4">About Me</h1>
                <p>Hey there!</p>
                <p>I am Allan Anderson, a retired instructor from NAIT who is currently pursuing laser engravings as a hobby and a business. I work from home and sell various products at the famers’ market all over Edmonton.</p>
            </article>
            <article>
                <h2>About my Products and Equipment</h2>
                <p>I use a 10W optical output diode laser. The frame’s size allows engravings on a maximum size of 18” x 22”.</p>
                <p>I have a basic frame and laser along with a simple rotary module which allows engravings on cylindrical objects up to 8” in length.</p>
                <p>The laser is capable of engraving on wood, plastic, glass, leather, anodized aluminium, ceramics, slate and coated stainless steel.</p>
                <p>The best woods for engraving are hardwoods such as maple, oak, cherry, walnut and olive wood.</p>
                <p>Prior to engraving any product, I create a a design using software and gain the approval of the client before proceeding further to create the the product. </p>
            </article>
        </div>
    </section>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
