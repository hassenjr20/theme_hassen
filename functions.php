<?php
function wp_theme_setup(){
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'primary'=> __('Primary Menu')
    )); 
}
add_action('after_setup_theme','wp_theme_setup');
?>