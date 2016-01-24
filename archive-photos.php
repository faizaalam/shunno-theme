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

				<article>
					
				<div class="entry-content top">
							
							<div class="all-news">
								<div class="row collapse full-width album_covers">
									
										<?php 

										query_posts('post_type=photos','category_name=photos');
										while (have_posts()) : the_post(); ?>
									<div class="large-3 medium-3 small-12 columns photo_album_cover">
									
									<a id="image-wrap" href="<?php echo get_post_permalink(); ?>">
										<?php the_post_thumbnail( ); ?>
							 				<div class="overlay red">
			                                 	<div class="text">
			                                 	<h2>
			                                  		 <?php the_title(); ?>
			                              		 </h2>
			                              		</div> 
			                               </div>
									</a>
								
			
						    		</div>	
						    	
						    		<?php endwhile;?>
						    				<div class="small-12 medium-3 large-3 columns cover-pic last">
						    			<div class="yy7">
						    			
						    			<a href="#" id="loadMore" class="menu">LOAD<br>MORE</a>
						    			</div>
						    		</div>

						    		</div>
						    	
						    								    	</div>		
							</div>	
												
				</article>
		
<style type="text/css">

	body{
		background-color: #222;
	}
	li{
		list-style-type: none;
	}

	ul{
		margin-left: 0;
	}
</style>

<?php get_footer(); ?>