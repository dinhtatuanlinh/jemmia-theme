<?php
add_action( 'wp_enqueue_scripts', 'dttl_register_js');
function dttl_register_js(){
    $jsUrl = get_template_directory_uri() . '/assets/js';
    wp_register_script('dttl_jquery', $jsUrl . '/jquery-3.5.1.min.js', array(), '1.0', true);
    wp_enqueue_script('dttl_jquery');
    wp_register_script('swiper-bundle', $jsUrl . '/swiper-bundle.min.js', array( 'jquery' ), '1.0', true);
    wp_enqueue_script('swiper-bundle');
    wp_register_script('gsap', $jsUrl . '/gsap.min.js', array(), '1.0', true);
    wp_enqueue_script('gsap');
    wp_register_script('icon-on-menu', $jsUrl . '/icon-on-menu.js', array(), '1.0', true);
    wp_enqueue_script('icon-on-menu');
    wp_register_script('open-close-menu', $jsUrl . '/open-close-menu.js', array(), '1.0', true);
    wp_enqueue_script('open-close-menu');
    wp_register_script('slider-index', $jsUrl . '/slider-index.js', array(), '1.0', true);
    wp_enqueue_script('slider-index');
    wp_register_script('bgkc', $jsUrl . '/bgkc.js', array(), '1.0', true);
    wp_enqueue_script('bgkc');
}
?>