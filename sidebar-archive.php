<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<section id="widget-news" class="widget widget-news">
		<?php query_posts('posts_per_page=5'); ?>
		<?php
		if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) :  the_post(); ?>
				<a href="<?php the_permalink(); ?>">
					<div class="post-news">
						<div class="post-thumbnail">
							<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
								<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
							<?php else : ?>
								<img src="/img/logo-black-frame.png" alt="">
							<?php endif; ?>
						</div><!-- .post-thumbnail -->
						<p><?php the_time("Y.m.d"); ?></p>
						<h3><?php the_title(); ?></h3>
						<div class="clear"></div>
					</div>
				</a>
			<?php endwhile;
			wp_reset_query();
		else :

			get_template_part( 'template-parts/post/content', 'none' );

		endif;
		?>	
	</section>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
