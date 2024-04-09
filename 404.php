<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package doubleAengraving
 */

get_header();
?>

	<main id="primary" class="site-main temp-wrapper">

		<section class="error-404 not-found inner-container">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'doubleaengraving' ); ?></h1>
			</header><!-- .page-header -->

			<div class="err-content">
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'doubleaengraving' ); ?></p>

				<p>If you'd like to return back Home click the button below.</p>

				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="back-home-button">Back to Home</a>
			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
