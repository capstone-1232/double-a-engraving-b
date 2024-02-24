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
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
		crossorigin="anonymous"></script>
	<style>

		@media screen and (max-width: 768px){
			
			.navbar {
				background-color: #3d4f08;
			}
	
			.container-fluid{
				background-color: #3d4f08;
			}
	
			.menu{
				list-style: none;
				margin: 0;
			}	
	
			.menu li{
				
				padding: 10px;
			}
	
			li a{
				text-decoration: none;
				color: white;
			}
			.navbar-nav .nav-link {
				border-right: 1px solid #fff;
			}

		}
		a:visited{
			color: none;
		}
		</style>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary">
			<?php esc_html_e('Skip to content', 'doubleaengraving'); ?>
		</a>

		<!-- <header id="masthead" class="site-header">
			<div class="site-branding">
				<?php
				the_custom_logo();
				if (is_front_page() && is_home()):
					?>
					<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
							<?php bloginfo('name'); ?>
						</a></h1>
					<?php
				else:
					?>
					<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
							<?php bloginfo('name'); ?>
						</a></p>
					<?php
				endif;
				$doubleaengraving_description = get_bloginfo('description', 'display');
				if ($doubleaengraving_description || is_customize_preview()):
					?>
					<p class="site-description">
						<?php echo $doubleaengraving_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped   ?>
					</p>
				<?php endif; ?>
			</div> -->
			<!-- .site-branding -->


			<nav class="navbar navbar-expand-lg">
				<div class="container-fluid">
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
						data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
						aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
						<div class="navbar-nav">
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id' => 'primary-menu',
								)
							);
							?>

						</div>
					</div>
				</div>
			</nav>
			<!-- #site-navigation -->
		</header><!-- #masthead -->