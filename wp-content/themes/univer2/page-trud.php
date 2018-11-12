<?php
/*
Template Name: trud
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
    <?php
    $args=array(
        'category__in' => 12, //из какой категории вывести (удалите эту строку, если хотите, чтобы показовало последние материалы из всех рубрик сразу)
        'showposts'=>10, //сколько показать статей
        'orderby'=>data, //сортировка по дате
        'caller_get_posts'=>1);
    $my_query = new wp_query($args);
    if( $my_query->have_posts() ) { ?>

        <?php
        while ($my_query->have_posts()) {
            $my_query->the_post();
            $size == array(50,50);
            ?>

                <a href="<?php echo get_permalink($post->ID); ?>" class="news-title">
                    <?php echo $post->post_title; ?></a>
                <p class="news-date"><?php the_time('d.m.Y'); ?> </p>
                <a href="<?php echo get_permalink($post->ID); ?>"><?php echo get_the_post_thumbnail($id, array(550,550)) ?></a>
                <?php the_content();?>
                <div class="clear"></div>

                <hr>
                </a>

        <?php }}
    wp_reset_query(); ?>
    <a href="http://www.bti.secna.ru/category/trud/">Архив вакансий</a>
 </div>
     <div class="col-md-3" style="padding-right: 0px; margin-top: 10px;">
         <div class="menu_r"><a href="http://www.vipusk.bti.secna.ru/">Наши выпускники </a></div>
         <div class="menu_r"><a href="http://kcst.bmstu.ru/">Отдел практик и трудоустройства АлтГТУ </a></div>
         <div class="menu_r"><a href="https://kcst.bmstu.ru" target="_blank">Центр содействия трудоустройству </a></div>
         <div class="menu_r"><a href="http://trud22.ru/centres/biysk/"> Центр занятости населения управления социальной защиты населения по городу Бийску, Бийскому и Солтонскому районам</a></div>
         <div class="menu_r_main"><i class="fa fa-circle" aria-hidden="true"></i>  МОНИТОРИНГ</div>
         <div class="menu_r"><a href="http://graduate.edu.ru/#/?year=2014">Мониторинг трудоустройства выпускников </a></div>
         <div class="menu_r_main"><i class="fa fa-circle" aria-hidden="true"></i>  РАБОТОДАТЕЛЮ</div>
         <div class="menu_r"><a href="/trudoustrojstvo-vypusknikov/informatsiya-dlya-rabotodatelej/">Информация для работодателей </a></div>
         <div class="menu_r_main"><i class="fa fa-circle" aria-hidden="true"></i>  ВЫПУСКНИКУ</div>
         <div class="menu_r"><a href="/vyp/doc/Pamjatka%20vypuskniku.PDF"> Памятка выпускнику  </a></div>
         <div class="menu_r"><a href="/vyp/doc/Rezjume.PDF"> Pезюме </a></div>
         <div class="menu_r"><a href="/vyp/doc/Soprovoditel'noe%20pis'mo.PDF"> Сопроводительное письмо </a></div>
         <div class="menu_r"><a href="/vyp/doc/Sostavlenie%20rezjume.PDF">Составление резюме </a></div>
         <div class="menu_r_main"><i class="fa fa-circle" aria-hidden="true"></i>  ОСНОВНЫЕ ПРЕДПРИЯТИЯ-РАБОТОДАТЕЛИ</div>
         <div class="menu_r"><a href="http://www.altayvitamin.ru/"> ЗАО «Алтайвитамины» </a></div>
         <div class="menu_r"><a href="http://frpc.secna.ru/"> АО «ФНПЦ «Алтай» </a></div>
         <div class="menu_r"><a href="http://spmbiysk.ru/"> АО «БПО «Сибприбормаш» </a></div>
         <div class="menu_r"><a href="http://www.abroiler.ru/"> ЗАО «Алтайский бройлер» </a></div>
         <div class="menu_r"><a href="http://www.izs.ru/"> ООО «Инженерные защитные системы» </a></div>
         <div class="menu_r"><a href="http://www.bikz.ru/"> ФКП «Бийский олеумный завод» </a></div>
         <div class="menu_r"><a href="http://www.ipcet.ru/"> ИПХЭТ СО РАН </a></div>
         <div class="menu_r"><a href="http://www.bikz.ru/"> АО «Бийский котельный завод» </a></div>
         <div class="menu_r"><a href="http://mmmontaz.ru/"> ООО «ПМП Металлургмонтаж» </a></div>
         <div class="menu_r"><a href="https://www.evalar.ru/"> ЗАО «Эвалар» </a></div>
         <div class="menu_r"><a href="http://biyskenergo.ru/"> АО «Бийскэнерго» </a></div>
         <div class="menu_r"><a href="https://sa-biysk.ru/"> ЗАО «ПО «Спецавтоматика» </a></div>
         <div class="menu_r"><a href="http://ugsibiri.com/about/struktura/zao-biyskiy-masloekstraktsionyy-zavod/">«Бийский МЭЗ» – ТТП ООО «Юг Сибири»  </a></div>
         <div class="menu_r"><a href="http://terminal-motors.ru/">Автоцентр Терминал-Моторс  </a></div>
         <div class="menu_r_main"><i class="fa fa-circle" aria-hidden="true"></i>  СИСТЕМЫ ПОИСКА ПРЕДЛОЖЕНИЙ О РАБОТЕ</div>
         <div class="menu_r"><a href="http://www.careerjet.ru/%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%B0-%D0%A0%D0%BE%D1%81%D1%81%D0%B8%D1%8F-113677.html"> CAREERJET</a></div>
         <div class="menu_r"><a href="http://biysk.rabota.ru/"> RABOTA.RU</a></div>
         <div class="menu_r"><a href="http://biysk.hh.ru/"> РАБОТА В БИЙСКЕ</a></div>
         <div class="menu_r"><a href="http://altayskiy.rdw.ru/"> РАБОТА ДЛЯ ВАС</a></div>
         <div class="menu_r"><a href="http://biysk.superjob.ru/"> SUPERJOB</a></div>
         <div class="menu_r"><a href="http://bijsk.zarplata.ru/"> ЗАРПЛАТА.РУ</a></div>
         <div class="menu_r"><a href="http://trud22.ru/centres/biysk/vac/"> TRUD22.RU</a></div>
         <div class="menu_r"><a href="https://trudvsem.ru/"> WWW.TRUDVSEM.RU</a></div>
         <img class="img-thumbnail" src="http://www.bti.secna.ru/wp-content/uploads/2018/03/neuvoo.jpg" alt="" original-font-size="13px" original-border-color="" original-background-color="rgb(255, 255, 255)" original-background-image="none" original-color="rgb(51, 122, 183)" original-box-shadow="none" original-text-shadow="none" original-font-family="&quot;Roboto&quot;,sans-serif" original-letter-spacing="0" original-line-height="18.5667px" height="25">
     </div>
 </div>
 </div>

<?php get_footer(); ?>