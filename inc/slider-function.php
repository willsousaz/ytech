<?php 

	add_action('init','slider_register');

	function slider_register(){

		$labels=array(
			'name'=> _x('Slider','post type general name'),
			'singular_name'=>_x('Slider','post type singula name'),
			'add_new'=>_x('Adicionar slider','slider'),
			'add_new_item'=>__('Adicionar slider'),
			'edit_item'=>__('Editar slider'),
			'new_item'=>__('Novo slider'),
			'view_item'=>__('Ver slider'),
			'search_items'=>__('Procurar slider'),
			'not_found'=>__('Nada encontrado'),
			'not_found_in_trash'=>__('Nada encontrado no lixo'),
			'parent_item_colon'=> ''
		);

		$args= array(
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'rewrite'=> true,
			'has_archive'=> true,
			'menu_icon' => 'dashicons-media-code',
			'capabiliry_type' => 'post',
			'hierarchical' => false, 
			'menu_position'=> 6,
			'supports'=>array('title','thumbnail','editor','excerpt')
		);

		register_post_type('slider',$args);
	}


 