<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="header">
		<a href="<?php echo home_url('/'); ?>">
			<img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="Logo">
		</a>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="<?php esc_html_e('Toggle Navigation', 'theme-textdomain'); ?>">
				<span class="navbar-toggler-icon"></span>
			</button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id' => 'primary-menu',
					'depth' => 2,
					'container' => false, // afin d'éviter d'avoir une div autour
					'walker'=> new Bootstrap_NavWalker(),
					'menu_class' => 'navbar-nav ml-auto', // ma classe personnalisée
					'fallback_cb'=> 'Bootstrap_NavWalker::fallback',
				)
			);
			?>
			</div>
		</nav>
	</header>
	<?php wp_body_open(); ?>