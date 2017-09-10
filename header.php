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
</head>

<body <?php body_class(); ?>>
	<div class="btn-nav-mb">
	
		<img src="<?php print get_template_directory_uri() . "/assets/images/nav-mb.png"; ?>" alt="" class="custom-btn-nav btn-nav-mb">
	</div>
	

	
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<?php get_template_part( 'template-parts/header/header', 'image' ); ?>

		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">
				<div class="wrap">
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php endif; ?>
	</header><!-- #masthead -->
	

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">

			<?php if ( is_home() && is_front_page() ) : ?>
			<div class="wrap bg67r">
				<img src="<?php print wp_upload_dir("2017/08")["url"] . "/main-01.jpg" ?>" alt="" class="">
				<div class="col">
					<a href="./about/" class="card-anchor about">
					<h1>つぎ、つぎ、つぐ。</h1>
					<p class="description">kanakenoは上質な白湯を提供する鉄瓶屋です。kanakenoの鉄瓶でつくった白湯は、余計なものが削ぎ落とされ、とてもまろやかになり、鉄分も摂れます。<br>
					そんな白湯をずっと楽しんでいただくため、永く気軽に鉄瓶をお使いいただくために、kanakenoは、鉄瓶と共に『はぐくむサービス』をご提供します。<br>
					kanakenoは、白湯を注ぎ、伝統を継ぎ、皆様を嗣ぐ鉄瓶屋であり続けます。</p>
					<div class="more-link">
						詳しくはこちら…
					</div>			
					</a>
				</div>
			</div>

			<h1 class="tac">３つの「はぐくむサービス」</h1>
			<div class="wrap col3">
				<div>
					<a href="./service/#guarantee" class="card-anchor">
					<img src="<?php print wp_upload_dir("2017/08")["url"] . "/main-02.jpg" ?>" alt="">
					<h2>育む<small>／永久保証</small></h2>
					<p class="description">失敗しても大丈夫。２回まで無料でサビ/着色のお直しを致します。<br>
					「錆びてしまった」「空焚きしたら真っ赤になった」「永く使って少しくたびれた鉄瓶を新品のようにしたい」こんなお悩みに職人が対応致します。</p>
					<div class="more-link">
						詳しくはこちら…
					</div>
					</a>
				</div>
				<div>
					<a href="./service/#support1" class="card-anchor">
					<img src="<?php print wp_upload_dir("2017/08")["url"] . "/main-03.jpg" ?>" alt="">
					<h2>Hug<small>／日常サポート</small></h2>
					<p class="description">鉄瓶は日々使う事で育てるもの。<br>でも少しずつ変わっていく鉄瓶の変化（色、湯垢等）がいいのか悪いのか、
その違いを見分けるのは最初難しいものです。鉄瓶をご愛用いただく中でのお手入れ方法、疑問などに「鉄瓶コンシェルジュ」がお答えします。</p>
					<div class="more-link">
						詳しくはこちら…
					</div>
					</a>
					
				</div>
				<div>
					<a href="./service/#support2" class="card-anchor">
					<img src="<?php print wp_upload_dir("2017/08")["url"] . "/main-04.jpg" ?>" alt="">
					<h2>くむ<small>／楽しむ</small></h2>
					<p class="description">伝統工芸から始まる学び、楽しさ、新しさ。<br>
					伝統が持つ魅力と共に、皆様からのご提案もできる限り取り入れた企画を展開していきたいと思っております。<br>
					様々なご提案をお待ちしております。
					</p>
					<div class="more-link">
						詳しくはこちら…
					</div>		
					</a>
				</div>
			</div>

			<div class="wrap bg100">
				<a href="./product/" class="card-anchor product">
				<img src="<?php print wp_upload_dir("2017/08")["url"] . "/main-05.jpg" ?>" alt="">
				<div class="col">
					<h2><small>初回限定20個</small> みぞれあられ</h2>
					<p>kanakenoの鉄瓶「みぞれあられ」を初回限定20個で発売します。<br>
					南部鉄瓶職人がひとつひとつ手作りで作った鉄瓶に、先着順で001〜020までのシリアルナンバーが刻印されます。</p>
					<div class="more-link">
						詳しくはこちら…
					</div>	
				</div>
				
				</a>
			</div>
			<?php endif; ?>