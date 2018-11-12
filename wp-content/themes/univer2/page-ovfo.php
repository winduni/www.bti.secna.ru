<?php
/*
Template Name: ovfo
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
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 <h4><i class="fa fa-map-o terrakote"></i> 
					<span class="head-h"> <?php the_title(); ?></span></h4>


     <div class="adress-details wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">

         <?php
         $args=array(
             'category__in' => array( 8 ),
             'showposts'=>8,
             'orderby'=>data,
             'caller_get_posts'=>1);
         $my_query = new wp_query($args);
         if( $my_query->have_posts() ) { ?>

             <?php
             while ($my_query->have_posts()) {
                 $my_query->the_post();
                 $size == array(50,50);
                 ?>

                 <div style="background:#f7f7f7;width: 100%;">
                     <span><i class="fa fa-calendar" aria-hidden="true"></i></span>
                     <div>
                         <div style="padding:15px 5px;">

                             <span><?php the_time('d.m.Y'); ?></span>

                             <a href="<?php echo get_permalink($post->ID); ?>" style="color:#23527c;font-size:14px;">
                                 <?php echo $post->post_title; ?></a>

                         </div>

                     </div>
                 </div>
             <?php }}
         wp_reset_query(); ?>
         <div class="col-md-12 text-right">
             <a href="/advert/"><i class="fa fa-newspaper-o"></i> Архив</a>
         </div>
     </div>
 <?php the_content(); ?>
 <?php endwhile; else: ?> 
 <p>
 <?php _e('К сожалению, такой страницы не существует.'); ?>
 </p> 
 <?php endif; ?>
 </div> </div>


<?php get_footer(); ?>