<?php
/**
 * Theme: Color Filter for overriding the colors schemes in a child theme
 *
 * @package Theme
 * @subpackage themecustom
 * @since 1.0
 */

/**
 * Define default color filters.
 */

define( 'THEMECUSTOM_DEFAULT_HUE', 199 );        // H
define( 'THEMECUSTOM_DEFAULT_SATURATION', 100 ); // S
define( 'THEMECUSTOM_DEFAULT_LIGHTNESS', 33 );   // L

define( 'THEMECUSTOM_DEFAULT_SATURATION_SELECTION', 50 );
define( 'THEMECUSTOM_DEFAULT_LIGHTNESS_SELECTION', 90 );
define( 'THEMECUSTOM_DEFAULT_LIGHTNESS_HOVER', 23 );

/**
 * The default hue (as in hsl) used for the primary color throughout this theme
 *
 * @return number the default hue
 */
function themecustom_get_default_hue() {
	return apply_filters( 'THEMECUSTOM_DEFAULT_hue', THEMECUSTOM_DEFAULT_HUE );
}

/**
 * The default saturation (as in hsl) used for the primary color throughout this theme
 *
 * @return number the default saturation
 */
function themecustom_get_default_saturation() {
	return apply_filters( 'THEMECUSTOM_DEFAULT_saturation', THEMECUSTOM_DEFAULT_SATURATION );
}

/**
 * The default lightness (as in hsl) used for the primary color throughout this theme
 *
 * @return number the default lightness
 */
function themecustom_get_default_lightness() {
	return apply_filters( 'THEMECUSTOM_DEFAULT_lightness', THEMECUSTOM_DEFAULT_LIGHTNESS );
}

/**
 * The default saturation (as in hsl) used when selecting text throughout this theme
 *
 * @return number the default saturation selection
 */
function themecustom_get_default_saturation_selection() {
	return apply_filters( 'THEMECUSTOM_DEFAULT_saturation_selection', THEMECUSTOM_DEFAULT_SATURATION_SELECTION );
}

/**
 * The default lightness (as in hsl) used when selecting text throughout this theme
 *
 * @return number the default lightness selection
 */
function themecustom_get_default_lightness_selection() {
	return apply_filters( 'THEMECUSTOM_DEFAULT_lightness_selection', THEMECUSTOM_DEFAULT_LIGHTNESS_SELECTION );
}

/**
 * The default lightness hover (as in hsl) used when hovering over links throughout this theme
 *
 * @return number the default lightness hover
 */
function themecustom_get_default_lightness_hover() {
	return apply_filters( 'THEMECUSTOM_DEFAULT_lightness_hover', THEMECUSTOM_DEFAULT_LIGHTNESS_HOVER );
}

function themecustom_has_custom_default_hue() {
	return themecustom_get_default_hue() !== THEMECUSTOM_DEFAULT_HUE;
}
