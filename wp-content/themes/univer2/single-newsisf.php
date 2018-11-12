<?php
/*
Template Name: Новости ИСФ
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
        <div class="col-md-10">
            <h5 style="color:#0162a7;"> <i class="fa fa-caret-right terrakote"></i> <?php the_title();?></h5>
        </div>
        <div class="col-md-2" >
            <div class="text-right grey-fa">
                <?php echo sal_showLikes(); ?>
                <?php if(function_exists('the_views')) { the_views(); } ?>
            </div>
        </div>
        <div style="clear:both;"></div>
	<hr>
		<?php the_content();?>
        <?   // If comments are open or we have at least one comment, load up the comment template.
        //if ( comments_open() || get_comments_number() ) :
      //  comments_template();
       // endif;?>
	<?php endwhile; ?>
</a>
<br><br><br>


<br><br>
<?php get_footer();?>
