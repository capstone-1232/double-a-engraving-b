<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package doubleAengraving
 */

get_header();
?>

	<main id="primary" class="site-main">
		<section>
			<h1>Product Details</h1>
			
				<?php
				while ( have_posts() ) :
					the_post();
					echo '<h2><a href="' . esc_url(get_permalink()) . '">' . get_the_title() . '</a></h2>';

					get_template_part( 'template-parts/content', get_post_type() );
			
				endwhile; // End of the loop.
				?>
			<div>
				<button>Back to Catalog</button>
				<button>Request Similar</button>

			</div>
		</section>



	</main><!-- #main -->

<?php
get_footer();
