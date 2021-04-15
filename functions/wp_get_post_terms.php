<?php


/**
 * Retrieve the terms for a post.
 *
 * There is only one default for this function, called 'fields' and by default
 * is set to 'all'. There are other defaults that can be overridden in
 * wp_get_object_terms().
 *
 * @since 2.8.0
 *
 * @param int    $post_id  Optional. The Post ID. Does not default to the ID of the
 *                         global $post. Default 0.
 * @param string $taxonomy Optional. The taxonomy for which to retrieve terms. Default 'post_tag'.
 * @param array  $args     Optional. wp_get_object_terms() arguments. Default empty array.
 * @return array|WP_Error  List of post terms or empty array if no terms were found. WP_Error object
 *                         if `$taxonomy` doesn't exist.
 */
function wp_get_post_terms($post_id = 0, $taxonomy = 'post_tag', $args = array())
{
}