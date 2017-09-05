<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<?php if ( is_home() && ! is_front_page() ) : ?>
		<header class="page-header">
		
			<h1 class="page-title"><?php single_post_title(); ?></h1>
		</header>
	<?php endif; ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
			<?php if ( is_home() && is_front_page() ) : ?>
			<header class="page-header">
				<h2 class="page-title">news</h2>
			</header>
			<?php endif; ?>

			<?php query_posts('posts_per_page=5'); ?>
			<?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) :  the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					if ( is_home() && is_front_page() ) : ?>
						<div class="post-news">
							<div class="post-thumbnail home">
								
								<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
									<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
									</a>
								<?php else : ?>
									<a href="<?php the_permalink(); ?>">
										<img src="/img/logo-black-frame.png" alt="">
									</a>
								<?php endif; ?>
							</div><!-- .post-thumbnail -->
							<p><?php the_time("Y.m.d"); ?></p>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<div class="more-news">more...</div>
						</div>
						<div class="dotted"></div>
					<?php else :
						get_template_part( 'template-parts/post/content', get_post_format() );
					endif;

				endwhile;

//				the_posts_pagination( array(
//					'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
//					'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
//					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
//				) );

			else :

				get_template_part( 'template-parts/post/content', 'none' );

			endif;
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar("home"); ?>
</div><!-- .wrap -->

<?php get_footer();
