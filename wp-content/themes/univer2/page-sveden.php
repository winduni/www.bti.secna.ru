<?php
/*
Template Name: sveden
*/
?>
<style>
ol, ul{
list-style-type:none;	
}
.pps > table > tbody > tr > td {
    font-size: 10px;
}
.mymy{
	font-size:11px;
}
.mymy1{
    font-size:13px;
}
    .sved p{
        margin-bottom:0;
    }
.mymy td, .mymy th{
    padding:2px 5px;
}
.bg-blue{
      background:#f9f9f9;
    }
.text-uppercase{
    background: #df5410 !important;
    color: #fff;
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
 <?php endif; ?>
 </div> 




     <div class="col-md-3" style="padding-right: 0px;margin-top: 10px;">
         <div class="menu_r_main"><i class="fa fa-circle" aria-hidden="true"></i> &nbsp;&nbsp;Сведения об образовательной организации</div>
         <div class="menu_r">  <a href="<?php echo home_url();?>/sveden/common/">Основные сведения </a></div>
         <div class="menu_r">  <a href="<?php echo home_url();?>/sveden/struct">Структура и органы управления образовательной организацией</a></div>
         <div class="menu_r" > <a href="<?php echo home_url();?>/sveden/document/">Документы</a> </div>
         <div class="menu_r" > <a href="<?php echo home_url();?>/sveden/education/">Образование</a> </div>
         <div class="menu_r" > <a href="<?php echo home_url();?>/sveden/eduStandarts/">Образовательные стандарты</a> </div>
         <div class="menu_r" > <a href="<?php echo home_url();?>/sveden/employees/">Руководство. Научно-педагогический состав</a> </div>
         <div class="menu_r" > <a href="<?php echo home_url();?>/sveden/objects/">Материально-техническое обеспечение и оснащенность образовательного процесса</a> </div>
         <div class="menu_r" > <a href="<?php echo home_url();?>/sveden/grants/">Стипендии и иные виды материальной поддержки</a> </div>
         <div class="menu_r" > <a href="<?php echo home_url();?>/sveden/paid_edu/">Платные образовательные услуги</a> </div>
         <div class="menu_r" >  <a href="<?php echo home_url();?>/sveden/budget/">Финансово-хозяйственная деятельность</a></div>
         <div class="menu_r" > <a href="<?php echo home_url();?>/sveden/vacant/">Вакантные места для приема (перевода)</a> </div>
         <div class="menu_r" >  <a href="http://old.bti.secna.ru/cecutient/index_spec.shtml">Версия официального сайта для слабовидящих</a> </div>
     </div>
 </div>
 </div>
 <script type="text/javascript" src="http://ajax.microsoft.com/ajax/jQuery/jquery-1.11.0.min.js"></script>

                        <script type="text/javascript">
                    $(document).ready(function(){
					    $(".hider").click(function(){
                            $("#hidden").slideToggle("slow");
                            return false;
                        });
                        $(".hider1").click(function(){
                            $("#hidden1").slideToggle("slow");
                            return false;
                        });
						                        $(".hider2").click(function(){
                            $("#hidden2").slideToggle("slow");
                            return false;
                        });
						 $(".hider3").click(function(){
                            $("#hidden3").slideToggle("slow");
                            return false;
                        });
												 $(".hider4").click(function(){
                            $("#hidden4").slideToggle("slow");
                            return false;
                        });
																	 $(".hider5").click(function(){
                            $("#hidden5").slideToggle("slow");
                            return false;
                        });
																	 $(".hider6").click(function(){
                            $("#hidden6").slideToggle("slow");
                            return false;
                        });
																	 $(".hider7").click(function(){
                            $("#hidden7").slideToggle("slow");
                            return false;
                        });
                    });
        </script>

<?php get_footer(); ?>