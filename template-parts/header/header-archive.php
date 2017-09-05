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
<div class="custom-header page">

		<div class="custom-header-media">
			<?php //the_custom_header_markup(); ?>
			<?php if( has_post_thumbnail() ): 
				the_post_thumbnail();
			else :?>
				<img src="<?php echo wp_upload_dir("2017/07")[url]; ?>/newseye_01.jpg" alt="">
			<?php endif; ?>
		</div>

	<?php get_template_part( 'template-parts/header/site', 'branding-sub' ); ?>
	
	<header class="entry-header">
		<?php //the_archive_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<h1 class="entry-title"><?php single_cat_title( '', true ); ?></h1>
	</header><!-- .entry-header -->
</div><!-- .custom-header -->
