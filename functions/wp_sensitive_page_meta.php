<?php


/**
 * Display a `noindex,noarchive` meta tag and referrer `strict-origin-when-cross-origin` meta tag.
 *
 * Outputs a `noindex,noarchive` meta tag that tells web robots not to index or cache the page content.
 * Outputs a referrer `strict-origin-when-cross-origin` meta tag that tells the browser not to send
 * the full URL as a referrer to other sites when cross-origin assets are loaded.
 *
 * Typical usage is as a {@see 'wp_head'} callback:
 *
 *     add_action( 'wp_head', 'wp_sensitive_page_meta' );
 *
 * @since 5.0.1
 * @deprecated 5.7.0 Use wp_robots_sensitive_page() instead on 'wp_robots' filter
 *                   and wp_strict_cross_origin_referrer() on 'wp_head' action.
 *
 * @see wp_robots_sensitive_page()
 */
function wp_sensitive_page_meta()
{
}