<?php
/**
 * Genesis Sample appearance settings.
 *
 * @package Webbviken Genesis Starter
 * @author  Jenny Ryden
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

$genesis_sample_default_colors = array(
	'link'   => '#2E8787',
	'accent' => '#E0773E',
);

$genesis_sample_link_color = get_theme_mod(
	'genesis_sample_link_color',
	$genesis_sample_default_colors['link']
);

$genesis_sample_accent_color = get_theme_mod(
	'genesis_sample_accent_color',
	$genesis_sample_default_colors['accent']
);

$genesis_sample_link_color_contrast   = genesis_sample_color_contrast( $genesis_sample_link_color );
$genesis_sample_link_color_brightness = genesis_sample_color_brightness( $genesis_sample_link_color, 35 );

return array(
	'fonts-url'            => 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,700&display=swap',
	'content-width'        => 1062,
	'button-bg'            => $genesis_sample_link_color,
	'button-color'         => $genesis_sample_link_color_contrast,
	'button-outline-hover' => $genesis_sample_link_color_brightness,
	'link-color'           => $genesis_sample_link_color,
	'default-colors'       => $genesis_sample_default_colors,
	'editor-color-palette' => array(
		array(
			'name'  => __( 'Custom color', 'webbviken-genesis-starter' ), // Called “Link Color” in the Customizer options. Renamed because “Link Color” implies it can only be used for links.
			'slug'  => 'theme-primary',
			'color' => $genesis_sample_link_color,
		),
		array(
			'name'  => __( 'Accent color', 'webbviken-genesis-starter' ),
			'slug'  => 'theme-secondary',
			'color' => $genesis_sample_accent_color,
		),
	),
	'editor-font-sizes'    => array(
		array(
			'name' => __( 'Small', 'webbviken-genesis-starter' ),
			'size' => 12,
			'slug' => 'small',
		),
		array(
			'name' => __( 'Normal', 'webbviken-genesis-starter' ),
			'size' => 18,
			'slug' => 'normal',
		),
		array(
			'name' => __( 'Large', 'webbviken-genesis-starter' ),
			'size' => 20,
			'slug' => 'large',
		),
		array(
			'name' => __( 'Larger', 'webbviken-genesis-starter' ),
			'size' => 24,
			'slug' => 'larger',
		),
	),
);
