<?php

namespace Theme\Inc\Classes\Setup;

use Theme\Inc\Traits\Singleton_Trait;

class CPT {
	use Singleton_Trait;
	
	private function __construct() {
		add_action( 'init', [ $this, 'register_post_type' ], 20 );
	}
	
	public function register_post_type() {
		register_post_type(
			'coloring',
			array(
				'labels'            => array(
					'name'               => 'Coloring',
					'singular_name'      => 'Coloring',
					'add_new'            => 'Add New',
					'add_new_item'       => 'Add New Coloring',
					'edit_item'          => 'Edit Coloring',
					'new_item'           => 'New Coloring',
					'view_item'          => 'View Coloring',
					'search_items'       => 'Search Coloring',
					'not_found'          => 'Coloring Not Found',
					'not_found_in_trash' => 'is empty',
					'menu_name'          => 'Coloring',
				),
				'public'            => true,
				'show_ui'           => true,
				'show_admin_column' => true,
				'show_in_nav_menus' => true,
				'show_tagcloud'     => true,
				'query_var'         => true,
				'menu_icon'         => 'dashicons-format-gallery',
				'supports'          => array( 'title', 'thumbnail', 'custom-fields', 'excerpt' ),
				'hierarchical'      => true,
				'has_archive'       => true,
				'rewrite'           => array(
					'slug'       => 'coloring',
					'with_front' => false
				),
			
			)
		);
	}
}