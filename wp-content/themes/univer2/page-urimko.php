<?php
/*
Template Name: urimko
*/
?>
<style>
.news-umd {
	border: 1px solid #e8ecf3;
	box-shadow: 3px 3px 5px #c5c2be;
	margin-top: 8px;
	text-align: justify;
	font-size: 13px;
}
.news-umdtext {
	margin-left: 20px;
	border-left: 5px solid #e38c62;
	padding: 5px 5px 5px 10px;
 }
.news-umd:befor{
	content: '';
		
}
.umdtext {
	margin-top: 5px;
	border: 1px solid #e8ecf3;
	border-left-width: 3px;
	border-left-color: #5075c0;
	padding: 3px 5px 3px 10px;
	text-align: justify;
 }
table {
	width: 100%;
	border-style: 1px solid #B3B3B3;
	border-color: #DDD #DDD #DDD -moz-use-text-color;
	border-image: none;
	moz-border-radius: 1px;
	border-collapse: collapse;
	
}
tbody {
	line-height: 20px;
	align: center;
}
td {
	border:1px solid #B3B3B3;
	color:#7a6666;
	font-size:13px;
	margin:0;
	padding: 2px;
	text-align: center;
	vertical-align: center;
}
ul.ul-umd {
	list-style-type: none;
	list-style-type:
	margin-left: 20px;
	padding-left: 20px;
}
</style>

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
 <?php endif;
 if (is_page ('umd')){
 ?>
    <div class="row" style="margin-top: 15px; margin-left: 20px;">
        <h4>Контакты</h4>
    </div>
    <div class="row">
        <div class="adress-details wow fadeInLeft animated" data-wow-delay="0.3s"
             style="visibility: visible; animation-delay: 0.3s;">
            <div>
                <span><i class="fa fa-location-arrow"></i></span>
                <p></p>
                <div><strong>АДРЕС</strong><br>659305, Россия, Алтайский край, г. Бийск, ул. Трофимова, д. 27, каб. 215Б
                    (219Б, 219/1 Б)
                </div>
                <p></p></div>
            <div>
                <span><i class="fa fa-phone"></i></span>
                <p></p>
                <div>(3854) 43-53-17, 43-53-19</div>
                <p></p></div>
            <div>
                <span><i class="fa fa-clock-o"></i></span>
                <p></p>
                <div>Пн — Чт: с 8:00 до 17:00, Пт: с 8:00 до 16:00<br>Перерыв: с 12:00 до 12:48</div>
                <p></p></div>
            <p></p></div>
        <p></p>
        <div class="adress-details wow fadeInLeft animated" data-wow-delay="0.3s"
             style="visibility: visible; animation-delay: 0.3s;">
            <div>
                <span><i class="fa fa-user"></i></span>
                <p></p>
                <div>Начальник отдела учебной работы и менеджмента качества образования:<br>
                    <b>Тушкина Татьяна Михайловна</b><br>
                    <a href="mailto:tushkina.tm@bti.secna.ru">tushkina.tm@bti.secna.ru</a></div>
                <p></p></div>

            <p></p></div>
        <p></p></div>

     <?
     }
     ?>
