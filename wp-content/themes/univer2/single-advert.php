<?php
/*
Template Name: Деталька-объявления
*/
get_header(); ?>
<style>
    .block-content img{
        margin:5px;
    }
</style>
<div class="bread_cr">
    <?php
    the_breadcrumb();
    ?>
</div>
<hr>
<?php while (have_posts()): the_post();?>
    <h5 style="color:#0162a7;"> <i class="fa fa-caret-right terrakote"></i> <?php the_title();?></h5>
    <hr>
    <?php the_content();?>

<?php endwhile; ?>
</a>
<br><br><br>

<?php get_footer();?>

