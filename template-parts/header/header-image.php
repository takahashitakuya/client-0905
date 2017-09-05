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
<div class="custom-header">

		<div class="custom-header-media">
			<?php //the_custom_header_markup(); ?>
			<?php //echo do_shortcode('[smartslider3 slider=2]'); ?>
			<?php echo do_shortcode("[metaslider id=174]"); ?>
		</div>

	<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
</div><!-- .custom-header -->
