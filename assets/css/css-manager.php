<?php
add_action( 'wp_enqueue_scripts', 'dttl_register_style');
function dttl_register_style() {
    $cssUrl = get_template_directory_uri() . '/assets/css';
    wp_register_style('normalize', $cssUrl . '/normalize.css', array(), '1.0');
    wp_enqueue_style('normalize');
    wp_register_style('dttl_fontawesome-all', $cssUrl . '/font-awesome/css/font-awesome.min.css', array(), '1.0');
    wp_enqueue_style('dttl_fontawesome-all');
    wp_register_style('swiper-bundle', $cssUrl . '/swiper-bundle.min.css', array(), '1.0');
    wp_enqueue_style('swiper-bundle');
    wp_register_style('style', $cssUrl . '/style1.css', array(), '1.1');
    wp_enqueue_style('style');
}
?>