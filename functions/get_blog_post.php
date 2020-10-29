<?php


/**
 * Gets a blog post from any site on the network.
 *
 * This function is similar to get_post(), except that it can retrieve a post
 * from any site on the network, not just the current site.
 *
 * @since MU (3.0.0)
 *
 * @param int $blog_id ID of the blog.
 * @param int $post_id ID of the post being looked for.
 * @return WP_Post|null WP_Post object on success, null on failure
 */
function get_blog_post($blog_id, $post_id)
{
}