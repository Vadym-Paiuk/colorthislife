<?php

namespace Theme\Inc\Classes\Setup;

use Theme\Inc\Traits\Singleton_Trait;

class Taxonomy {
	use Singleton_Trait;
	
	private function __construct() {
		add_action( 'init', [ $this, 'register_taxonomy' ] );
	}
	
	public function register_taxonomy() {
		if ( get_current_blog_id() == 2 ) {
			register_taxonomy(
				'age',
				[ 'video' ],
				[
					'label'             => __( 'Age', THEME_TEXT_DOMAIN ),
					'labels'            => [
						'name'          => __( 'Age', THEME_TEXT_DOMAIN ),
						'singular_name' => __( 'Age', THEME_TEXT_DOMAIN )
					],
					'public'            => true,
					'query_var'         => true,
					'show_ui'           => true,
					'show_admin_column' => true,
					'show_in_nav_menus' => true,
					'show_tagcloud'     => true,
					'meta_box_cb'       => 'post_categories_meta_box',
					'hierarchical'      => true,
					'has_archive'       => true,
					'rewrite'           => [
						'slug'       => 'age',
						'with_front' => false
					]
				]
			);
			
			register_taxonomy(
				'skill',
				[ 'video' ],
				[
					'label'             => __( 'Skill', THEME_TEXT_DOMAIN ),
					'labels'            => [
						'name'          => __( 'Skill', THEME_TEXT_DOMAIN ),
						'singular_name' => __( 'Skill', THEME_TEXT_DOMAIN ),
					],
					'public'            => true,
					'query_var'         => true,
					'show_ui'           => true,
					'show_admin_column' => true,
					'show_in_nav_menus' => true,
					'show_tagcloud'     => true,
					'meta_box_cb'       => 'post_categories_meta_box',
					'hierarchical'      => true,
					'has_archive'       => true,
					'rewrite'           => [
						'slug'       => 'skill',
						'with_front' => false
					]
				]
			);
			
			register_taxonomy(
				'area_of_expertise',
				[ 'video' ],
				[
					'label'             => __( 'Area of Expertise', THEME_TEXT_DOMAIN ),
					'labels'            => [
						'name'          => __( 'Area of Expertise', THEME_TEXT_DOMAIN ),
						'singular_name' => __( 'Area of Expertise', THEME_TEXT_DOMAIN ),
					],
					'public'            => true,
					'query_var'         => true,
					'show_ui'           => true,
					'show_admin_column' => true,
					'show_in_nav_menus' => true,
					'show_tagcloud'     => true,
					'meta_box_cb'       => 'post_categories_meta_box',
					'hierarchical'      => true,
					'has_archive'       => true,
					'rewrite'           => [
						'slug'       => 'skill',
						'with_front' => false
					]
				]
			);
		}
	}
}