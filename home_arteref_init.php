<?php
/**
 *Author: Willian de Oliveira
 * Plugin Name: Arteref - Home
 * Plugin URI: https://arteref.com
 * Description: Implementa home personalizada no arteref. 
 * Author URI: Willian De Oliveira 
 * Version: 1.0 BETA
 * Licence: GPL2
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
//carrega template da página home 
require 'content/home.php';
require 'render/get_posts.php';

function home_enqeue_scripts(){
    $page = get_page_by_title( 'Home' );
    if ( is_page($page->ID) ){
        wp_enqueue_style( 'cdn_bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
        wp_enqueue_style( 'home_arteref_style', plugins_url('home-arteref/content/css/style.css'));
        wp_enqueue_style( 'home_arteref_style_scroll', plugins_url('home-arteref/content/css/scroll_style.css' ));
        wp_enqueue_style( 'cdn_bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js','jquery', 1.4, true);
        wp_enqueue_script('home_arteref_script_slider', plugins_url('home-arteref/content/js/slider.js'),'jquery', 1.4, true);
        wp_enqueue_script('home_arteref_click_and_drag_scroll', plugins_url('home-arteref/content/js/click_and_drag_scroll.js'),'jquery', 1.4, true);
    }
}
add_action('wp_enqueue_scripts', 'home_enqeue_scripts');

function home_arteref_init($content) {
    $page = get_page_by_title( 'Home' );
    if ( is_page($page->ID) ){
        return home_arteref();
    }
    else{
        return $content;
    }
}

add_filter('the_content', 'home_arteref_init', 20);