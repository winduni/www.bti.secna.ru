<?php
/*
Template Name: Деталька трудоустройства
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

<div align="right" class="col-md-5  col-md-offset-5">
Понравилась статья? Поделитесь с друзьями
<script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
<script src="//yastatic.net/share2/share.js"></script>
<div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,twitter,telegram"></div>
</div>
<br><br><br><br>
<?php get_footer();?>
