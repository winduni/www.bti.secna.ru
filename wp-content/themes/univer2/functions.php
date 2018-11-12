<?php 
add_action( 'wp_enqueue_scripts', 'my_jquery_method' );
function my_scripts(){
wp_enqueue_script( 'script-three2', get_template_directory_uri() . '/js/jquery-1.11.3.min.js', array(), null, true );
 wp_enqueue_script( 'script-three3', get_template_directory_uri() . '/js/jquery-ui.min.js', array(), null, true );
 wp_enqueue_script( 'script-two', get_template_directory_uri() . '/js/bootstrap.min.js', array(), null, true );
 wp_enqueue_script( 'script-three1', get_template_directory_uri() . '/js/modernizr.custom.js', array(), null, true );
 wp_enqueue_script( 'script-for', get_template_directory_uri() . '/assets/rendro-easy-pie-chart/dist/jquery.easypiechart.min.js', array(), null, true );
 wp_enqueue_script( 'script-five', get_template_directory_uri() . '/js/waypoints.min.js', array(), null, true );
 wp_enqueue_script( 'script-six', get_template_directory_uri() . '/js/jquery.easypiechart.min.js', array(), null, true );
 wp_enqueue_script( 'script-six1', get_template_directory_uri() . '/assets/switcher/js/switcher.js', array(), null, true );
 wp_enqueue_script( 'script-srrr', get_template_directory_uri() . '/assets/owl-carousel/owl.carousel.js', array(), null, true );
  wp_enqueue_script( 'script-six3', get_template_directory_uri() . '/assets/loader/js/classie.js', array(), null, true );
 wp_enqueue_script( 'script-six4', get_template_directory_uri() . '/assets/loader/js/pathLoader.js', array(), null, true );
 wp_enqueue_script( 'script-six5', get_template_directory_uri() . '/assets/loader/js/main.js', array(), null, true );
 wp_enqueue_script( 'script-six6', get_template_directory_uri() . '/js/classie.js', array(), null, true );
 wp_enqueue_script( 'script-six7', get_template_directory_uri() . '/assets/isotope/jquery.isotope.min.js', array(), null, true );
 wp_enqueue_script( 'script-six8', get_template_directory_uri() . '/js/jquery.smooth-scroll.js', array(), null, true );
 wp_enqueue_script( 'script-six9', get_template_directory_uri() . '/js/wow.min.js', array(), null, true );
 wp_enqueue_script( 'script-six10', get_template_directory_uri() . '/js/jquery.placeholder.min.js', array(), null, true );
 wp_enqueue_script( 'script-six11', get_template_directory_uri() . '/js/smoothscroll.min.js', array(), null, true );
 wp_enqueue_script( 'script-six12', get_template_directory_uri() . '/js/theme.js', array(), null, true );
 wp_enqueue_script( 'script-six120', get_template_directory_uri() . '/js/jquery.countdown.min.js', array(), null, true );
 wp_enqueue_script( 'script-six121', get_template_directory_uri() . '/js/jquery.countdown-ru.js', array(), null, true );
 wp_enqueue_script( 'script-six122', get_template_directory_uri() . '/js/timer.js', array(), null, true );
}
add_action('wp_enqueue_scripts', 'my_scripts');
function the_breadcrumb() {
    if (!is_front_page()) {
        echo '<a href="';
        echo get_option('home');
        echo '">Главная';
        echo "</a> / ";
        if (is_category() || is_single()) {
            the_category(' ');
            if (is_single()) {
                echo " / ";
                the_title();
            }
        } elseif (is_page()) {
            echo the_title();
        }
    }
    else {
        echo 'Home';
    }
}
?>
<?php
if ( function_exists( 'add_theme_support' ) ) {
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 200, 200, true );
}

/* чтобы вставить исполняемый код php в статьях/страницах WordPress, используйте этот шорткод: [exec]код[/exec] */
function exec_php($matches){
    eval('ob_start();'.$matches[1].'$inline_execute_output = ob_get_contents();ob_end_clean();');
    return $inline_execute_output;
}
function inline_php($content){
    $content = preg_replace_callback('/\[exec\]((.|\n)*?)\[\/exec\]/', 'exec_php', $content);
    $content = preg_replace('/\[exec off\]((.|\n)*?)\[\/exec\]/', '$1', $content);
    return $content;
}
add_filter('the_content', 'inline_php', 0);
// меняем лого при входе
function my_login_logo(){
    echo '
   <style type="text/css">
        #login h1 a { background: url('. get_bloginfo('template_directory') .'/img/logotip.png) no-repeat 0 0 !important;height: 115px; margin: 0 auto 5px !important; }
    </style>';
}
add_action('login_head', 'my_login_logo');
//добавляем виджеты
if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<span class="widgettitle">',
        'after_title' => '</span>',
    ));
}
//анонс
function new_excerpt_length($length) {
        return 40;
    }
    add_filter('excerpt_length', 'new_excerpt_length');
//обрезаем название новости на главной
function trim_title_chars($count, $after) {
    $title = get_the_title();
    if (mb_strlen($title) > $count) $title = mb_substr($title,0,$count);
    else $after = '';
    echo $title . $after;
}
ini_set( 'upload_max_size', '150M' );
ini_set( 'post_max_size', '150M');

//разрешаем все элементы тега span start - для микроразметки
function wph_add_all_elements($init) {
    if(current_user_can('unfiltered_html')) {
        $init['valid_elements'] = 'td[*],tbody[*],tr[*],th[*],br[*],div[*],span[*],ul[*],li[*],img[*],a[*],h1[*],h2[*],h3[*],h4[*],h5[*],h6[*],p[*],i[*],hr[*],table[*],sup[*],b[*],strong[*]';
    }
    return $init;
}
add_filter('tiny_mce_before_init', 'wph_add_all_elements', 20);


function change_mce_options($initArray) {   //Убираем удаление тегов
    $initArray['verify_html'] = false;
    $initArray['cleanup_on_startup'] = false;
    $initArray['cleanup'] = false;
    $initArray['forced_root_block'] = false;
    $initArray['validate_children'] = false;
    $initArray['remove_redundant_brs'] = false;
    $initArray['remove_linebreaks'] = false;
    $initArray['force_p_newlines'] = false;
    $initArray['force_br_newlines'] = false;
    $initArray['fix_table_elements'] = false;
    $initArray['entities'] = '160,nbsp,38,amp,60,lt,62,gt';
    return $initArray;
}
if (current_user_can('contributor') && !current_user_can('upload_files')) :
    add_action('admin_init', 'razreshit_uchasnikam_gruzit_faili');
endif;
function razreshit_uchasnikam_gruzit_faili() {
    $uchasnik= get_role('contributor');
    $uchasnik->add_cap('upload_files');
}

?>
