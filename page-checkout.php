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

$pfx_date = get_the_date( 'F j, Y');
?>

<?php get_header(); ?>


	
		<div id="content-store" class="entry-content " role="main">
			
				<article>
					<div class="entry-featured store" >
										
						
								<div class="row wrapper-store">
									
									<div class="large-12 medium-12 small-12 column store-body">

										<div class="row mid-body">

											
										<?php 
										
										while (have_posts()) : the_post(); ?>
						    			
						    			<?php the_content(); ?>
						    				<?php endwhile;?>
						    		


						    		</div>	
						    		
						 
						    		</div>

											</div>
											
												
										</div>


									</div>
										
						    	</div>	
						    		
										    		
					</div>
				</article>
		
		</div><!-- #content -->
	


<?php get_footer(); ?>