</div>



     <div class="col-md-3" style="padding-right: 0px;margin-top: 10px;">
         <div class="menu_r_main"><i class="fa fa-circle" aria-hidden="true"></i> &nbsp;&nbsp;ОТДЕЛ  УРиМКО</div>
			<div class="menu_r">  <a href="<?php echo home_url();?>/education/uchebno-organizatsionnaya-deyatelnost/otdel-urimko/">Направления деятельности отдела<p></p>Сотрудники отдела</a></div>
			<div class="menu_r_main"><i class="fa fa-circle" aria-hidden="true"></i> &nbsp;&nbsp;УЧЕБНЫЕ ПЛАНЫ ФГОС</div>
			<div class="menu_r">  <a href="http://portal.bti.secna.ru/vn_docum/ucheb_docs/Разработчикам%20УП" target="_blank">Разработчикам УП </a></div>
			<div class="menu_r">  <a href="http://www.imtsa.su" target="_blank">Программное обеспечение GosInsp<br> <span style="font-size: 11px;"> (cайт "Интеллект")</span> </a></div>
			<div class="menu_r">  <a href="<?php echo home_url();?>/education/umd/uchebnye-plany-fgos/"><b>Учебные планы по направлениям подготовки, специальностям</b> </a></div>
			<div class="menu_r">  <a href="<?php bloginfo('template_url'); ?>/umd/kod_kafedr_up.xlsx">Коды кафедр для УП </a></div>
			<div class="menu_r">  <a href="<?php echo home_url();?>/education/umd/arhiv-uchebnyh-planov/">Архив учебных планов</a></div>
		 <div class="menu_r_main"><i class="fa fa-circle" aria-hidden="true"></i> &nbsp;&nbsp;УЧЕБНО-ОРГАНИЗАЦИОННАЯ ДОКУМЕНТАЦИЯ</div>
			<div class="menu_r">  <a href="<?php echo home_url();?>/education/umd/perechen-oop/">Перечень основных образовательных программ </a></div>
			<div class="menu_r">  <a href="http://db.biysk.secna.ru/umkr/view_umkr.stat">Учебно-организационная и методическая обеспеченность ООП </a></div>
			<div class="menu_r">  <a href="http://portal.bti.secna.ru/vn_docum/ucheb_docs/Календарные%20учебные%20графики" target="_blank">Календарные учебные графики по направлениям подготовки на 2018-2019 учебный год </a></div>
			<div class="menu_r">  <a href="http://portal.bti.secna.ru/vn_docum/ucheb_docs/Cеместровые%20учебные%20планы/!Cеместровые%20учебные%20планы%202018-2019%20(очная,%20очно-заочная,%20заочная%20формы%20обучения)" target="_blank">Семестровые учебные планы на 2018-2019 учебный год </a></div>
			<div class="menu_r">  <a href="<?php echo home_url();?>/education/metodicheskaya-deyatelnost/" target="_blank">Методическая документация </a></div>
		<div class="menu_r_main"><i class="fa fa-circle" aria-hidden="true"></i> &nbsp;&nbsp;РАСПИСАНИЕ</div>
			<div class="menu_r">  <a href="http://www.bti.secna.ru/students/rasp/" target="_blank">Расписание занятий, зачетов, экзаменов </a></div>
			<div class="menu_r">  <a href="<?php bloginfo('template_url'); ?>/umd/Polozhenie-o-raspisaniyah-uchebnyh-zanyatij-ekzamenov-i-zachetov.doc">Положение о расписаниях учебных занятий, экзаменов и зачетов по образовательным программам высшего образования </a></div>
			<div class="menu_r">  <a href="<?php bloginfo('template_url'); ?>/umd/rasp-R-19_23.05.16_o_promezhutochnoy_attestatsii_v_forme_zacheta.pdf">Распоряжение о промежуточной аттестации студентов в форме зачета </a></div>
			<div class="menu_r">  <a href="http://portal.bti.secna.ru/vn_docum/ucheb_docs/Перечень%20факультативов" target="_blank">Перечень факультативов </a></div>
			<div class="menu_r">  <a href="http://portal.bti.secna.ru/vn_docum/ucheb_docs/Итоги%20сессии" target="_blank">Итоги сессии  </a></div>
		<div class="menu_r_main"><i class="fa fa-circle" aria-hidden="true"></i> &nbsp;&nbsp;КОНТИНГЕНТ</div>
			<div class="menu_r">  <a href="http://portal.bti.secna.ru/vn_docum/ucheb_docs/КОНТИНГЕНТ%20СТУДЕНТОВ" target="_blank">Контингет студентов по всем формам обучения </a></div>
			<div class="menu_r">  <a href="http://portal.bti.secna.ru/vn_docum/ucheb_docs/КОНТИНГЕНТ%20СТУДЕНТОВ/ВПО-1%20-%20Сведения%20об%20образовательной%20организации/ВПО-1%20на%2001.10.2018%20г.%20-%20Сведения%20об%20образовательной%20организации,%20осуществляющей%20образовательную%20деятельность%20по%20образовательным%20программам%20высшего%20образования" target="_blank"><b>ВПО-1 на 01.10.2018</b> - Сведения об образовательной организации, осуществляющей образовательную деятельность по образовательным программам высшего образования </a></div>
		<div class="menu_r_main"><i class="fa fa-circle" aria-hidden="true"></i> &nbsp;&nbsp;ПРАКТИКА</div>
			<div class="menu_r">  <a href="http://portal.bti.secna.ru/vn_docum/ucheb_docs/ПРАКТИКА" target="_blank">Бланки, макеты, образцы документов </a></div>
			<div class="menu_r">  <a href="http://portal.bti.secna.ru/vn_docum/ucheb_docs/ПРАКТИКА/Программы_практик" target="_blank">Программы практик </a></div>
		<div class="menu_r_main"><i class="fa fa-circle" aria-hidden="true"></i> &nbsp;&nbsp;ГОСУДАРСТВЕННАЯ ИТОГОВАЯ АТТЕСТАЦИЯ</div>
			<div class="menu_r">  <a href="http://portal.bti.secna.ru/vn_docum/ucheb_docs/ГОСУДАРСТВЕННАЯ%20ИТОГОВАЯ%20АТТЕСТАЦИЯ" target="_blank" >Образцы документов, отчеты </a></div>
			<div class="menu_r">  <a href="http://portal.bti.secna.ru/vn_docum/ucheb_docs/ГОСУДАРСТВЕННАЯ%20ИТОГОВАЯ%20АТТЕСТАЦИЯ/Программы_ГИА" target="_blank">Программы ГИА - бакалавриат, специалитет, магистратура </a></div>
			<div class="menu_r">  <a href="<?php echo home_url();?>/students/rasp/raspisanie-attestatsionnyh-ispytanij/" target="_blank">Расписание ГИА </a></div>
		<div class="menu_r_main"><i class="fa fa-circle" aria-hidden="true"></i> &nbsp;&nbsp;ПЛАНИРОВАНИЕ</div>
			<div class="menu_r">  <a href="http://portal.bti.secna.ru/vn_docum/ucheb_docs/КАЛЕНДАРНЫЙ%20ГРАФИК%20ПЛАНИРОВАНИЯ%20И%20ОРГАНИЗАЦИИ%20УЧЕБНОГО%20ПРОЦЕССА" target="_blank">Календарный график планирования и организация учебного процесса </a></div>
			<div class="menu_r">  <a href="http://portal.bti.secna.ru/vn_docum/ucheb_docs/ПЛАНИРОВАНИЕ" target="_blank">Планирование на 2018-2019 учебный год </a></div>
	 
	 </div>
 </div>
 </div>
 <script type="text/javascript" src="http://ajax.microsoft.com/ajax/jQuery/jquery-1.11.0.min.js"></script>

<?php get_footer(); ?>