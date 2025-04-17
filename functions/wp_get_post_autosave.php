<?php


/**
 * Retrieves the autosaved data of the specified post.
 *
 * Returns a post object with the information that was autosaved for the specified post.
 * If the optional $user_id is passed, returns the autosave for that user, otherwise
 * returns the latest autosave.
 *
 * @since 2.6.0
 *
 * @param int $post_id The post ID.
 * @param int $user_id Optional. The post author ID. Default 0.
 * @return WP_Post|false The autosaved data or false on failure or when no autosave exists.
 */
function wp_get_post_autosave($post_id, $user_id = 0)
{
}