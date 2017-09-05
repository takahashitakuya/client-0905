<?php
/**
 * Displays header media
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="custom-header page service">

		<div class="custom-header-media">
			<?php //the_custom_header_markup(); ?>
			<?php the_post_thumbnail(); ?>
		</div>
		
	<?php get_template_part( 'template-parts/header/site', 'branding-sub' ); ?>
	
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
</div><!-- .custom-header -->
