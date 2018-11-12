<?php
/*
Template Name: События
*/
?>
<?php get_header(); ?>
<div class="bread_cr">
<?php
the_breadcrumb();
?>
</div>
<br>
<h4><i class="fa fa-map-o terrakote"></i> 
					<span class="head-h"> Все события</span></h4>

<br>
<div class="row">
<div class="col-md-8">
<?php
$args=array(
'category__in' => 5, //из какой категории вывести (удалите эту строку, если хотите, чтобы показовало последние материалы из всех рубрик сразу)
'showposts'=>10000, //сколько показать статей
'orderby'=>data, //сортировка по дате
'caller_get_posts'=>1);
$my_query = new wp_query($args);
if( $my_query->have_posts() ) { ?>
	
	<?php
while ($my_query->have_posts()) {
$my_query->the_post();
$size == array(50,50);
?>
<a href="<?php echo get_permalink($post->ID); ?>" style="font-size:25px;color:#292c31;">
<?php echo $post->post_title; ?></a>
 <p style="font-size: 14px;color: #818181;"><?php the_date(); ?> </p>
<a href="<?php echo get_permalink($post->ID); ?>"><?php echo get_the_post_thumbnail($id, array(550,550)) ?></a>

 <div style="clear:both;"></div>
 <hr>
</a>

<?php }}
wp_reset_query(); ?>
</div>
<div class="col-md-4">

</div>
</div>
<br><br><br>
<?php get_footer(); ?>
