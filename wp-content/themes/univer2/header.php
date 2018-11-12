<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/img/ico.png" type="image/x-icon">

    <?php wp_head(); ?>
</head>
<style>
    .main-menu, .ttt{
        display: none;
    }

    .ttt:before{
        background: #fff;
    }

    @media (max-width: 600px){
        #menu-open{
            display: block !important;
            padding-left: 20px;
        }
        .main-menu-lg{
            display: none;
        }
        #menu-close{
            bottom:18px;
        }
        .services div {
            min-height: 230px;
        }
        .ttt{
            display: block;
        }
        .dropdown-menu>li>a{
            white-space:normal;
        }
    }
</style>
<body>
<div class="sp-body">

    <header id="this-is-top">
        <div class="container-fluid">
            <a id="menu-open" href="#"><i class="fa fa-bars"></i></a>

            <!-------MOBILE-------->
            <div class="topmenu row ttt" >

                <nav class="text-right col-xs-1 col-xs-offset-8 hiddend-lg hiden-sm hidden-lm temp-xs">

                    <iframe src="http://bti.secna.ru/web-thermo/index.shtml" scrolling="auto" frameborder="0" width=100px></iframe>
                </nav>

                <nav class="text-right col-xs-4 hiddend-lg hiden-sm hidden-lm rasp-xs">
                    <a href="/students/rasp/" style="font-size:8px"> Расписание</a>
                </nav>

                <!--nav class="text-right col-xs-4 hiddend-lg hiden-sm hidden-lm old-version-xs">
                    <a href="http://db.biysk.secna.ru/schedule/test.rasp_ind2?cury=2017&cursem=2" style="font-size:8px;margin-left: 0;">Старая версия</a>
                </nav-->

            </div>
            <!-------END MOBILE---11----->



            <div class="topmenu row hidden-xs">
                <nav class="col-sm-offset-3 col-md-offset-4 col-lg-offset-4 col-sm-4 col-md-4 col-lg-4 hidden-xs visible-for-ses">
                    <a href="<?php echo home_url();?>/students/rasp/">РАСПИСАНИЕ</a>
                    <a href="https://webmail.bti.secna.ru">WEB-ПОЧТА</a>
                    <a href="http://portal.bti.secna.ru">ВНУТРЕННИЙ ПОРТАЛ</a>

                </nav>

                <nav class="text-right col-sm-1 col-md-1 col-lg-1 hidden-xs" style="color:#fff;font-size: 12px">
                    <?//php include "web-thermo/data"; ?> <!--sup>o</sup>C</nav-->

                    <iframe src="/web-thermo/index.shtml" scrolling="auto" frameborder="0" width=100px>

                    </iframe>
                </nav>





                <nav class="text-right col-sm-2 col-md-2 col-lg-2 hidden-xs hidden-visible-eye">
                    <!--a href="http://old.bti.secna.ru"> старая версия сайта</a-->
                </nav>
                <nav class="text-right col-sm-1 col-md-1 col-lg-1 hidden-xs hidden-visible-eye" style="color:#fff">
                    <? if (is_user_logged_in())  {?>
                        <a href="<?php echo wp_logout_url(); ?>"><i class="fa fa-sign-out" aria-hidden="true"></i> ВЫЙТИ</a>
                    <? }
                    else {?>
                        <a href="<?php echo home_url();?>/wp-admin/"><i class="fa fa-sign-in" aria-hidden="true"></i> ВОЙТИ</a>
                    <? }
                    ?>

                </nav>
            </div>



            <div class="row header">
                <div class="col-sm-4 col-md-4 col-lg-4 head-lg" style="padding-bottom:10px;">
                    <a href="<?php echo home_url();?>" style="color: #292c31;text-decoration: none"><img src="<?php bloginfo('template_url'); ?>/img/logotip.png" align=left style="padding-right:10px;width:65px;"> <h4 style="margin-bottom:0px;">Бийский <br>технологический <br>институт</h4> <small>(филиал) ФГБОУ ВО
                        «Алтайский государственный технический университет им. И.И. Ползунова»</small></a>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 head-xs" style="padding-bottom:10px;">
                    <a href="<?php echo home_url();?>"><img src="<?php bloginfo('template_url'); ?>/img/logotip.png" align=left style="padding-right:10px;width:45px;"></a>
                    <h4 style="margin-bottom:0px;font-size:12px;text-align: left;"><br>Бийский технологический институт <small style="text-align: left;">(филиал) ФГБОУ ВО
                            «Алтайский государственный технический университет им. И.И. Ползунова»</small></h4>
                </div>
                <div class="col-sm-8 col-md-8 col-lg-8 head-lg">
                    <div class="text-right header-padding">
                        <div class="h-block"><span>ПРИЕМНАЯ КОМИССИЯ</span>+7 (3854) 43-22-55 </div>
                        <div class="h-block"><span>ПРИЕМНАЯ ДИРЕКТОРА</span>+7 (3854) 43-22-85  </div>
                        <div class="h-block"><span>EMAIL</span>info@bti.secna.ru</div>
                        <!--div class="h-block hidden-x hidden-visible-eye " style="padding: 0px 0px 0px 45px;text-align: right;    height: 40px;">
                            <span style="margin-top: -6px;"> <?php get_search_form(); ?></span>
                        </div-->

                        <div class="h-block hidden-x hidden-visible-eye" >
                            <a style="color: #000;font-size: 15px;text-transform: uppercase;" itemprop="Copy" href="#" class="bt_widget-vi-on" original-font-size="15px" original-border-color="" original-background-color="rgb(255, 255, 255)" original-background-image="none" original-color="rgb(0, 0, 0)" original-box-shadow="rgba(0, 0, 0, 0.14) 0px -1px 0px 0px inset" original-text-shadow="rgba(0, 0, 0, 0.12) 1px 1px 0px" original-font-family="arial" original-letter-spacing="0px" original-line-height="15px">
                                <i class="fa fa-eye" aria-hidden="true"></i>  Версия для слабовидящих</a>
                            <?php get_search_form(); ?>
                        </div>

                    </div>						</div>
            </div>
            <div id="main-menu-bg"></div>

            <!-------MOBILE-------->
            <nav class="main-menu navbar-main-slide">
                <ul class="nav navbar-nav navbar-main">
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle border-hover-color1" href="" aria-expanded="false">сведения об образовательной организации <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="/sveden/common/">Основные сведения</a></li>
                            <li><a href="/sveden/struct">Структура и органы управления образовательной организацией</a></li>
                            <li><a href="/sveden/document/">Документы</a></li>
                            <li><a href="/sveden/education/">Образование</a></li>
                            <li><a href="/sveden/eduStandarts/"> Образовательные стандарты</a></li>
                            <li><a href="/sveden/employees/">Руководство. Научно-педагогический состав</a></li>
                            <li><a href="/sveden/objects/"> Материально-техническое обеспечение и оснащенность образовательного процесса</a></li>
                            <li><a href="/sveden/grants/"> Стипендии и иные виды материальной поддержки</a></li>
                            <li><a href="/sveden/paid_edu/">Платные образовательные услуги</a></li>
                            <li><a href="/sveden/budget/">Финансово-хозяйственная деятельность</a></li>
                            <li><a href="/sveden/vacant/">Вакантные места для приема (перевода)</a></li>
                            <li><a href="http://old.bti.secna.ru/cecutient/index_spec.shtml">Версия официального сайта для слабовидящих</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-main">
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle border-hover-color1" href="" aria-expanded="false">ОБЩАЯ ИНФОРМАЦИЯ <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li> <a href="<?php echo home_url();?>/sveden/">Сведения об образовательной организации</a></li>
                            <li><a href="<?php echo home_url();?>/uchsov">Ученый совет</a></li>
                            <li><a href="<?php echo home_url();?>/sveden/struct/">Структура и органы управления образовательной организацией</a></li>
                            <li><a href="http://old.bti.secna.ru/total/sprav.doc">Телефонный справочник</a></li>
                            <li> <a href="<?php echo home_url();?>/fotogalereya/">Фотогалерея</a></li>
                            <li><a href="<?php echo home_url();?>/videoarhiv/">Видеоархив</a></li>
                            <li><a href="http://old.bti.secna.ru/total/history.shtml">История</a></li>
                            <li><a href="http://old.bti.secna.ru/smi/zag.shtml">СМИ о нас</a></li>
                            <li><a href="<?php echo home_url();?>/karta-korpusov/">Карта корпусов</a></li>
                            <li><a href="<?php echo home_url();?>/protivodeystviye-korruptsii/">Противодействие коррупции </a></li>
                            <li><a href="<?php echo home_url();?>/protivodejstvie-ekstremistskoj-deyatelnosti-i-terrorizmu/">Противодействие экстремистской деятельности и терроризму </a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-main">
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle border-hover-color1" href="" aria-expanded="false">ОБРАЗОВАНИЕ <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo home_url();?>/sveden/education/umd/perechen-oop/">Основные образовательные программы</a>
                            </li>
                            <li><a href="<?php echo home_url();?>/sveden/struct/tsentr-dopolnitelnogo-professionalnogo-obrazovaniya/">Дополнительное образование</a></li>
                            <li><a href="http://www.bti.secna.ru/sveden/education/obrazovanie-dlya-invalidov-i-lits-s-ogranichennymi-vozmozhnostyami-zdorovya/">Образование для инвалидов и лиц с ОВЗ </a></li>
                            <li><a href="<?php echo home_url();?>/sistema-menedzhmenta-kachestva/">Система менеджмента качества</a></li>
                            <li><a href="<?php echo home_url();?>/sveden/education/umd/">Учебно-организационная деятельность</a></li>
                            <li><a href="<?php echo home_url();?>/sveden/education/metodicheskaya-deyatelnost/">Методическая деятельность</a></li>
                            <li><a href="<?php echo home_url();?>/nauchno-metodicheskij-sovet/">Научно-методический совет</a></li>
                            <li><a href="http://eios.bti.secna.ru/">ЭИОС</a></li>
                            <li><a href="https://student.altstu.ru/login/">Личный кабинет студента</a></li>
                            <li><a href="http://db.biysk.secna.ru/schedule/schedule.lk_pps.auth">Личный кабинет сотрудника </a></li>
                            <li> <a href="http://teacher.altstu.ru/auth/login/">Личный кабинет преподавателя</a></li>
                            <li><a href="http://db.biysk.secna.ru/graduate/postgrad.form_login">Личный кабинет аспиранта </a></li>
                            <li><a href="<?php echo home_url();?>/students/rasp/">Расписание занятий| сессии | <a href="http://www.bti.secna.ru/students/rasp/raspisanie-attestatsionnyh-ispytanij/">аттестационных испытаний</a></li>
                            <li><a href="http://irbis.bti.secna.ru/irbis64r_12/index.html">Электронные библиотеки </a></li>
                            <li><a href="http://old.bti.secna.ru/education/smq/fepo24.shtml">Тестирование ФЭПО </a></li>
                            <li><a
                                        href="http://old.bti.secna.ru/education/smq/diag_test_16_17.shtml">Диагностическое тестирование студентов-первокурсников </a></li>
                        </ul>
                    </li>

                </ul>
                <ul class="nav navbar-nav navbar-main">
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle border-hover-color1" href="" aria-expanded="false">НАУКА <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo home_url();?>/nauchno-issledovatelskaya-rabota/">Научно-исследовательская деятельность</a></li>
                            <li><a href="<?php echo home_url();?>/nauka/">Государственная научная аттестация</a></li>
                            <li><a href="<?php echo home_url();?>/aspirantam/">Подготовка кадров высшей научной квалификации</a></li>
                        </ul>
                    </li>

                </ul>
                <ul class="nav navbar-nav navbar-main">
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle border-hover-color1" href="" aria-expanded="false">ПОСТУПАЮЩЕМУ <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo home_url();?>/abitur/">Приемная кампания 2019 </a></li>
                              <li><a href="http://www.bti.secna.ru/perechen-spetsialnostej-i-napravlenij-podgotovki-po-kotorym-obyavlyaetsya-priyom-na-obuchenie-s-ukazaniem-uslovij-postupleniya/">Направления подготовки (специальности)</a></li>
                            <li><a href="<?php echo home_url();?>/dovuzovskaya-podgotovka/">Довузовская подготовка </a></li>
                            <li><a href="<?php echo home_url();?>/podgotovitelnye-kursy/">Подготовительные курсы</a></li>
                            <li><a href="#">Задать вопрос</a></li>
                        </ul>
                    </li>

                </ul>
                <ul class="nav navbar-nav navbar-main">
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle border-hover-color1" href="" aria-expanded="false">СТУДЕНТУ <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo home_url();?>/students/rasp/"> Расписание занятий и сессии</a></li>
                            <li><a href="http://old.bti.secna.ru/students/rasp_gai">аттестационных испытаний</a></li>
                            <li><a href="https://student.altstu.ru/login/"> Личный кабинет студента</a> </li>
                            <li><a href="http://db.biysk.secna.ru/graduate/postgrad.form_login">Личный кабинет аспиранта</a></li>
                            <li><a href="http://eios.bti.secna.ru/"> Электронные ресурсы ЭБС</a></li>
                            <li><a href="http://www.i-exam.ru/"> Интернет-тренажеры</a></li>
                            <li><a href="http://portal.bti.secna.ru/vn_docum/ucheb_docs/Перечень%20факультативов"> Факультативные дисциплины</a></li>
                            <!--<li><a href="http://old.bti.secna.ru/students/diplom.shtml"> Дипломирование</a></li>-->
                            <li><a href="<?php echo home_url();?>/vneuchebnaya-i-vospitatelnaya-deyatelnost/"> Внеучебная и воспитательная деятельность</a></li>
                            <li><a href="<?php echo home_url();?>/sveden/struct/profkom-studentov/"> Профсоюз студентов</a></li>
                            <li><a href="<?php echo home_url();?>/sport-v-institute/"> Спорт в институте</a></li>
                            <li><a href="<?php echo home_url();?>/sveden/grants/"> Стипендии и иные виды материальной поддержки</a></li>
                            <li><a href="<?php echo home_url();?>/sveden/paid_edu/"> Платные образовательные услуги</a></li>
                            <li><a href="<?php echo home_url();?>/sveden/grants/informatsiya-ob-obshhezhitii/"> Информация об общежитии</a></li>
                            <li><a href="<?php echo home_url();?>/informatsiya-studentam-zaochnikam/"> Информация студентам-заочникам</a></li>
                        </ul>
                    </li>

                </ul>
                <ul class="nav navbar-nav navbar-main">
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle border-hover-color1" href="" aria-expanded="false">ВЫПУСКНИКУ <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo home_url();?>/trudoustrojstvo-vypusknikov/"> Трудоустройство выпускников</a></li>
                            <li><a href="http://kcst.bmstu.ru/"> Центр содействия трудоустройству</a></li>
                            <li><a href="http://graduate.edu.ru/#/?year=2014 "> Мониторинг трудоустройства выпускников</a></li>
                            <!--li><a href="http://old.bti.secna.ru/vyp/assosiation.shtml"> Ассоциация выпускников</a></li-->
                        </ul>
                    </li>

                </ul>

                <ul class="nav navbar-nav navbar-main">
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle border-hover-color1" href="" aria-expanded="false">СОТРУДНИКУ <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="http://eios.bti.secna.ru/"> Электронные ресурсы /ЭБС</a></li>
                            <li><a href="http://www.bti.secna.ru/sveden/education/umd/"> Учебная деятельность</a></li>
                            <li><a href="http://portal.bti.secna.ru/vn_docum/spravochniki/Контингент%20студентов"> Контингент студентов</a></li>
                            <li><a href="https://teacher.altstu.ru/auth/login/"> Личный кабинет преподавателя</a></li>
                            <li><a href="http://db.biysk.secna.ru/schedule/schedule.lk_pps.auth">Личный кабинет сотрудника</a></li>
                            <li><a href="<?php echo home_url();?>/trudoviye-otnosheniya/"> Трудовые отношения</a></li>
                            <li><a href="http://www.bti.secna.ru/povyshenie-kvalifikatsii/"> Повышение квалификации</a></li>
                            <li><a href="http://www.bti.secna.ru/profsoyuz/"> Профсоюз</a></li>
                            <li><a href="http://list.biysk.secna.ru/zoo/vsml/"> Рассылка</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </nav>
            <!-------END MOBILE-------->


            <nav class="main-menu-lg navbar-main-slide">
                <div class="single-nav nav1">

                    <a class="dropdown-toggle border-hover-color1 pun1" href="<?php bloginfo('template_url'); ?>/sveden/">сведения об образовательной организации <i class="fa fa-angle-down"></i></a>
                    <div class="descr">
                        <div class="col-md-12" style="margin-bottom:10px;">
                            <h5><i class="fa fa-black-tie" aria-hidden="true"></i> Сведения об образовательной организации</h5>
                        </div>
                        <div class="col-md-6" >
                            <p><a href="/sveden/common/">Основные сведения</a></p>
                            <p><a href="/sveden/struct">Структура и органы управления образовательной организацией</a></p>
                            <p><a href="/sveden/document/">Документы</a></p>
                            <p><a href="/sveden/education/">Образование</a></p>
                            <p><a href="/sveden/eduStandarts/"> Образовательные стандарты</a></p>
                            <p><a href="/sveden/employees/">Руководство. Научно-педагогический состав</a></p>
                        </div>   <div class="col-md-6">
                            <p><a href="/sveden/objects/"> Материально-техническое обеспечение и оснащенность образовательного процесса</a></p>
                            <p><a href="/sveden/grants/"> Стипендии и иные виды материальной поддержки</a></p>
                            <p><a href="/sveden/paid_edu/">Платные образовательные услуги</a></p>
                            <p><a href="/sveden/budget/">Финансово-хозяйственная деятельность</a></p>
                            <p><a href="/sveden/vacant/">Вакантные места для приема (перевода)</a></p>
                            <p><a href="http://old.bti.secna.ru/cecutient/index_spec.shtml">Версия официального сайта для слабовидящих</a></p>
                        </div>
                    </div>
                </div>


                <div class="single-nav nav1">

                    <a class="dropdown-toggle border-hover-color1 pun1">ОБЩАЯ ИНФОРМАЦИЯ <i class="fa fa-angle-down"></i></a>
                    <div class="descr d1">
                        <div class="col-md-6">
                            <h5><i class="fa fa-black-tie" aria-hidden="true"></i> Официальная информация</h5>
                            <a href="<?php echo home_url();?>/sveden/">Сведения об образовательной организации</a>
                            <br><a href="<?php echo home_url();?>/uchsov">Ученый совет</a>
                            <br><a href="<?php echo home_url();?>/sveden/struct/">Структура и органы управления образовательной организацией</a>
                            <br><a href="http://old.bti.secna.ru/total/sprav.doc">Телефонный справочник</a>


                            <h5><i class="fa fa-film" aria-hidden="true"></i> Мультимедиа </h5>
                            <a href="<?php echo home_url();?>/fotogalereya/">Фотогалерея</a>
                            <br> <a href="<?php echo home_url();?>/videoarhiv/">Видеоархив</a>
                        </div>
                        <div class="col-md-6">
                            <h5><i class="fa fa-university" aria-hidden="true"></i> Об институте</h5>
                            <a href="http://old.bti.secna.ru/total/history.shtml">История</a>
                            <br> <a href="http://old.bti.secna.ru/smi/zag.shtml">СМИ о нас</a>
                            <br><a href="<?php echo home_url();?>/karta-korpusov/">Карта корпусов</a>
                            <br> <a href="<?php echo home_url();?>/protivodeystviye-korruptsii/">Противодействие коррупции </a>
                            <br> <a href="<?php echo home_url();?>/protivodejstvie-ekstremistskoj-deyatelnosti-i-terrorizmu/">Противодействие экстремистской деятельности и терроризму </a>
                        </div>




                    </div>
                </div>
                <div class="single-nav nav2">
                    <a class="dropdown-toggle border-hover-color1 pun2">ОБРАЗОВАНИЕ <i class="fa fa-angle-down"></i></a>
                    <div class="descr d2">
                        <div class="col-md-5">
                            <h5><i class="fa fa-black-tie" aria-hidden="true"></i> Образовательные программы </h5>
                            <a href="<?php echo home_url();?>/sveden/education/umd/perechen-oop/">Основные образовательные программы</a>
                            <br><a href="<?php echo home_url();?>/sveden/struct/tsentr-dopolnitelnogo-professionalnogo-obrazovaniya/">Дополнительное образование</a>
                            <br><a href="http://www.bti.secna.ru/sveden/education/obrazovanie-dlya-invalidov-i-lits-s-ogranichennymi-vozmozhnostyami-zdorovya/">Образование для инвалидов и лиц с ОВЗ </a>

                            <h5><i class="fa fa-university" aria-hidden="true"></i> Организация учебного процесса</h5>
                            <a href="<?php echo home_url();?>/sistema-menedzhmenta-kachestva/">Система менеджмента качества</a>
                            <br><a href="<?php echo home_url();?>/sveden/education/umd/">Учебно-организационная деятельность</a>
                            <br><a href="<?php echo home_url();?>/sveden/education/metodicheskaya-deyatelnost/">Методическая деятельность</a>
                            <br><a href="<?php echo home_url();?>/nauchno-metodicheskij-sovet/">Научно-методический совет</a>

                        </div>
                        <div class="col-md-7">
                            <h5><i class="fa fa-film" aria-hidden="true"></i> Электронная информационно-образовательная среда </h5>
                            <a href="http://eios.bti.secna.ru/">ЭИОС</a>
                            <br><a href="https://student.altstu.ru/login/">Личный кабинет студента</a> | <a href="http://db.biysk.secna.ru/schedule/schedule.lk_pps.auth"> сотрудника </a> | <a href="http://teacher.altstu.ru/auth/login/">преподавателя</a> | <a href="http://db.biysk.secna.ru/graduate/postgrad.form_login">аспиранта </a>
                            <br><a href="<?php echo home_url();?>/students/rasp/">Расписание занятий| сессии</a> | <a href="http://www.bti.secna.ru/students/rasp/raspisanie-attestatsionnyh-ispytanij/">аттестационных испытаний</a>
                            <br><a href="http://irbis.bti.secna.ru/irbis64r_12/index.html">Электронные библиотеки  </a>
                            <br><a href="http://old.bti.secna.ru/education/smq/fepo24.shtml">Тестирование ФЭПО  </a>
                            <br><a href="http://old.bti.secna.ru/education/smq/diag_test_16_17.shtml">Диагностическое тестирование студентов-первокурсников </a>
                        </div>
                    </div>

                </div>
                <div class="single-nav nav3">
                    <a class="dropdown-toggle border-hover-color1 pun3">НАУКА <i class="fa fa-angle-down"></i></a>
                    <div class="descr d3">
                        <div class="col-md-6">
                            <h5><i class="fa fa-black-tie" aria-hidden="true"></i> Наука</h5>
                            <a href="<?php echo home_url();?>/nauchno-issledovatelskaya-rabota/">Научно-исследовательская деятельность</a>
                            <br><a href="<?php echo home_url();?>/nauka/">Государственная научная аттестация</a>
                            <br><a href="<?php echo home_url();?>/aspirantam/">Подготовка кадров высшей научной квалификации</a>
                        </div>

                    </div>

                </div>
                <div class="single-nav nav4">
                    <a class="dropdown-toggle border-hover-color1 pun4">ПОСТУПАЮЩЕМУ <i class="fa fa-angle-down"></i></a>

                    <div class="descr d4">
                        <div class="col-md-5">
                            <h5><i class="fa fa-graduation-cap" aria-hidden="true"></i> Приемная кампания  </h5>
                            <a href="<?php echo home_url();?>/abitur/">Приемная кампания 2019 </a>
                            <br><a href="http://www.bti.secna.ru/perechen-spetsialnostej-i-napravlenij-podgotovki-po-kotorym-obyavlyaetsya-priyom-na-obuchenie-s-ukazaniem-uslovij-postupleniya/">Направления подготовки (специальности)</a>




                        </div>
                        <div class="col-md-7">
                            <h5><i class="fa fa-book" aria-hidden="true"></i> Подготовка к поступлению  </h5>
                            <a href="<?php echo home_url();?>/dovuzovskaya-podgotovka/">Довузовская подготовка </a>
                            <br><a href="<?php echo home_url();?>/podgotovitelnye-kursy/">Подготовительные курсы</a>
                            <br><a href="#">Задать вопрос</a>
                        </div>
                    </div>

                </div>
                <div class="single-nav nav5">
                    <a class="dropdown-toggle border-hover-color1 pun5">СТУДЕНТУ <i class="fa fa-angle-down"></i></a>

                    <div class="descr d5">
                        <div class="col-md-6">
                            <h5><i class="fa fa-files-o" aria-hidden="true"></i> ЭИОС</h5>
                            <a href="<?php echo home_url();?>/students/rasp/"> Расписание занятий/сессии/</a> &nbsp; <a href="http://www.bti.secna.ru/students/rasp/raspisanie-attestatsionnyh-ispytanij/">аттестационных испытаний</a>
                            <br><a href="https://student.altstu.ru/login/"> Личный кабинет студента</a> / <a href="http://db.biysk.secna.ru/graduate/postgrad.form_login">аспиранта</a>
                            <br><a href="http://eios.bti.secna.ru/"> Электронные ресурсы ЭБС</a>
                            <br><a href="http://www.i-exam.ru/"> Интернет-тренажеры</a>
                            <br><a href="http://portal.bti.secna.ru/vn_docum/ucheb_docs/Перечень%20факультативов"> Факультативные дисциплины</a>
                            <!--<br><a href="http://old.bti.secna.ru/students/diplom.shtml"> Дипломирование</a>-->
                            <h5><i class="fa fa-users" aria-hidden="true"></i> Внеучебная деятельность  </h5>
                            <a href="<?php echo home_url();?>/vneuchebnaya-i-vospitatelnaya-deyatelnost/"> Внеучебная и воспитательная деятельность</a>
                            <br><a href="<?php echo home_url();?>/sveden/struct/profkom-studentov/"> Профсоюз студентов</a>
                            <br><a href="<?php echo home_url();?>/sport-v-institute/"> Спорт в институте</a>
                        </div>

                        <div class="col-md-6">

                            <h5><i class="fa fa-info-circle" aria-hidden="true"></i> Информация  </h5>
                            <a href="<?php echo home_url();?>/sveden/grants/"> Стипендии и иные виды материальной поддержки</a>
                            <br><a href="<?php echo home_url();?>/sveden/paid_edu/"> Платные образовательные услуги</a>
                            <br><a href="<?php echo home_url();?>/sveden/grants/informatsiya-ob-obshhezhitii/"> Информация об общежитии</a>
                            <br><a href="<?php echo home_url();?>/informatsiya-studentam-zaochnikam/"> Информация студентам-заочникам</a>
                            <h5><i class="fa fa-info-circle" aria-hidden="true"></i> Факультеты и отделение  </h5>
                            <a href="<?php echo home_url();?>/sveden/struct/inzhenernyj-spetsfakultet/"> Инженерный спецфакультет</a>
                            <br><a href="<?php echo home_url();?>/sveden/struct/tehnologicheskij-fakultet/"> Технологический факультет</a>
                            <br><a href="<?php echo home_url();?>/informatsiya-studentam-zaochnikam/"> Отделение внеочных форм обучения</a>
                        </div>

                    </div>
                </div>
                <div class="single-nav nav6">
                    <a class="dropdown-toggle border-hover-color1 pun6">ВЫПУСКНИКУ <i class="fa fa-angle-down"></i></a>

                    <div class="descr d6">
                        <div class="col-md-6">

                            <h5><i class="fa fa-briefcase" aria-hidden="true"></i> Трудоустройство  </h5>
                            <a href="<?php echo home_url();?>/trudoustrojstvo-vypusknikov/"> Трудоустройство выпускников</a>
                            <br><a href="http://kcst.bmstu.ru/"> Центр содействия трудоустройству</a>
                            <br><a href="http://graduate.edu.ru/#/?year=2014 "> Мониторинг трудоустройства выпускников</a>
                        </div>
                        <!--div class="col-md-6">
                            <h5><i class="fa fa-building" aria-hidden="true"></i> Наши выпускники </h5>
                            <a href="http://old.bti.secna.ru/vyp/assosiation.shtml"> Ассоциация выпускников</a>
                        </div-->

                    </div>
                </div>
                <div class="single-nav nav7">
                    <a class="dropdown-toggle border-hover-color1 pun7">СОТРУДНИКУ <i class="fa fa-angle-down"></i></a>
                    <div class="descr d7">
                        <div class="col-md-4">
                            <h5><i class="fa fa-files-o" aria-hidden="true"></i> ЭИОС  </h5>
                            <a href="http://eios.bti.secna.ru/"> Электронные ресурсы /ЭБС</a>
                            <br><a href="http://www.bti.secna.ru/sveden/education/umd/"> Учебная деятельность</a>
                            <br><a href="http://portal.bti.secna.ru/vn_docum/spravochniki/Контингент%20студентов"> Контингент студентов</a>
                            <br><a href="https://teacher.altstu.ru/auth/login/"> Личный кабинет преподавателя</a> / <a href="http://db.biysk.secna.ru/schedule/schedule.lk_pps.auth">сотрудника</a>
                        </div>
                        <div class="col-md-4">
                            <h5><i class="fa fa-globe" aria-hidden="true"></i> Общее </h5>
                            <a href="<?php echo home_url();?>/trudoviye-otnosheniya/"> Трудовые отношения</a>
                            <br><a href="http://www.bti.secna.ru/povyshenie-kvalifikatsii/"> Повышение квалификации</a>
                            <br><a href="http://www.bti.secna.ru/profsoyuz/"> Профсоюз</a>
                            <br><a href="http://list.biysk.secna.ru/zoo/vsml/"> Рассылка</a>

                        </div>
                    </div>
                </div>


                </ul>

            </nav>
            <a id="menu-close" href="#"><i class="fa fa-times"></i></a>
        </div>
    </header>
    <div class="bg-image page-title" style="padding: 3px 0;">
        <div class="container-fluid">

            <div class="pull-right">
                <!--a href=""><i class="fa fa-home fa-lg"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp;
                <a href="">Сведения об образовательной организации</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                <a href="">Расписание занятий</a-->
            </div>
        </div>
    </div>
    <div class="container-fluid block-content">

			

