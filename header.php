<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Integro
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/elastic_grid.min.css" />
	

	<?php wp_head(); ?>

	<style>
		.div-bg{
			background-image: url('<?php echo get_template_directory_uri(); ?>/img/bs.jpg');
			width:100%;
			height:100%;
		}

	</style>

	
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'integro' ); ?></a>

	<header id="masthead" class="site-header container-fluid">
		<div class="row">

		    <!--
			<div class="site-branding col-md-4">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;
				$integro_description = get_bloginfo( 'description', 'display' );
				if ( $integro_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $integro_description; /* WPCS: xss ok. */ ?></p>
				<?php endif; ?>
			</div> --> <!-- .site-branding -->

			

		</div>


	</header><!-- #masthead -->

	<div id="content" class="site-content container-fluid p-0">
	<div class="row container-fluid p-0 m-0">


