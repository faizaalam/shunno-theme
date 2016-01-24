
 	
 	<?php get_header(); ?>
 	
 
	 <div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			
				<article>
					
				<div class="entry-content top">
		
	 <?php if (have_posts()) : ?>
	 <?php while (have_posts()) : the_post(); ?>
	 <div class="post">
	 <h2><a href="<?php the_permalink(); ?>">
	 <?php the_title(); ?></a>
	 </h2>
	 <div class="entry-content content">
			<?php the_content(); ?>
	</div>
	 </div>
	 <?php endwhile; ?>
	 <div class="post-nav">
	 <?php posts_nav_link(); ?>
	 </div>
	 <?php endif; ?>
	</div>
</article>
</div>
</div>
	
	 <?php get_footer(); ?>
 