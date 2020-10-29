<?php


/**
 * Determines whether a post is sticky.
 *
 * Sticky posts should remain at the top of The Loop. If the post ID is not
 * given, then The Loop ID for the current post will be used.
 * 
 * For more information on this and similar theme functions, check out
 * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/ 
 * Conditional Tags} article in the Theme Developer Handbook.
 * 
 * @since 2.7.0
 *
 * @param int $post_id Optional. Post ID. Default is ID of the global $post.
 * @return bool Whether post is sticky.
 */
function is_sticky($post_id = 0)
{
}