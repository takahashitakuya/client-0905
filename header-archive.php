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
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, minimum-scale=1.0">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>

<!-- Custom Scripts -->
<?php echo get_post_meta($post->ID, 'head_script', true); ?>

</head>

<body <?php body_class(); ?>>
<div class="btn-nav-mb">
		<img src="<?php print get_template_directory_uri() . "/assets/images/nav-mb.png"; ?>" alt="" class="custom-btn-nav btn-nav-mb">
</div>
<?php $page = get_post($post->ID);?>

<div id="page" class="site page-<?php echo $page->post_name; ?>">

	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header id="masthead" class="site-header" role="banner">


		<?php if($page->post_name != "service" ){get_template_part( 'template-parts/header/header', 'archive' );} ?>

		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top page">
				<div class="wrap">
					<?php get_template_part( 'template-parts/navigation/navigation', 'sub' ); ?>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php endif; ?>
		
	</header><!-- #masthead -->
	

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) && 0 ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
