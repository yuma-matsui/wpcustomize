<?php
/*
 * Plugin Name: マイプラグイン
 * Version: 1.0
 * Description: 自分専用のプラグイン
 * Author: YouMa
*/

add_shortcode('date', function(){
	return date('Y年 n月 j日');
});

add_shortcode('sum', function($atts){
	$atts = shortcode_atts([
		'x' => 0,
		'y' => 0
	], $atts, 'sum');
	return $atts['x'] + $atts['y'];
});

add_action('init', function () {
	register_post_type('item', [
		'label' => '商品',
		'public' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-store',
		'supports' => ['thumbnail', 'title', 'editor', 'page-attributes', 'custom-fields'],
		'has_archive' => true,
		'show_in_rest' => true
	]);

	register_taxonomy('genre', 'item', [
		'label' => '商品ジャンル',
		'hierarchical' => true,
		'show_in_rest' => true
	]);
});
