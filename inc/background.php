<?php
/**
 * Background image handling for the Abandoned Stroller theme.
 */

namespace Abandoned_Stroller;

/**
 * Output the site background image as a CSS custom property.
 *
 * Reads the merged global styles so any image set via the Site Editor
 * is reflected automatically on the frontend.
 *
 * @return void
 */
function output_background_image_var(): void {
	$styles = wp_get_global_styles( [ 'background' ] );
	$url    = $styles['backgroundImage']['url'] ?? '';

	if ( empty( $url ) ) {
		return;
	}

	if ( str_starts_with( $url, 'file:./' ) ) {
		$url = get_stylesheet_directory_uri() . '/' . substr( $url, 7 );
	}

	printf(
		'<style>:root { --as-background-image: url("%s"); }</style>',
		esc_url( $url )
	);
}
add_action( 'wp_head', __NAMESPACE__ . '\output_background_image_var' );
