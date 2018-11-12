<?php 
function my_scripts(){
    wp_enqueue_script( 'script-three3', get_template_directory_uri() . '/js/jquery.min.js', array(), null, true );
 wp_enqueue_script( 'script-three2', get_template_directory_uri() . '/js/modernizr.custom.js', array(), null, true );

 wp_enqueue_script( 'script-two', get_template_directory_uri() . '/js/scripts.min.js', array(), null, true );
 wp_enqueue_script( 'script-three1', get_template_directory_uri() . '/js/master.js', array(), null, true );
}
add_action('wp_enqueue_scripts', 'my_scripts');
?>
