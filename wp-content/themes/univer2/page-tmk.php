<?php
/*
Template Name: tmk
*/
?>
<?php get_header(); ?>

<div class="row">
 <div class="container" style="margin-bottom:50px;">
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
     </div>
     <div class="col-md-3" style="padding-right: 0px;margin-top: 10px;">
         <?php   $id = 4267; $p = get_page($id);$t = $p->post_title;echo apply_filters('the_content', $p->post_content); ?>
     </div>


 <?php endwhile; else: ?> 
 <p>
 <?php _e('К сожалению, такой страницы не существует.'); ?>
 </p> 
 <?php endif; ?>
 </div> </div>

<?php get_footer(); ?>