<?php
/*
Template Name: Детальки
*/
get_header(); ?>
<?php
  $post = $wp_query->post;
 
  if (in_category('3')) { //ID категории
      include(TEMPLATEPATH.'/single-news.php');
  } elseif (in_category('4')){
      include(TEMPLATEPATH.'/single-advert.php');
  } elseif (in_category('5')){
      include(TEMPLATEPATH.'/single-events.php');
} elseif (in_category('7')){
include(TEMPLATEPATH.'/single-sport.php');
}
  elseif (in_category('8')){
      include(TEMPLATEPATH.'/single-ovfo.php');
  }
  elseif (in_category('9')){
      include(TEMPLATEPATH.'/single-giadiser.php');
  }
  elseif (in_category('11')){
      include(TEMPLATEPATH.'/single-newsprkom.php');
  }
  elseif (in_category('12')){
      include(TEMPLATEPATH.'/single-trud.php');
  }
  elseif (in_category('19')){
      include(TEMPLATEPATH.'/single-newstf.php');
  }
  elseif (in_category('21')) {
      include(TEMPLATEPATH . '/single-newsisf.php');
  }
  elseif (in_category('23')) {
      include(TEMPLATEPATH . '/single-fotogalereya.php');
  }
  elseif (in_category('24')) {
      include(TEMPLATEPATH . '/single-smi.php');
  }
  else {
      include(TEMPLATEPATH.'/single.php');
  }

?>

<?php get_footer();?>
