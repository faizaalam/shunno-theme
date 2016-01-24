<?php
/**
 * The Template for displaying all single products.
 *
 * Override this template by copying it to yourtheme/woocommerce/single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header(); ?>
<div class="entry-featured store" >
										
						
								<div class="row wrapper-store">
									
									<div class="large-12 medium-12 small-12 column store-body">

										
									<section id="recent">

    

    <div class=" row woo-products">
    	
	<?php
		/**
		 * woocommerce_before_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

		<?php while ( have_posts() ) : the_post(); ?>

			    <div  class="container main product-details">

    <div id="hiko" class="row" >
      <div class="large-4 medium-12 small-12 columns">
      <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
        <img src="<?php echo $url ?>" />
      </div>

        <div class="large-5 medium-12 small-12 columns">
        <h1 class="product-title"><?php echo the_title(); ?></h1>
        <h3 class="price"><?php echo $product->get_price_html(); ?></h3>

<!--         <form >
          <p><span class="quantity-text">Quantity</span> <input class="quantity-box" type="text"></p>
          <p><input type="submit" value="Order Now" class="order-btn"></p>
        </form> -->

<?php
  // Availability
  $availability      = $product->get_availability();
  $availability_html = empty( $availability['availability'] ) ? '' : '<p class="stock ' . esc_attr( $availability['class'] ) . '">' . esc_html( $availability['availability'] ) . '</p>';

  echo apply_filters( 'woocommerce_stock_html', $availability_html, $availability['availability'], $product );
?>

<?php if ( $product->is_in_stock() ) : ?>

  <?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>

  <form class="cart" method="post" enctype='multipart/form-data'>
    <?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>
<p id="box_text"> Quantity</p>
    <?php
      if ( ! $product->is_sold_individually() ) {
        woocommerce_quantity_input( array(
          'min_value'   => apply_filters( 'woocommerce_quantity_input_min', 1, $product ),
          'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->backorders_allowed() ? '' : $product->get_stock_quantity(), $product ),
          'input_value' => ( isset( $_POST['quantity'] ) ? wc_stock_amount( $_POST['quantity'] ) : 1 )
        ) );
      }
    ?>

    <input type="hidden" name="add-to-cart" value="<?php echo esc_attr( $product->id ); ?>" />

    <button type="submit" class="single_add_to_cart_button button alt"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>

    <?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
  </form>

  <?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>

<?php endif; ?>






        <p><?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?> </p>
       <!--  <img src="<?php echo $url ?>"> -->
       </div>
         <div class="large-3 medium-12 small-12 columns">

        <?php
  global $product;
 $attachment_ids = $product->get_gallery_attachment_ids();

foreach( $attachment_ids as $attachment_id )
{

  //echo Image instead of URL
  echo wp_get_attachment_image($attachment_id, 'full');
}
?>
      </div>

    </div>
  </div>

		<?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

<!-- 	<?php
		/**
		 * woocommerce_sidebar hook
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action( 'woocommerce_sidebar' );
	?>
	 -->
</div>
</section><!-- /recent -->
										
					

											</div>
											
												
										</div>


									</div>
										
						
						    		
										    		
				
				
<?php get_footer( ); ?>
