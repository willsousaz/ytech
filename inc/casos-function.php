<?php 


	add_action('init','casos_register');

	function casos_register(){

		$labels=array(
			'name'=> _x('Casos','post type general name'),
			'singular_name'=>_x('Casos','post type singula name'),
			'add_new'=>_x('Adicionar Serviços','casos'),
			'add_new_item'=>__('Adicionar casos'),
			'edit_item'=>__('Editar casos'),
			'new_item'=>__('Novo Serviços'),
			'view_item'=>__('Ver Serviços'),
			'search_items'=>__('Procurar Casos'),
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
			'menu_icon' => 'dashicons-buddicons-buddypress-logo',
			'capabiliry_type' => 'post',
			'hierarchical' => false, 
			'menu_position'=> 6,
			'supports'=>array('title','thumbnail','editor','excerpt')
		);

		register_post_type('casos',$args);
	}

 ?>