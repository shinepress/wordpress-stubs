<?php


/**
 * Displays a referrer strict-origin-when-cross-origin meta tag.
 *
 * Outputs a referrer origin-when-cross-origin meta tag that tells the browser not to send the full
 * url as a referrer to other sites when cross-origin assets are loaded.
 *
 * Typical usage is as a wp_head callback. add_action( 'wp_head', 'wp_strict_cross_origin_referrer' );
 *
 * @since 5.7.0
 */
function wp_strict_cross_origin_referrer()
{
}