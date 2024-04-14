<?php


/**
 * Displays a `noindex` meta tag if required by the blog configuration.
 *
 * If a blog is marked as not being public then the `noindex` meta tag will be
 * output to tell web robots not to index the page content.
 *
 * Typical usage is as a {@see 'wp_head'} callback:
 *
 *     add_action( 'wp_head', 'noindex' );
 *
 * @see wp_no_robots()
 *
 * @since 2.1.0
 * @deprecated 5.7.0 Use wp_robots_noindex() instead on 'wp_robots' filter.
 */
function noindex()
{
}