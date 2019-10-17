<?php


/**
 * List comments.
 *
 * Used in the comments.php template to list comments for a particular post.
 *
 * @since 2.7.0
 *
 * @see WP_Query->comments
 *
 * @global WP_Query $wp_query
 * @global int      $comment_alt
 * @global int      $comment_depth
 * @global int      $comment_thread_alt
 * @global bool     $overridden_cpage
 * @global bool     $in_comment_loop
 *
 * @param string|array $args {
 *     Optional. Formatting options.
 *
 *     @type object $walker            Instance of a Walker class to list comments. Default null.
 *     @type int    $max_depth         The maximum comments depth. Default empty.
 *     @type string $style             The style of list ordering. Default 'ul'. Accepts 'ul', 'ol'.
 *     @type string $callback          Callback function to use. Default null.
 *     @type string $end-callback      Callback function to use at the end. Default null.
 *     @type string $type              Type of comments to list.
 *                                     Default 'all'. Accepts 'all', 'comment', 'pingback', 'trackback', 'pings'.
 *     @type int    $page              Page ID to list comments for. Default empty.
 *     @type int    $per_page          Number of comments to list per page. Default empty.
 *     @type int    $avatar_size       Height and width dimensions of the avatar size. Default 32.
 *     @type bool   $reverse_top_level Ordering of the listed comments. If true, will display newest comments first.
 *     @type bool   $reverse_children  Whether to reverse child comments in the list. Default null.
 *     @type string $format            How to format the comments list.
 *                                     Default 'html5' if the theme supports it. Accepts 'html5', 'xhtml'.
 *     @type bool   $short_ping        Whether to output short pings. Default false.
 *     @type bool   $echo              Whether to echo the output or return it. Default true.
 * }
 * @param array $comments Optional. Array of WP_Comment objects.
 */
function wp_list_comments($args = array(), $comments = \null)
{
}