<?php
/*
Template Name: base
*/
?>
<?php get_header(); ?>
    <style>
        .block-content img{
            margin:5px;
        }
    </style>
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
 <?php the_content(); ?>
 <?php endwhile; else: ?> 
 <p>
 <?php _e('  сожалению, такой страницы не существует.'); ?>
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