<?php
add_action( 'acf/init', 'my_acf_op_init' );
function my_acf_op_init() {

	// Check function exists.
	if ( function_exists( 'acf_add_options_page' ) ) {

		// Add parent.
		$parent = acf_add_options_page( array(
			'page_title' => __( 'Theme Options' ),
			'menu_title' => __( 'Theme Options' ),
			'redirect'   => true,
		) );

		// Add sub page.
		$child = acf_add_options_page( array(
			'page_title'  => __( 'Herader' ),
			'menu_title'  => __( 'Herader' ),
			'parent_slug' => $parent['menu_slug'],
		) );

		// Add sub page.
		$child = acf_add_options_page( array(
			'page_title'  => __( 'Ads' ),
			'menu_title'  => __( 'Ads' ),
			'parent_slug' => $parent['menu_slug'],
		) );

		// Add sub page.
		$child = acf_add_options_page( array(
			'page_title'  => __( 'Contact' ),
			'menu_title'  => __( 'Contact' ),
			'parent_slug' => $parent['menu_slug'],
		) );

		// Add sub page.
		$child = acf_add_options_page( array(
			'page_title'  => __( 'Footer' ),
			'menu_title'  => __( 'Footer' ),
			'parent_slug' => $parent['menu_slug'],
		) );
	}
}