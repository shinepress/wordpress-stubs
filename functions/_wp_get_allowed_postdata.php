<?php


/**
 * Returns only allowed post data fields.
 *
 * @since 5.0.1
 *
 * @param array|WP_Error|null $post_data The array of post data to process, or an error object.
 *                                       Defaults to the `$_POST` superglobal.
 * @return array|WP_Error Array of post data on success, WP_Error on failure.
 */
function _wp_get_allowed_postdata($post_data = \null)
{
}