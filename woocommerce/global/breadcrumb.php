<?php
/**
 * Shop breadcrumb
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/breadcrumb.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     2.3.0
 * @see         woocommerce_breadcrumb()
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! empty( $breadcrumb ) ) {
	$newbreadcrumb = array();
	foreach ( $breadcrumb as $key => $crumb ) {
		if($key < 2){
			array_push($newbreadcrumb, $crumb);
		}
		if($key> count($breadcrumb) - 3){
			array_push($newbreadcrumb, $crumb);
		}
	}
// 	echo '<pre style="color: #000">';
// 	print_r($newbreadcrumb);
// echo '</pre>';
	echo $wrap_before;
	// for($i = 0; $i<count($breadcrumb); $i++){
	// 	echo $before;
	// 	switch ($i) {
	// 		case 0:
	// 			echo esc_html( $crumb[0] );
	// 		  break;
	// 		case count($breadcrumb)-2:
	// 			echo '<a href="' . esc_url( $crumb[count($breadcrumb)-2][1] ) . '">' . esc_html( $crumb[count($breadcrumb)-2][0] ) . '</a>';
	// 		  break;
	// 		case count($breadcrumb)-1:
	// 			echo '<a href="' . esc_url( $crumb[count($breadcrumb)-1][1] ) . '">' . esc_html( $crumb[count($breadcrumb)-1][0] ) . '</a>';
	// 		  break;
	// 		default:
	// 			echo "...";
	// 	  }
	// 	  echo $after;
	// 	if ( sizeof( $breadcrumb ) !== $i + 1 ) {
	// 		echo $delimiter;
	// 	}
	// }
	
	foreach ( $newbreadcrumb as $key => $crumb ) {

		echo $before;

		if ( ! empty( $crumb[1] ) && sizeof( $newbreadcrumb ) !== $key + 1 && $key ) {
			echo '<a href="' . esc_url( $crumb[1] ) . '">' . esc_html( $crumb[0] ) . '</a>';
		} else {
			echo esc_html( $crumb[0] );
		}

		echo $after;

		if ( sizeof( $newbreadcrumb ) !== $key + 1 ) {
			echo $delimiter;
		}
	}

	echo $wrap_after;

}