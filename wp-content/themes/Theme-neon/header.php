<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="header">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="<?php esc_html_e('Toggle Navigation', 'theme-textdomain'); ?>">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id' => 'primary-menu',
						'depth' => 2,
						'container' => false, // afin d'éviter d'avoir une div autour
						'menu_class' => 'navbar-nav mr-auto', // ma classe personnalisée
						'fallback_cb' => 'Bootstrap_NavWalker::fallback',
					)
				);
				?>
				<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="search" placeholder="Tapez quelque chose" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
				</form>
			</div>
		</nav>
		<a href="<?php echo home_url('/'); ?>">
			<img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="Logo">
		</a>

	</header>
	<?php wp_body_open(); ?>
	<div class="container">