<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
remove_all_filters( 'woocommerce_after_single_product_summary');


/*add_filter( 'woocommerce_enqueue_styles', 'estore_dequeue_styles', 1 );
function estore_dequeue_styles( $enqueue_styles ) {
	
	
	//unset( $enqueue_styles['woocommerce-general'] );	// Remove the gloss
	unset( $enqueue_styles['woocommerce-layout'] );
	unset( $enqueue_styles['woocommerce-smallscreen'] );
	//$enqueue_styles['woocommerce-general']['deps'] = array('bootsrap-style');
	//get_vd($enqueue_styles);
	return $enqueue_styles;
}*/

