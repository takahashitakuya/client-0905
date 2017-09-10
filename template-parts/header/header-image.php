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
	
<?php if ( wp_is_mobile() ) :?>
	
<a class="arrow-wrap" href="#content">
<span class="arrow"></span>
</a>	
	<script>

jQuery(window).scroll( function(){

  //get scroll position
  var topWindow = jQuery(window).scrollTop();
  //multipl by 1.5 so the arrow will become transparent half-way up the page
  var topWindow = topWindow * 1.5;
  
  //get height of window
  var windowHeight = jQuery(window).height();
      
  //set position as percentage of how far the user has scrolled 
  var position = topWindow / windowHeight;
  //invert the percentage
  position = 1 - position;

  //define arrow opacity as based on how far up the page the user has scrolled
  //no scrolling = 1, half-way up the page = 0
  jQuery('.arrow-wrap').css('opacity', position);

});
  jQuery('.arrow-wrap').click(function(){
     var toHi = jQuery("#content").offset().top;
   
     jQuery("html,body").animate({scrollTop:toHi},800);
    
     return false;
  });
	</script>
<?php endif;?>		
	
</div><!-- .custom-header -->
