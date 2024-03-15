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
	<!-- this implements some hidden SEO - the user is only going to see the logo, but there is text in the background -->
	<!-- <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
			<?php bloginfo('name'); ?>
		</a></h1>
	<?php wp_body_open(); ?> -->
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary">
			<?php esc_html_e('Skip to content', 'doubleaengraving'); ?>
		</a>

		<header id="masthead" class="site-header header-bg-container">
			<div class="header-container">
				<nav id="site-navigation" class="main-navigation">
					<div class="mobile-menu-container">

					<!-- Toggle Button -->
						<!-- <button><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  									<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
							</svg>
						</button> -->
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"
							aria-label="Toggle menu"><svg viewBox="0 0 100 80" fill="white" width="40" height="40">
                    		<rect width="85" height="15" rx="6"></rect>
                    		<rect y="30" width="85" height="15" rx="6"></rect>
                    		<rect y="60" width="85" height="15" rx="6"></rect>
                		</svg></button>
						<!-- site branding also known as custom logo -->
						<div class="site-branding">
							<?php
							the_custom_logo();
							?>
						</div>
						
					</div>
					<!-- Nav Menu  -->
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'headermenu',
							'menu_id' => 'headermenu',
						)
					);
					?>
				</nav><!-- #site-navigation -->
			</div>
		</header><!-- #masthead -->