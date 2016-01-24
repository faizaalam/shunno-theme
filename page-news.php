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


	
		<div id="content-news" class="entry-content " role="main">
			
				<article>
					<div class="entry-featured news" >
				
							
							
								<div class="row wrapper-news ">
									<div class="large-12 medium-12 small-12 column news-body">
										<div class="row mid-body">
											<div class="large-7 medium-12 small-12 columns news-post left">
												<h4 style="border-bottom: 1px solid #c1101b;">NEWS</h4>
												
												<div class="row news-list">	
												<?php 
										query_posts('category_name=news');
										while (have_posts()) : the_post(); ?>
									<div class="large-12 medium-12 small-12 columns each_news left">
										
									<a href="<?php echo get_post_permalink(); ?>">
										<div class="newshover1">
											<a href="<?php echo get_post_permalink(); ?>"><h4 class="title"><?php the_title(); ?></h4></a>
											<p><?php echo get_the_date(); ?></p>
											<div class="news-content" >
											<?php the_content(); ?>
										</div>
										</div>
										
						    			
						    			
						    		</a>


<hr>
						    		</div>	
						    		
						    		<?php endwhile;?>
						    		
						    		</div>

											</div>
											<div class="large-5 medium-12 small-12 columns twitter-post ">
												<h4 style="border-bottom: 1px solid #c1101b;">TWITTER</h4>
												<div class="tweet-list"></div>
												<a class="twitter-timeline" data-dnt="true" href="https://twitter.com/maroon5" data-widget-id="639064969967890433">Tweets by @maroon5</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
											</div>
												
										</div>


									</div>
										
						    	</div>	
						    		
										    		
					</div>
				</article>
		
		</div><!-- #content -->
	


<?php get_footer(); ?>