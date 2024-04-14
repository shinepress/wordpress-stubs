<?php


/**
 * Adds the necessary JavaScript to communicate with the embedded iframes.
 *
 * This function is no longer used directly. For back-compat it exists exclusively as a way to indicate that the oEmbed
 * host JS _should_ be added. In `default-filters.php` there remains this code:
 *
 *     add_action( 'wp_head', 'wp_oembed_add_host_js' )
 *
 * Historically a site has been able to disable adding the oEmbed host script by doing:
 *
 *     remove_action( 'wp_head', 'wp_oembed_add_host_js' )
 *
 * In order to ensure that such code still works as expected, this function remains. There is now a `has_action()` check
 * in `wp_maybe_enqueue_oembed_host_js()` to see if `wp_oembed_add_host_js()` has not been unhooked from running at the
 * `wp_head` action.
 *
 * @since 4.4.0
 * @deprecated 5.9.0 Use {@see wp_maybe_enqueue_oembed_host_js()} instead.
 */
function wp_oembed_add_host_js()
{
}