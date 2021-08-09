<?php

// Main Navigation
if ( ! function_exists ( 'cwd_base_nav' ) ) {
	function cwd_base_nav() {

		$menu_options = get_field('main_nav_options', 'options');
		$menu_depth = $menu_options['menu_depth'];

		wp_nav_menu(
		array(
			'theme_location'  => 'primary',
			'menu'            => '',
			'container'       => false,
			'container_class' => '',
			'container_id'    => '',
			'menu_class'      => '',
			'menu_id'         => '',
			'echo'            => true,
			'fallback_cb'     => false,
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '<ul class="list-menu links">%3$s</ul>',
			'depth'           => $menu_depth,
			'walker'          => ''
			)
		);
	}
}

// Top Navigation
if ( ! function_exists ( 'cwd_base_nav_top' ) ) {
	function cwd_base_nav_top() {
		wp_nav_menu(
		array(
			'theme_location'  => 'top-menu',
			'menu'            => '',
			'container'       => false,
			'container_class' => '',
			'container_id'    => '',
			'menu_class'      => '',
			'menu_id'         => '',
			'echo'            => true,
			'fallback_cb'     => false,
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '<ul class="list-menu links">%3$s</ul>',
			'depth'           => 1,
			'walker'          => ''
			)
		);
	}
}

// Footer Quick Links 1
if ( ! function_exists ( 'cwd_base_nav_footer1' ) ) {
	function cwd_base_nav_footer1() {
		wp_nav_menu(
		array(
			'theme_location'  => 'footer-menu-1',
			'menu'            => '',
			'container'       => false,
			'container_class' => '',
			'container_id'    => '',
			'menu_class'      => '',
			'menu_id'         => '',
			'echo'            => true,
			'fallback_cb'     => false,
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '<ul class="list-menu vertical">%3$s</ul>',
			'depth'           => 1,
			'walker'          => ''
			)
		);
	}
}

// Footer Quick Links 2
if ( ! function_exists ( 'cwd_base_nav_footer2' ) ) {
	function cwd_base_nav_footer2() {
		wp_nav_menu(
		array(
			'theme_location'  => 'footer-menu-2',
			'menu'            => '',
			'container'       => false,
			'container_class' => '',
			'container_id'    => '',
			'menu_class'      => '',
			'menu_id'         => '',
			'echo'            => true,
			'fallback_cb'     => false,
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '<ul class="list-menu vertical">%3$s</ul>',
			'depth'           => 1,
			'walker'          => ''
			)
		);
	}
}

// Subfooter Links
if ( ! function_exists ( 'cwd_base_nav_subfooter' ) ) {
	function cwd_base_nav_subfooter() {
		wp_nav_menu(
		array(
			'theme_location'  => 'subfooter-menu',
			'menu'            => '',
			'container'       => false,
			'container_class' => '',
			'container_id'    => '',
			'menu_class'      => '',
			'menu_id'         => '',
			'echo'            => true,
			'fallback_cb'     => false,
			'before'          => '<h2 class="h4">Footer Primary</h2>',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '<ul class="list-menu">%3$s</ul>',
			'depth'           => 1,
			'walker'          => ''
			)
		);
	}
}

// Get nav menu object
if ( ! function_exists ( 'cwd_base_get_menu_by_location' ) ) {
	
	function cwd_base_get_menu_by_location( $location ) {
		if( empty($location) ) return false;

		$locations = get_nav_menu_locations();
		if( ! isset( $locations[$location] ) ) return false;

		$menu_obj = get_term( $locations[$location], 'nav_menu' );

		return $menu_obj;
	}
}

// Add menu item descriptions (only top-level main menu items)
function cwd_base_header_menu_desc( $item_output, $item, $depth, $args ) {
	
	if( 'header-menu' == $args->theme_location && ! $depth && $item->description )
		$item_output = str_replace( '</a>', '<span class="description">' . $item->description . '</span></a>', $item_output );
		
	return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'cwd_base_header_menu_desc', 10, 4 );