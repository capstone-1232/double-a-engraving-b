<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package doubleAengraving
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description"
		content="Double A Engraving offers custom Laser Engraving on a variety of materials such as wood, glass, steel, and more. You can place a custom request for an engraving for any kind of design you want.">
	<meta name="keywords"
		content="Engraving, Double A Engraving, Laser, Laser Engraving, Clocks, Accessories, Wood, Wood Engraving, Custom Engraving, Cheap, Affordable">
	<meta name="author" content="Allan Anderson">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
		crossorigin="anonymous"></script> -->
	<!-- bootstrap import, uncomment when ready -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Arvo:ital,wght@0,400;0,700;1,400;1,700&family=Luxurious+Roman&display=swap"
		rel="stylesheet">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
			<?php bloginfo('name'); ?>
		</a> </h1>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary">
			<?php esc_html_e('Skip to content', 'doubleaengraving'); ?>
		</a>


		<nav>
			<div>

				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'headermenu',
						'menu_id' => 'headermenu',

					)
				);

				// wp_nav_menu( array(
				// 	'theme_location'  => 'menu-1',
				// 	'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
				// 	'menu_class'      => 'navbar-nav',
				// 	'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
				// 	'walker'          => new WP_Bootstrap_Navwalker(),
				// this is to utilize bootstrap navwalker to allow submenus to be clicked
				?>

			</div>


		</nav>

		<!-- #site-navigation -->
		</header><!-- #masthead -->