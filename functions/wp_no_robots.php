<?php


/**
 * Display a noindex meta tag.
 *
 * Outputs a noindex meta tag that tells web robots not to index the page content.
 * Typical usage is as a {@see 'wp_head'} callback. add_action( 'wp_head', 'wp_no_robots' );
 *
 * @since 3.3.0
 * @since 5.3.0 Echo "noindex,nofollow" if search engine visibility is discouraged.
 */
function wp_no_robots()
{
}