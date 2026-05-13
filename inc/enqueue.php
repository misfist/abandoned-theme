<?php
/**
 * Asset enqueuing for the Abandoned Stroller theme.
 */

namespace Abandoned_Stroller;

/**
 * Enqueue frontend scripts and styles.
 *
 * @return void
 */
function enqueue_assets(): void {
	$asset_path = get_stylesheet_directory() . '/build/index.asset.php';

	if ( ! file_exists( $asset_path ) ) {
		return;
	}

	$asset = include $asset_path;

	wp_enqueue_style(
		'abandoned-stroller-style',
		get_stylesheet_directory_uri() . '/build/index.css',
		[],
		$asset['version']
	);

	wp_enqueue_script(
		'abandoned-stroller-script',
		get_stylesheet_directory_uri() . '/build/index.js',
		$asset['dependencies'],
		$asset['version'],
		true
	);
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_assets' );

/**
 * Enqueue block editor scripts and styles.
 *
 * @return void
 */
function enqueue_editor_assets(): void {
	$asset_path = get_stylesheet_directory() . '/build/editor.asset.php';

	if ( ! file_exists( $asset_path ) ) {
		return;
	}

	$asset = include $asset_path;

	wp_enqueue_style(
		'abandoned-stroller-editor-style',
		get_stylesheet_directory_uri() . '/build/editor.css',
		[],
		$asset['version']
	);

	wp_enqueue_script(
		'abandoned-stroller-editor-script',
		get_stylesheet_directory_uri() . '/build/editor.js',
		$asset['dependencies'],
		$asset['version'],
		true
	);
}
add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\enqueue_editor_assets' );
