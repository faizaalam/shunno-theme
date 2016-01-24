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



<?php
  $post = $wp_query->post;
  if (in_category('news')) {
      include(TEMPLATEPATH.'/single_news.php');
  } 
  elseif (in_category('photos')){
      include(TEMPLATEPATH.'/single_photos.php');
  }
  elseif (in_category('events')){
      include(TEMPLATEPATH.'/single_events.php');
  }
  elseif (in_category('music')){
      include(TEMPLATEPATH.'/single_music.php');
  }
  
  else{
      include(TEMPLATEPATH.'/single_default.php');
  }
?>


<?php get_footer();