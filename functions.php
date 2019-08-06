<?php

// CSS
function add_stylesheet() { //登録したCSSを以下の順番で読み込む
	wp_register_style('reset', get_template_directory_uri().'/css/ress.min.css', array(), '1.0', false);
    wp_enqueue_style('main', get_template_directory_uri().'/css/style.css', array('reset'), '1.0', false);
}
add_action('wp_enqueue_scripts', 'add_stylesheet');

//JS
function add_script(){ //登録したJSを以下の順番で読み込む
    wp_register_script('main-first', get_template_directory_uri().'/js/main-first.js', array(), '1.0', true);
    wp_register_script('main-second', get_template_directory_uri().'/js/main-second.js', array(), '1.0', true);
	wp_enqueue_script('main-last', get_template_directory_uri().'/js/main-last.js', array('main-first', 'main-second'), '1.0', true);
}
add_action('wp_enqueue_scripts','add_script');

// title出力
add_theme_support( 'title-tag' );

// 記事サムネ登録
add_theme_support( 'post-thumbnails' ); 

//概要（抜粋）の文字数調整
 function my_excerpt_length($length) {
 return 150;
 }
 add_filter('excerpt_length', 'my_excerpt_length');

// ナビゲーションメニュー有効化
function my_setup_theme() {
   register_nav_menu( 'header-navigation', 'Header Navigation' );
   register_nav_menu( 'footer-navigation', 'Footer Navigation' );
}
add_action( 'after_setup_theme', 'my_setup_theme' );

// ウィジェット表示
function arphabet_widgets_init() {

	register_sidebar( array(
		'name' => 'サイドバー',
		'id' => 'sidebar-1',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget__title">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );