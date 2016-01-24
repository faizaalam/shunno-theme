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
	<div id="primary" class="content-area">
		<div id="content-photos" class="site-content" role="main">
				<article>
					
				<div class="entry-content top">

							<div class="all-news">
								<div class="row full-width collapse">
									
				

	    			
	    	
	    		<?php while (have_posts()) : the_post();
										 ?>
	    		
	    		<?php the_content(); ?>
	    			
	    
	    		<?php endwhile;?>
		</div>	
	</div>
</div>
						<style type="text/css">
						#post-img{
							   width: 100%;
    							height:20vw;
						}
						body{
						  background-color: #222;
						}
						img{
							max-width: 110%;
						}
						.column+.column:last-child, .columns+.column:last-child, .column+.columns:last-child, .columns+.columns:last-child{
							float:none;
						}
						</style>						
				</article>
		</div>
	</div>


<?php get_footer(); ?>