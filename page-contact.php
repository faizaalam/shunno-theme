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


	
		<div id="content-contact" class="entry-content " role="main">
			
				<article>
					<div class="entry-featured news" >
				
							<?php the_post_thumbnail(); ?>
							
								<div class="row wrapper-contact ">
									<div class="large-12 medium-12 small-12 column contact-body">
													    	
										<div class="row ">
									<div class="large-12 medium-12 small-12  contact-form" >
										<?php formcraft(1); ?>
										</div>
									</div>
									

									</div>
										
						    	</div>	
						    		
										    		
					</div>
				</article>
		
		</div><!-- #content -->
	


<?php get_footer(); ?>