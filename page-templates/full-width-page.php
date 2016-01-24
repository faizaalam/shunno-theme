<?php
/*
* Template Name: Full Width Page
 * @package WordPress
 * @subpackage Shunno-Theme
 * @since Shunno-Theme 1.0
 */
?>
<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<?php the_post(); ?>
				<article>
				<?php the_content();?>
				</article>
		
		</div><!-- #content -->
	</div><!-- #primary -->

<?php	