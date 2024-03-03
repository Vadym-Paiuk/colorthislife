<?php

namespace Theme\Inc\Classes\Menu;

use Theme\inc\traits\Singleton_Trait;

class Footer_Menu_Walker {
	
	use Singleton_Trait;
	
	public function __construct() {
		add_filter( 'wp_nav_menu', [ $this, 'add_title_for_menu' ], 10, 2 );
		add_filter( 'nav_menu_css_class', [ $this, 'add_meta_value_class_to_menu_item' ], 10, 2 );
		add_filter( 'walker_nav_menu_start_el', [ $this, 'add_prefix_to_menu_link' ], 10, 4 );
		add_filter( 'nav_menu_item_title', [ $this, 'add_acf_image_to_menu_item_title' ], 10, 4 );
	}
	
	public function add_title_for_menu( $nav_menu, $args ) {
		$title = get_field( 'title', $args->menu );
		
		if ( empty( $title ) ) {
			return $nav_menu;
		}
		
		$format = '<h4 class="menu-title">%s</h4>';
		$title  = sprintf( $format, $title );
		
		$nav_menu = $title . $nav_menu;
		
		return $nav_menu;
	}
	
	public function add_meta_value_class_to_menu_item( $classes, $item ) {
		$bold = get_field( 'bold', $item->ID );
		
		if ( ! empty( $bold ) ) {
			$classes[] = 'menu-item-bold';
		}
		
		return $classes;
	}
	
	public function add_prefix_to_menu_link( $item_output, $item, $depth, $args ) {
		$prefix = get_field( 'prefix', $item );
		if ( empty( $prefix ) ) {
			return $item_output;
		}
		
		$format      = '<span class="menu-item-prefix">%s</span>';
		$prefix      = sprintf( $format, $prefix );
		$item_output = preg_replace( '/(<a.*?>)/', $prefix . '$1', $item_output, 1 );
		
		return $item_output;
	}
	
	public function add_acf_image_to_menu_item_title( $title, $item, $args, $depth ) {
		$image = get_field( 'image', $item );
		
		if ( empty( $image ) ) {
			return $title;
		}
		
		$format = '%s<span>%s</span>';
		$image  = wp_get_attachment_image( $image, 'full' );
		$title  = sprintf( $format, $image, $title );
		
		return $title;
	}
}
