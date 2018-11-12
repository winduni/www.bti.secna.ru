<?php
/*
Template Name: gia
*/
?>
<?php get_header(); ?>
<div class="row" style="margin-bottom:50px;">
 <div class="container" style="">
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
 <?php endwhile; else: ?> 
 <p>
 <?php _e('  сожалению, такой страницы не существует.'); ?>
 </p> 
 <?php endif; ?>
 </div> 
 <div class="col-md-3" style="padding-right: 0px;margin-top: 10px;">
     <div class="menu_r_main"><i class="fa fa-circle" aria-hidden="true"></i> &nbsp;&nbsp;МЕНЮ</div>
     <div class="menu_r">  <a href="<?php echo home_url();?>/nauka/gos-nauk/">Нормативно-справочная документация </a></div>
     <div class="menu_r" > <a href="<?php echo home_url();?>/nauka/dissertac/">Диссертационный совет</a></div>
     <div class="menu_r"><a href="<?php echo home_url();?>/nauka/dissertac-pred/">Предварительное рассмотрение диссертаций</a></div>
     <div class="menu_r"> <a href="<?php echo home_url();?>/nauka/zachita/">Объявления о защитах диссертаций и полные тексты диссертаций</a></div>
     <div class="menu_r"> <a href="<?php echo home_url();?>/nauka/gos-nauk-video/">Online-трансляция защит диссертационных работ</a></div>
     <div class="menu_r"> <a href="<?php echo home_url();?>//nauka/gos-nauk-video-arh/">Видеоархив заседаний диссертационных советов</a></div>

     <div class="menu_r_main"><i class="fa fa-circle" aria-hidden="true"></i> &nbsp;&nbsp;ССЫЛКИ</div>
     <div class="menu_r"> <a href="http://vak.ed.gov.ru/" target="_blank">Сайт Высшей аттестационной комиссии</a></div>

     <div class="menu_r_main"><i class="fa fa-circle" aria-hidden="true"></i>  &nbsp;&nbsp;Адрес диссертационного совета </div>
     <div class="menu_r_none_link">659305, Россия, Алтайский край, г. Бийск, ул. Трофимова, 27, зд. Б, каб. 220.
E-mail: <a class="anav" href="mailto:shalunov@bti.secna.ru">shalunov@bti.secna.ru</a>
         Телефон: (3854) 43-22-85</div>
     <hr />

 </div>
 </div>
 </div>

<?php get_footer(); ?>