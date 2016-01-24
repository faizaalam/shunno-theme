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
											<div class="large-3 medium-3 small-12 columns  left">
												<h5 class="cat-title">CATEGORIES</h5>
												<?php get_sidebar(); ?>
												
												
											</div>
											<div class="large-9 medium-9 small-12 columns  right">
												<h5 class="item-title">ITEMS</h5>
												
											
														<section id="recent">

    

    <div class=" row woo-products">

        <?php
            $args = array( 'post_type' => 'product', 'stock' => 1,  'orderby' =>'date','order' => 'DESC' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
        <?php   $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
    <div class="large-3 medium-4 small-12 columns span3 store_products" style="background-image: url('<?php echo $url;  ?>');">    
        <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" >
                <div>        
 <div class="row products_info">
 	<div class="large-12 medium-12 small-12">
 <h5><?php the_title(); ?></h5></div>

                       <div class="large-12 medium-12 small-12">
                        	   <span class="price"><?php echo $product->get_price_html(); ?></span>
   </div>
</div>
                         

                </div>           

                        </a>

                        
                    </div><!-- /span3 -->
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>

    </div><!-- /row-fluid -->
</section><!-- /recent -->
										
											</div>
											
										
						    			
						    			
						    		


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