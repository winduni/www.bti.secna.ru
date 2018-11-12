<?php
/*
Template Name: Деталька новости
*/
get_header(); ?>
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
<br><br><br><br>
<?php get_footer();?>
