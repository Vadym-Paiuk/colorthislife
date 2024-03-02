<?php

namespace Theme\Inc\Classes\Setup;

use Theme\Inc\Traits\Singleton_Trait;

class CPT {
	use Singleton_Trait;
	
	private function __construct() {
		add_action( 'init', [ $this, 'register_post_type' ], 20 );
	}
	
	public function register_post_type() {
		if ( get_current_blog_id() == 2 ) {
			register_post_type(
				'video',
				array(
					'labels'            => array(
						'name'               => 'Video',
						'singular_name'      => 'Video',
						'add_new'            => 'Add New',
						'add_new_item'       => 'Add New Video',
						'edit_item'          => 'Edit Video',
						'new_item'           => 'New Video',
						'view_item'          => 'View Video',
						'search_items'       => 'Search Video',
						'not_found'          => 'Video Not Found',
						'not_found_in_trash' => 'is empty',
						'menu_name'          => 'Video',
					),
					'public'            => true,
					'show_ui'           => true,
					'show_admin_column' => true,
					'show_in_nav_menus' => true,
					'show_tagcloud'     => true,
					'query_var'         => true,
					'menu_icon'         => 'dashicons-video-alt3',
					'supports'          => array( 'title', 'thumbnail', 'custom-fields', 'excerpt' ),
					'hierarchical'      => true,
					'has_archive'       => true,
					'rewrite'           => array(
						'slug'       => 'videos',
						'with_front' => false
					),
				
				)
			);
		}
		if ( get_current_blog_id() == 3 ) {
			register_post_type(
				'read_and_experience',
				array(
					'labels'            => array(
						'name'               => 'R & E',
						'singular_name'      => 'R & E',
						'add_new'            => 'Add New',
						'add_new_item'       => 'Add New R & E',
						'edit_item'          => 'Edit R & E',
						'new_item'           => 'New R & E',
						'view_item'          => 'View R & E',
						'search_items'       => 'Search R & E',
						'not_found'          => 'Video Not R & E',
						'not_found_in_trash' => 'is empty',
						'menu_name'          => 'R & E',
					),
					'public'            => true,
					'show_ui'           => true,
					'show_admin_column' => true,
					'show_in_nav_menus' => true,
					'show_tagcloud'     => true,
					'query_var'         => true,
					'menu_icon'         => 'dashicons-book',
					'supports'          => array( 'title', 'thumbnail', 'custom-fields' ),
					'hierarchical'      => true,
					'has_archive'       => true,
					'rewrite'           => array(
						'slug'       => 're',
						'with_front' => false
					),
				
				)
			);
		}
		if ( get_current_blog_id() == 4 ) {
			register_post_type(
				'learn_and_experience',
				array(
					'labels'            => array(
						'name'               => 'L & E',
						'singular_name'      => 'L & E',
						'add_new'            => 'Add New',
						'add_new_item'       => 'Add New L & E',
						'edit_item'          => 'Edit L & E',
						'new_item'           => 'New L & E',
						'view_item'          => 'View L & E',
						'search_items'       => 'Search L & E',
						'not_found'          => 'Video Not L & E',
						'not_found_in_trash' => 'is empty',
						'menu_name'          => 'L & E',
					),
					'public'            => true,
					'show_ui'           => true,
					'show_admin_column' => true,
					'show_in_nav_menus' => true,
					'show_tagcloud'     => true,
					'query_var'         => true,
					'menu_icon'         => 'dashicons-welcome-learn-more',
					'supports'          => array( 'title', 'thumbnail', 'custom-fields' ),
					'hierarchical'      => true,
					'has_archive'       => true,
					'rewrite'           => array(
						'slug'       => 'le',
						'with_front' => false
					),
				
				)
			);
		}
	}
}