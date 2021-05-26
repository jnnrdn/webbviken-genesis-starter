<?php
/**
 * Webbviken Genesis Starter.
 *
 * This file adds the sales page template to the Webbviken Genesis Starter Theme.
 *
 * Template Name: Sales Page
 *
 * @package Webbviken Genesis Starter
 * @author  Jenny Ryden
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

add_filter( 'body_class', 'wgs_landing_body_class' );
/**
 * Adds landing page body class.
 *
 * @since 1.0.0
 *
 * @param array $classes Original body classes.
 * @return array Modified body classes.
 */
function wgs_landing_body_class( $classes ) {

	$classes[] = 'sales-page';
	return $classes;

}

// Removes entry header
remove_action( 'genesis_entry_header', 'genesis_do_post_title' );


// Runs the Genesis loop.
genesis();
