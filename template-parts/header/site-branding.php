<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<div class="site-branding">
	<div class="wrap">

		<?php the_custom_logo(); ?>

		<div class="site-branding-text">
			<?php if ( is_front_page() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif; ?>

			<?php
			$description = get_bloginfo( 'description', 'display' );

			if ( $description || is_customize_preview() ) :
			?>
				<p class="site-description"><?php echo $description; ?></p>
			<?php endif; ?>
		<!--<img src="<?php print get_template_directory_uri() . "/assets/images/nav-mb.png"; ?>" alt="" class="btn-nav-mb">-->

			<a href="https://twitter.com/kanakeno2017" target="_blank" class="sns"><img src="<?php print get_template_directory_uri() . "/assets/images/tw.png"; ?>" alt=""></a>
			<a href="https://www.facebook.com/kanakeno2017/" target="_blank" class="sns"><img src="<?php print get_template_directory_uri() . "/assets/images/fb.png"; ?>" alt=""></a>
			<a href="https://www.instagram.com/kanakeno_official/" target="_blank" class="sns"><img src="<?php print get_template_directory_uri() . "/assets/images/insta2.png"; ?>" alt=""></a>
		</div><!-- .site-branding-text -->

		<?php if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && ! has_nav_menu( 'top' ) ) : ?>
		<a href="#content" class="menu-scroll-down"><?php echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'twentyseventeen' ); ?></span></a>
	<?php endif; ?>

	</div><!-- .wrap -->
</div><!-- .site-branding -->
