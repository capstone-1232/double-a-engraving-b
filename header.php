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
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Arvo:ital,wght@0,400;0,700;1,400;1,700&family=Luxurious+Roman&display=swap"
		rel="stylesheet">
	<style>
		.navbar {
			background-color: #3d4f08;
		}

		@media screen and (min-width: 768px) {
			.menu {
				display: flex;
				flex-direction: column;
			}



			.navbar-nav .nav-link {
				border-right: 1px solid #fff;
			}

		}

		.menu li {

			padding: 10px;
		}

		.menu {
			list-style: none;
			margin: 0;
			flex-direction: row;
			padding: 0;

		}

		li a {
			text-decoration: none;
			color: white;
		}

		a:visited {
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


	</div>
	<nav class="navbar navbar-expand-md sticky-top">
		<div class="container-fluid">
			<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas"
				aria-controls="offcanvas" aria-label="Toggle navigation">
				<!-- Menu Icon -->
				<svg class="menu-icon" xmlns="http://www.w3.org/2000/svg" fill="white" width="35" height="35"
					viewBox="0 0 21 18">
					<path id="hamburger_icon" data-name="hamburger icon"
						d="M4.5,27h21V24H4.5Zm0-7.5h21v-3H4.5ZM4.5,9v3h21V9Z" transform="translate(-4.5 -9)" />
				</svg>
			</button>
			<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvas"
				aria-labelledby="offcanvasLabel">
				<div class="offcanvas-header">
					<button type="button" class="svg-close" data-bs-dismiss="offcanvas" aria-label="Close">
						<svg xmlns="http://www.w3.org/2000/svg" fill="white" width="35" height="35"
							viewBox="0 0 1024 1024">
							<path
								d="M764.288 214.592 512 466.88 259.712 214.592a31.936 31.936 0 0 0-45.12 45.12L466.752 512 214.528 764.224a31.936 31.936 0 1 0 45.12 45.184L512 557.184l252.288 252.288a31.936 31.936 0 0 0 45.12-45.12L557.12 512.064l252.288-252.352a31.936 31.936 0 1 0-45.12-45.184z" />
						</svg>
					</button>
				</div>
				<div class="offcanvas-body">
					<div class="container">



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
	</nav>
	<!-- #site-navigation -->
	</header><!-- #masthead -->