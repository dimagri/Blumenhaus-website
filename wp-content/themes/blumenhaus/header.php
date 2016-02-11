	<!DOCTYPE html >
<html lang="ru" style="margin:0 !important">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Index</title>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/fonts/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/styles/styles.css" />
</head>

<?php wp_head(); ?>


	<?php
	if ( is_home() ) { ?>
		<body class="home">
	    	<section class="preloader" id="preloader" >
	    		<div class="progress-bar"></div>
				<img src="<?php bloginfo('template_url'); ?>/images/preloader-logo.svg" alt="" class="preloader-logo">
				<p>СТУДИЯ ЦВЕТОВ</p>
				<span class="preloader-arrow-down" id="preloader-down" ></span>
		</section>
	<?php } else echo '<body>' ?>
	<header class="wrap header">
		<?php wp_nav_menu( array( 'theme_location' => 'left', 'container' => 'nav','container_class' => 'menu-nav menu-nav-left', 'menu_class' => '' ) ); ?>
		<?php wp_nav_menu( array( 'theme_location' => 'right', 'container' => 'nav','container_class' => 'menu-nav menu-nav-right', 'menu_class' => '' ) ); ?>

		<h1 class="header-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo-header.svg" alt=""></a></h1>
	</header>