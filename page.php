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
		<div id="content" class="site-content" role="main">
			<?php the_post(); ?>
				<article>
					<div class="entry-featured post" >
					<?php the_post_thumbnail(); ?>
					<div class="entry-content content">
						<?php the_content(); ?>
					</div>	
					
					</div>
				</article>
		
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>