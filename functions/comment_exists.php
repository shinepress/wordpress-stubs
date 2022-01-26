<?php


/**
 * WordPress Comment Administration API.
 *
 * @package WordPress
 * @subpackage Administration
 * @since 2.3.0
 */
/**
 * Determine if a comment exists based on author and date.
 *
 * For best performance, use `$timezone = 'gmt'`, which queries a field that is properly indexed. The default value
 * for `$timezone` is 'blog' for legacy reasons.
 *
 * @since 2.0.0
 * @since 4.4.0 Added the `$timezone` parameter.
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string $comment_author Author of the comment.
 * @param string $comment_date   Date of the comment.
 * @param string $timezone       Timezone. Accepts 'blog' or 'gmt'. Default 'blog'.
 * @return string|null Comment post ID on success.
 */
function comment_exists($comment_author, $comment_date, $timezone = 'blog')
{
}