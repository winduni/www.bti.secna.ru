<?php
/*
Template Name: abitur
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
         <?
         $uri = $_SERVER['REQUEST_URI'];
         if($uri == '/abitur/'){
         ?>

         <div class="posts">
             <br>

             <h4><i class="fa fa-map-o terrakote" ></i>
                 <span class="head-h">НОВОСТИ</span></h4>


             <style>
                 .service-item img{
                     width:100% !important;
                     height:150px !important;
                 }
                 .ei11{
                     color:#337ab7 !important;
                 }
                 .ei11:hover{
                     text-decoration: underline;
                 }
             </style>
             <div class="row services neves-o">
                 <?php
                 $args=array(
                     'category__in' => array( 11 ),
                     'exclude' => 17940,
                     'showposts'=>10,
                     'orderby'=>data, //сортировка по дате
                     'caller_get_posts'=>1);
                 $my_query = new wp_query($args);
                 if( $my_query->have_posts() ) { ?>

                     <?php
                     while ($my_query->have_posts()) {
                         $my_query->the_post();
                         $size == array(50,50);
                         ?>

                         <div class="service-item col-xs-12  col-sm-6  col-md-4 col-lg-4 wow zoomIn news" data-wow-delay="0.3s" style="width: 23%;">
                             <a href="<?php echo get_permalink($post->ID); ?>"><?php
                                 //echo get_the_post_thumbnail($id, array(9999,150))
                                 if ( has_post_thumbnail() ): // если миниатюра есть
                                     the_post_thumbnail($id, array(9999,150)); // выводим ее
                                 else:?>
                                     <img src="<?php bloginfo('template_url'); ?>/img/no-img.jpg" width="100%" alt="Новости института">
                                 <?endif;


                                 ?></a>
                             <span class="news-date"><?php the_time('d.m.Y'); ?></span>
                             </a>
                             <a href="<?php echo get_permalink($post->ID); ?>" class="news-title">
                                 <?php trim_title_chars(135, '...'); ?></a>

                         </div>
                     <?php }}
                 wp_reset_query(); ?>


             </div>
             <div class="col-md-12 text-right" style="padding-bottom:10px;">
                 <a href="/news/" style="color:#666"><i class="fa fa-newspaper-o"></i> Все новости</a>
             </div>

         </div>
         <?}?>
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 <h4><i class="fa fa-map-o terrakote"></i> 
					<span class="head-h"> <?php the_title(); ?></span></h4> 
 <?php the_content(); ?>
     </div>
     <div class="col-md-3" style="padding-right: 0px;margin-top: 10px;">
         <?php   $id = 4901; $p = get_page($id);$t = $p->post_title;echo apply_filters('the_content', $p->post_content); ?>
     </div>


 <?php endwhile; else: ?> 
 <p>
 <?php _e('К сожалению, такой страницы не существует.'); ?>
 </p> 
 <?php endif; ?>
 </div> </div>
    <script type="text/javascript" src="http://ajax.microsoft.com/ajax/jQuery/jquery-1.11.0.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $(".hider").click(function(){
                $("#hidden").slideToggle("slow");
                return false;
            });
            $(".hider1").click(function(){
                $("#hidden1").slideToggle("slow");
                return false;
            });
            $(".hider2").click(function(){
                $("#hidden2").slideToggle("slow");
                return false;
            });
            $(".hider3").click(function(){
                $("#hidden3").slideToggle("slow");
                return false;
            });
            $(".hider4").click(function(){
                $("#hidden4").slideToggle("slow");
                return false;
            });
            $(".hider5").click(function(){
                $("#hidden5").slideToggle("slow");
                return false;
            });
            $(".hider6").click(function(){
                $("#hidden6").slideToggle("slow");
                return false;
            });
            $(".hider7").click(function(){
                $("#hidden7").slideToggle("slow");
                return false;
            });
        });
    </script>
<?php get_footer(); ?>