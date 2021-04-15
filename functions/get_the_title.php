<?php


/**
 * Retrieve post title.
 *
 * If the post is protected and the visitor is not an admin, then "Protected"
 * will be displayed before the post title. If the post is private, then
 * "Private" will be located before the post title.
 *
 * @since 0.71
 *
 * @param int|WP_Post $post Optional. Post ID or WP_Post object. Default is global $post.
 * @return string
 */
function get_the_title($post = 0)
{
}