<?php


/**
 * Update a post with new post data.
 *
 * The date does not have to be set for drafts. You can set the date and it will
 * not be overridden.
 *
 * @since 1.0.0
 *
 * @param array|object $postarr  Optional. Post data. Arrays are expected to be escaped,
 *                               objects are not. Default array.
 * @param bool         $wp_error Optional. Allow return of WP_Error on failure. Default false.
 * @return int|WP_Error The value 0 or WP_Error on failure. The post ID on success.
 * @phpstan-return ($wp_error is false ? 0|positive-int : positive-int|\WP_Error)
 */
function wp_update_post($postarr = array(), $wp_error = \false)
{
}