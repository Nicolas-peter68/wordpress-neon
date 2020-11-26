<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="header">
		<nav class="navbar navbar-expand-md navbar-dark bg-dark" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'your-theme-slug'); ?>">
				<span class="navbar-toggler-icon"></span>
			</button>
			<a class="navbar-brand" href="#">Navbar</a>
			<?php
			wp_nav_menu(array(
				'theme_location'    => 'main',
				'depth'             => 2,
				'container'         => 'div',
				'container_class'   => 'collapse navbar-collapse',
				'container_id'      => 'bs-example-navbar-collapse-1',
				'menu_class'        => 'nav navbar-nav mr-auto',
				'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				'walker'            => new WP_Bootstrap_Navwalker(),
			));
			?>
		<?= get_search_form()?>
		</nav>
			<img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="Logo">
		</a>

	</header>
	<?php wp_body_open(); ?>
	<div class="container">