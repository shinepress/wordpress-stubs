<?php


/**
 * Retrieve the tags for a post.
 *
 * There is only one default for this function, called 'fields' and by default
 * is set to 'all'. There are other defaults that can be overridden in
 * wp_get_object_terms().
 *
 * @since 2.3.0
 *
 * @param int   $post_id Optional. The Post ID. Does not default to the ID of the
 *                       global $post. Default 0.
 * @param array $args Optional. Overwrite the defaults
 * @return array List of post tags.
 */
function wp_get_post_tags($post_id = 0, $args = array())
{
}