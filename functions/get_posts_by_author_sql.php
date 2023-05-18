<?php


/**
 * Retrieves the post SQL based on capability, author, and type.
 *
 * @since 3.0.0
 * @since 4.3.0 Introduced the ability to pass an array of post types to `$post_type`.
 *
 * @see get_private_posts_cap_sql()
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string|string[] $post_type   Single post type or an array of post types.
 * @param bool            $full        Optional. Returns a full WHERE statement instead of just
 *                                     an 'andalso' term. Default true.
 * @param int             $post_author Optional. Query posts having a single author ID. Default null.
 * @param bool            $public_only Optional. Only return public posts. Skips cap checks for
 *                                     $current_user.  Default false.
 * @return string SQL WHERE code that can be added to a query.
 */
function get_posts_by_author_sql($post_type, $full = \true, $post_author = \null, $public_only = \false)
{
}