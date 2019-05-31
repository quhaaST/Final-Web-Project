<?php
add_action( 'after_theme_setup', 'final_setup'); // add_action(какое действие, какую функцию выполняем)
add_action( 'wp_enqueue_scripts', 'final_add_assets'); // опять же
add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
	register_nav_menu( 'primary', 'Primary Menu' );
}
function final_setup() {
	add_theme_support( 'title-tag' );

	// тумбы картинки
	add_theme_support( 'post-thumbnails' );

	// поддержка своего логотипа
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 240,
		'flex-width' => true,
	) );

	//add_theme_support('menus');
	// Если нам нужен блог или RSS (на корп сайте не надо =) )
	// add_theme_support( 'automatic-feed-links' );

	// Сколько нам надо меню? - категории ("регионы") меню; при создании нового меню можно будет выбрать категорию, в которой будет высвечиваться это меню
	// Разметка в формате HTML 5
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
}

function final_add_assets() {

	wp_enqueue_style( 'main-style', get_stylesheet_uri(), array(), 4.32);
	wp_enqueue_style('cont_page', get_template_directory_uri() . '/css/main.css', array(), 2.2);

	wp_enqueue_style('font_roboto', "https://fonts.googleapis.com/css?family=Roboto");



}

