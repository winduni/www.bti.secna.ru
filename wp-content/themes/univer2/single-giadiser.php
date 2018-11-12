<?php
/*
Template Name: Деталька объявления о защите диссертации
*/
get_header(); ?>
<style>
.block-content img{
    margin:5px;
}
</style>
<div class="bread_cr">
    <a href="http://www.bti.secna.ru">Главная</a> / <a href="http://www.bti.secna.ru/nauka/" rel="category tag">Государственная научная аттестация</a> /
    <a href="http://www.bti.secna.ru/nauka/zachita/" rel="category tag"> Объявления о защитах диссертаций и полные тексты диссертаций</a> </div>

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
