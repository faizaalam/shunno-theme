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
			
				<article>
					<div class="entry-featured music " >
					
					
						
						
					<div class="albums">
						<div class="row-about music-album">
						    <div class="small-12 medium-12 large-12 columns">
						    	<div class="row">
						    		
						    		<div class="small-2 medium-1 large-1 columns"><a href="#" class="chevron-l"><i class="fa fa-chevron-left"></i></a></div>
						    	<div   class="small-8 medium-10 large-10 columns">
						    		<div class="row">
						    	<?php 
						    	query_posts('category_name=music');

if ( have_posts() ) {
	$count = 0;
	while ( have_posts() ) {
		the_post(); ?>
		
	
						    	
						    	
						    		<div class="large-3 medium-3 small-3 columns album-cover    album_cover-<?php echo $count+1; ?>    " >
						    			 <?php   $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
   <div style="background-image: url('<?php echo $url;  ?>');" class="album_cover overlay_cover">
			                                  		 
			                              		</div>
						    			
						    			
						    					
						    				
						    				
						    				
						    		</div>	
						    		 
					<?php 
					$count = $count + 1; ?>
					
						    		<?php }

						    	} ?>
						    </div>
						    </div>
						    
<div  class="small-2 medium-1 large-1 columns"><a href="#" class="chevron-r"><i class="fa fa-chevron-right"></i></a></div>
						    
						</div>
						    	<div class="row music-albums">
						    		<?php 
						    	query_posts('category_name=music');

if ( have_posts() ) {
	$count = 0;
	while ( have_posts() ) {
		the_post(); ?>
						    	<div class="large-12 small-12 medium-12 columns audio-player player_no-<?php echo $count+1; ?>">
						    			<div class="musicplayer">
						    				<?php the_content(); ?>
	    			</div>
						    		</div>
						    							
				<?php	$count = $count + 1; ?>
					
						    		<?php }

						    	} ?>
						
						    	</div>
						    
						    	
						    		
						    	
						    	
						    	 
						    	 				  
						    </div>
						</div>

					
				
					</div>	
					</div>
													
					
						
				
				</article>
		
		</div><!-- #content -->



<?php get_footer();
