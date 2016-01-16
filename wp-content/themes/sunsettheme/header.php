<?php
/*
	Header Template

	@package sunsettheme
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!--suppress JSUnresolvedLibraryURL -->
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title><?php bloginfo('name'); wp_title(); ?></title>
	<meta name="description" content="<?php bloginfo('description') ?>">

	<!--
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php /*if(is_singular() && pings_open(get_queried_object())) : */ ?>
		<link rel="pingback" href="<?php /*bloginfo('pingback_url'); */ ?>">
	<?php /*endif; */ ?>
	-->

	<?php wp_head(); ?>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<?php
	$custom_css = esc_attr(get_option('css_form'));
	if (!empty($custom_css)):
		echo '<style>' . $custom_css . '</style>';
	endif;
	?>

</head>

<body <?php body_class(); ?>>
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<header class="header-container background-image text-center" style="background-image: url(<?php header_image(); ?>)">
				<div class="header-content table">
					<div class="table-cell">
						<h1 class="site-title sunset-icon">
							<span class="sunset-logo"></span>
							<span class="hide"><?php bloginfo('name'); ?></span>
						</h1>
						<h2 class="site-description"><?php bloginfo('description'); ?></h2>
					</div>
				</div>
				<div class="nav-container">
					<nav class="navbar navbar-sunset">
						<?php

						$defaults = array(
							'theme_location'  => 'primary',
							'menu'            => '',
							'container'       => '',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => 'nav navbar-nav',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'depth'           => 0,
							'walker'          => new Sunset_Walker_Nav_Primary()
						);

						wp_nav_menu( $defaults );

						?>
					</nav>
				</div>
			</header>
		</div>
	</div>
</div>