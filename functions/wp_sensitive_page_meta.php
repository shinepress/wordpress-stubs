<?php


/**
 * Display a noindex,noarchive meta tag and referrer origin-when-cross-origin meta tag.
 *
 * Outputs a noindex,noarchive meta tag that tells web robots not to index or cache the page content.
 * Outputs a referrer origin-when-cross-origin meta tag that tells the browser not to send the full
 * url as a referrer to other sites when cross-origin assets are loaded.
 *
 * Typical usage is as a wp_head callback. add_action( 'wp_head', 'wp_sensitive_page_meta' );
 *
 * @since 5.0.0
 */
function wp_sensitive_page_meta()
{
}