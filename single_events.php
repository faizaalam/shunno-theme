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


	
		<div id="content-events" class="entry-content " role="main">
			
				<article>
					<div class="entry-featured news" >
				
							
							
								<div class="row wrapper-events ">
									<div class="large-12 medium-12 small-12 column events-body">
										<div class="row mid-body">
											<div class="large-12 medium-12 small-12 columns events-post left">

												<h4 style="border-bottom: 1px solid #c1101b;">EVENTS</h4>
												
												<div class="row events-list">	

												<?php 
										
										while (have_posts()) : the_post(); ?>

									
										
									
										<div class="events-count large-12 medium-12 small-12 columns left">
										
											<div class="large-6 medium-6 small-6 columns no-padding"><h4 class="title"><?php the_title(); ?></h4></div>
											<div class="large-6 medium-6 small-6 columns right no-padding"><span class="post_link ">
<?php previous_post_link('%link', '  Previous Event &raquo; &raquo;',   TRUE); ?> </span>
<span class="post_link "><?php next_post_link('%link', ' &laquo; &laquo; Next Event',TRUE); ?> </span></div>
											<div class="large-12 medium-12 small-12 columns  no-padding"><p><?php echo get_the_date(); ?></p></div>
											
											<div class="each_event_thumbnail"><?php the_post_thumbnail(); ?></div>
										<div class="large-7 medium-12 small-12 columns each_events left">
											<?php the_content(); ?>
<div class="post-meta">
		<h4>Location: <span><?php echo get_post_meta($post->ID, 'Location', true); ?></span></h4>
		<h4>Date: <span><?php echo get_post_meta($post->ID, 'Date', true); ?></span></h4>
	</div>
										</div>
										<div class="large-12 medium-12 small-12 columns " style="padding-left:0px !important;">
											<a href="<?php echo get_post_meta($post->ID, 'Buy', true); ?>" class="button events">BUY TICKET</a>
										</div>
									
										

											</div>	

  
                           

											

										
						    			
						    			
						    		


						    		
						    		
						    		<?php endwhile;?>
						    		</div>

											</div>
											
												
										</div>


									</div>
										
						    	</div>	
						    		
										    		
					</div>
				</article>
		
		</div><!-- #content -->
	


<?php get_footer(); ?>