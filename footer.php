<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package doubleAengraving
 */

?>

<footer id="colophon" class="site-footer">
	<div class="footercontainer container pt-3">
		<h4> Capilano Mall - building with Albert’s Restaurant and TD Bank, 5004 98 Ave</h4>
		<h4>Available Saturdays 9:30 AM - 3:00 PM</h4>
		<h4>Cell: 780-220-9681</h4>

		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'footermenu',
				'depth' => 2, // 1 = no dropdowns, 2 = with dropdowns.
				'menu_class'      => 'navbar-nav',
				'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
				'walker' => new WP_Bootstrap_Navwalker(),
			)
		);
		?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>