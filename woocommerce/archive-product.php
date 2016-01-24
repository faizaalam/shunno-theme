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
  global $post;
  // get categories
  $terms = wp_get_post_terms( $post->ID, 'product_cat' );
  foreach ( $terms as $term ) $cats_array[] = $term->term_id;
  $query_args = array( 'post__not_in' => array( $post->ID ), 'posts_per_page' => 5, 'no_found_rows' => 1, 'post_status' => 'publish', 'post_type' => 'product', 
  	'tax_query' => array( 
    array(
      'taxonomy' => 'product_cat',
      'field' => 'id',
      'terms' => $cats_array
    )));
  $r = new WP_Query($query_args);
		
  if ($r->have_posts()) {
   
            while ($r->have_posts()) : $r->the_post(); global $product; ?>
            <?php if (has_post_thumbnail()) the_post_thumbnail('shop_thumbnail'); else echo '<img src="'. woocommerce_placeholder_img_src() .'" alt="Placeholder" width="'.$woocommerce->get_image_size('shop_thumbnail_image_width').'" height="'.$woocommerce->get_image_size('shop_thumbnail_image_height').'" />'; ?>
    
    
<?php
               $url = 'shop_thumbnail' ;
               ?>
    <div class="large-3 medium-4 small-12 columns span3 store_products" style="background-image: url('<?php echo $url;  ?>');">    
        <a href="<?php the_permalink() ?>" title="<?php echo esc_attr(get_the_title() ? get_the_title() : get_the_ID()); ?>">
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


  
    


}
















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