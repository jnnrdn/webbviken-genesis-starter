<?php
/**
 * Genesis Sample child theme.
 *
 * Theme supports.
 *
 * @package Webbviken Genesis Starter
 * @author  Jenny Ryden
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/genesis-sample/
 */

return array(
	'genesis-custom-logo'             => array(
		'height'      => 120,
		'width'       => 700,
		'flex-height' => true,
		'flex-width'  => true,
	),
	'html5'                           => array(
		'caption',
		'comment-form',
		'comment-list',
		'gallery',
		'navigation-widgets',
		'search-form',
		'script',
		'style',
	),
	'genesis-accessibility'           => array(
		'drop-down-menu',
		'headings',
		'search-form',
		'skip-links',
	),
	'genesis-after-entry-widget-area' => '',
	'genesis-footer-widgets'          => 3,
	'genesis-menus'                   => array(
		'primary'   => __( 'Header Menu', 'webbviken-genesis-starter' ),
		'secondary' => __( 'Footer Menu', 'webbviken-genesis-starter' ),
	),
);
