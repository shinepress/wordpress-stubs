<?php


/**
 * Retrieves the edit post link for post.
 *
 * Can be used within the WordPress loop or outside of it. Can be used with
 * pages, posts, attachments, and revisions.
 *
 * @since 2.3.0
 *
 * @param int|WP_Post $post    Optional. Post ID or post object. Default is the global `$post`.
 * @param string      $context Optional. How to output the '&' character. Default '&amp;'.
 * @return string|null The edit post link for the given post. Null if the post type does not exist
 *                     or does not allow an editing UI.
 */
function get_edit_post_link($post = 0, $context = 'display')
{
}