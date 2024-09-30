<?php


/**
 * Creates autosave data for the specified post from `$_POST` data.
 *
 * @since 2.6.0
 *
 * @param array|int $post_data Associative array containing the post data, or integer post ID.
 *                             If a numeric post ID is provided, will use the `$_POST` superglobal.
 * @return int|WP_Error The autosave revision ID. WP_Error or 0 on error.
 */
function wp_create_post_autosave($post_data)
{
}