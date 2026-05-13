<?php
/**
 * Abandoned Stroller theme functions and definitions.
 */

namespace Abandoned_Stroller;

/**
 * Load all files from the /inc directory.
 *
 * @return void
 */
function init(): void {
	foreach ( glob( get_stylesheet_directory() . '/inc/*.php' ) as $file ) {
		require_once $file;
	}
}
init();
