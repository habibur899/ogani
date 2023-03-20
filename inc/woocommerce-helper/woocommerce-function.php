<?php
/**
 * Change number or products per row to 3
 */
if ( ! function_exists( 'loop_columns' ) ) {
	function loop_columns() {
		return 3; // 3 products per row
	}
}
add_filter( 'loop_shop_columns', 'loop_columns', 999 );