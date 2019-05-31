<?php
/*
 * Plugin Name: PCT Slider type
 */

add_action('init', 'register_pct');

function register_pct(){
	register_post_type('slides', array(
		'labels'             => array(
			'name'               => 'Слайды',
			'add_new'            => 'Добавить новый слайд',
			'add_new_item'       => 'Добавить слайд',
			'edit_item'          => 'Редактировать',
			'new_item'           => 'Новый слайд',
			'menu_name'          => 'Слайд'

		),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title')
	) );
	register_post_type('team', array(
		'labels'             => array(
			'name'               => 'Сотрудники',
			'add_new'            => 'Добавить нового сотрудника',
			'add_new_item'       => 'Добавить сотрудника',
			'edit_item'          => 'Редактировать',
			'new_item'           => 'Новый сотрудник',
			'menu_name'          => 'Сотрудник'

		),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title')
	) );
	register_post_type('price', array(
		'labels'             => array(
			'name'               => 'Тарифы', // Основное название типа записи
			'add_new'            => 'Добавить новый тариф',
			'add_new_item'       => 'Добавить тариф',
			'edit_item'          => 'Редактировать',
			'new_item'           => 'Новый тариф',
			'menu_name'          => 'Тариф'

		),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title')
	) );
}