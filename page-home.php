<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Shunno-Theme
 * @since Shunno-Theme 1.0
 */
?>

<?php get_header(); ?>


	
		<div id="content" class="site-content" role="main">
			<?php the_post(); ?>
				<article>
					<div class="entry-featured home" >
					
					<div class="entry-content content" >
						<div class="row  shunno-page">
							<div class="large-4 medium-6 small-12 columns home_news " style="padding-left: 0px !important;">
								<div class="large-12 medium-12 small-12 heading columns" style="padding-left: 0px !important;"><a href="#" >LATEST NEWS</a></div>
								<div class="large-12 medium-12 small-12 left columns latest_news">
								
<?php 
	$query_args = array(
    'post_type' => array('news','events'),
    
   'category_name'=>'events,news',
    'posts_per_page' => 2
  );
  // create a new instance of WP_Query
  $the_query = new WP_Query( $query_args );
?>

<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); // run the loop  
?>
	<div class="latest-news  ">
											<div class="row">
												<a href="<?php echo get_post_permalink(); ?>">
												<div class="small-6 medium-7 large-7 columns thumbnail_latest_news" ><?php  the_post_thumbnail(); ?></div>
												<div class="small-6 medium-5 large-5 columns info">
													<div class="post-title"><a href="<?php echo get_post_permalink(); ?>"><?php echo the_title() ?></a></div>
													<?php if ( in_category( 'news' ) ) { ?>
													<div class="cta"><a href="<?php echo get_post_permalink(); ?>">READ MORE</a></div>
													<?php }

													elseif ( in_category( 'events' ) ) { ?>
													<div class="cta"><a href="<?php echo get_post_permalink(); ?>">BUY TICKETS</a></div>
													<?php  }
													 ?>
												</div>
											</a>
											</div>
											</div>
												<?php endwhile; ?>
					<?php endif; 
					  ?>
											
									    		    
		
							</div>
						</div>
							<div class="large-4 medium-6 small-12 columns home_music " style="padding-right: 0px !important;">
							<div class="large-11 medium-12 small-12 heading columns left" style="padding-left: 2.9em;" ><a href="#" >LATEST RELEASE</a></div>
							<div class="large-12 medium-12 small-12 columns " style="padding-right: 0px !important;">
								<a href="<?php echo get_post_permalink(); ?>">
								<?php 
	$query_args = array(
    'post_type' => 'music',
    'category_name' => 'music',
    'posts_per_page' => 1
  );
  // create a new instance of WP_Query
  $the_query = new WP_Query( $query_args );
?>

<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); // run the loop ?>

<div class="large-11 medium-11 small-12 columns right image"><?php  the_post_thumbnail(); ?>
<div class="post-layout">
	
<div class="link_album left"><a href="<?php echo get_post_meta($post->ID, 'Buy', true); ?>">BUY ALBUM</a></div>
<div class="link_album right"><a href="<?php echo get_post_permalink(); ?>">LISTEN</a></div>
</div>
</div>

												<?php endwhile; ?>
					<?php endif; ?>
	
						</a>
						</div>
					</div>
					</div>	
					
					</div>
				</div>
				</article>
		
	
	</div><!-- #primary -->


<?php get_footer(); ?>


