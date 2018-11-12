<?php
/*
Template Name: Спорт в институте
*/
?>
<?php get_header(); ?>
<div class="bread_cr">
<?php
the_breadcrumb();
?>
</div>
    <style>
        .news-date {font-size: 14px;color: #818181;}
        .news-title {font-size:25px;color:#292c31;}
        .news{width:100%;}
        .news:hover{box-shadow: 0 0 2px #fff;}
        .clear{clear:both;}
    </style>
<br>
<h4><i class="fa fa-map-o terrakote"></i> 
					<span class="head-h"> Спорт в институте</span></h4>

    <br>
    <div class="row">
        <div class="col-md-8">
            <?php
            $args=array(
                'category__in' => 7, //из какой категории вывести (удалите эту строку, если хотите, чтобы показовало последние материалы из всех рубрик сразу)
//'showposts'=>, //сколько показать статей
                'orderby'=>data, //сортировка по дате
                'caller_get_posts'=>1);
            $my_query = new wp_query($args);
            if( $my_query->have_posts() ) { ?>

                <?php
                while ($my_query->have_posts()) {
                    $my_query->the_post();
                    $size == array(50,50);
                    ?>
                    <div class="news">
                        <a href="<?php echo get_permalink($post->ID); ?>" class="news-title">
                            <?php echo $post->post_title; ?></a>
                        <p class="news-date"><?php the_time('d.m.Y'); ?> </p>
                        <a href="<?php echo get_permalink($post->ID); ?>"><?php echo get_the_post_thumbnail($id, array(550,550)) ?></a>

                        <div class="clear"></div>

                        <hr>
                        </a>
                    </div>
                <?php }}
            wp_reset_query(); ?>
        </div>
        <div class="col-md-4">

        </div>



    </div>
    <br> <br><a href="http://old.bti.secna.ru/culture/sport.shtml">АРХИВ</a>
    <br><br>
    <br><br><br>
<?php get_footer(); ?>