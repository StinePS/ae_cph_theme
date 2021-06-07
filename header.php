<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">

<?php wp_head(); ?>
<!-- fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Italiana&family=Open+Sans&display=swap" rel="stylesheet"> 
</head>


<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e(
     'Skip to content',
     'twentyseventeen'
 ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<!-- Nav-bar -->
		<div class="navigation-top">
			<div id="home-button">
                <a href="https://stineplejdrup.dk/kea/10_eksamen/ae_cph/">
                    <img id="header-logo" src="https://stineplejdrup.dk/kea/10_eksamen/ae_cph/img/logo_no_c.svg" alt="AE Copenhagen logo" width="72" height="72">
                </a>
			</div>

			<div class="wrap">
				<?php get_template_part('template-parts/navigation/navigation', 'top'); ?>
			</div><!-- .wrap -->
		</div><!-- .navigation-top -->

	</header><!-- #masthead -->

	<div class="site-content-contain">
		<div id="content" class="site-content">