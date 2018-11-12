<?php
/*
Template Name: Объявления
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
					<span class="head-h"> Список объявлений</span></h4>

<br>
<div class="row">
<div class="col-md-8">
<?php
$args=array(
'category__in' => 4, //из какой категории вывести (удалите эту строку, если хотите, чтобы показовало последние материалы из всех рубрик сразу)
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
    <?php/*
    $current_page = $_GET['page']; // текущая страница
    $post_type = 'advert'; // имя custom post type
    // если GET параметр пустой, то принимаем, что текущая страница равна 1
    if ( empty($current_page) ) {
        $current_page = 1;
    }
    // аргументы, передаваемые в запрос
    $args = array(
        'post_type'      => $post_type, // custom post type
        'posts_per_page' => 5,         // количество постов на одной странице
        'paged' =>  $current_page,      // задаем номер страницы, которую хотим отобразить
    );
    $projects = new WP_Query( $args ); // отправляем запрос
    if ( $projects->have_posts() ) :
        while ( $projects->have_posts() ) : $projects->the_post(); ?>
            // здесь HTML разметка поста
        <?php endwhile;
        if ( $projects->max_num_pages > 1 ) : // если максимальное количество страниц больше 1, то выводим пагинацию
            if ( $projects->max_num_pages > $current_page && $current_page > 1 ) : ?> // если это не последняя страница и не первая, то выводим ссылки на следующую и предыдущую страницу
                <a href="<?php prevlink($current_page) ?>">Предыдущая страница</a>
                <a href="<?php nextlink($current_page) ?>">Следующая страница</a>
            <?php elseif ( $current_page == 1 ) : ?> // если текущая страница является первой страницей, выводим только ссылку на следующую страницу
                <a href="<?php nextlink($current_page) ?>">Следующая страница</a>
            <?php elseif ( $current_page == $projects->max_num_pages ) : ?> // если текущая страница - это последняя страница, выводим ссылку только на предыдущую страницу
                <a href="<?php prevlink($current_page) ?>">Предыдущая страница</a>
            <?php endif;
        endif;
    endif;*/
    ?>


</div>
<div class="col-md-4">

</div>
</div>
<br><br><br>
<?php get_footer(); ?>
