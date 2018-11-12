<?php
/*
Template Name: trud11
*/
?>
<?php get_header(); ?>
<div class="row" style="margin-bottom:50px;">
 <div class="container" style="">
     <div class="bread_cr">
         <?php
         if(function_exists('bcn_display'))
         {
             bcn_display();
         }
         ?>
     </div>
<div class="col-md-9">
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 <h4><i class="fa fa-map-o terrakote"></i> 
					<span class="head-h"> <?php the_title(); ?></span></h4> 
 <?php the_content(); ?>
 <?php endwhile; else: ?> 
 <p>
 <?php _e('  сожалению, такой страницы не существует.'); ?>
 </p> 
 <?php endif; ?>
 </div>
     <div class="col-md-3" style="padding-right: 0px;margin-top: 10px;">
         <?php   $id = 12140; $p = get_page($id);$t = $p->post_title;echo apply_filters('the_content', $p->post_content); ?>
     </div>
 </div>
 </div>

<?php get_footer(); ?>