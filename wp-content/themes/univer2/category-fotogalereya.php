<?php
/*
Template Name: fotogalereya
*/
?>
<?php get_header(); ?>
    <div class="row">
        <div class="container" style="margin-bottom:50px;">
            <div class="bread_cr">
                <?php
                if(function_exists('bcn_display'))
                {
                    bcn_display();
                }
                ?>
            </div>
            <div class="posts">
                <br>

                <h4><i class="fa fa-map-o terrakote" ></i>
                    <span class="head-h">Фотогалерея</span></h4>
                <style>
                    .service-item img{
                        width:100% !important;
                        height:150px !important;
                    }
                    .fotogal:hover {box-shadow: 0 0 2px #bbb !important;}
                    .fotogal {
                        background: #fff;
                        width: 19%;
                        margin: 5px;
                        padding-right: 8px;
                        padding-left: 8px;
                        min-height: 270px;
                        }
                    </style>
                <div class="row services neves-o">
                    <?php
                    $args=array(
                        'category__in' => array( 23 ),
                        'showposts'=>5000,
                        'orderby'=>data, //сортировка по дате
                        'caller_get_posts'=>1);
                    $my_query = new wp_query($args);
                    if( $my_query->have_posts() ) { ?>

                        <?php
                        while ($my_query->have_posts()) {
                            $my_query->the_post();
                            $size == array(50,50);
                            ?>
                            <div class="service-item col-xs-12 col-sm-6 col-md-4 col-lg-4 wow zoomIn fotogal" data-wow-delay="0.3s">
                                <a href="<?php echo get_permalink($post->ID); ?>"><?php
                                    //echo get_the_post_thumbnail($id, array(9999,150))
                                    if ( has_post_thumbnail() ): // если миниатюра есть
                                        the_post_thumbnail($id, array(9999,150)); // выводим ее
                                    else:?>
                                        <img src="<?php bloginfo('template_url'); ?>/img/no-img.jpg" width="100%" alt="Фотогалерея">
                                    <?endif;
                                    ?></a>
                                 </a>
                                <br><br>
                               <a href="<?php echo get_permalink($post->ID); ?>" class="news-title">
                                    <?php trim_title_chars(100, '...'); ?></a>

                            </div>
                        <?php }}
                    wp_reset_query(); ?>


                </div>

            </div>

       </div>
    </div>
<?php get_footer(); ?>