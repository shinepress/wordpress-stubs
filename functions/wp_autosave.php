<?php


/**
 * Saves a post submitted with XHR.
 *
 * Intended for use with heartbeat and autosave.js
 *
 * @since 3.9.0
 *
 * @param array $post_data Associative array of the submitted post data.
 * @return mixed The value 0 or WP_Error on failure. The saved post ID on success.
 *               The ID can be the draft post_id or the autosave revision post_id.
 */
function wp_autosave($post_data)
{
}