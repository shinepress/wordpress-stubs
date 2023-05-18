<?php


/**
 * Generates semantic classes for each comment element.
 *
 * @since 2.7.0
 * @since 4.4.0 Added the ability for `$comment` to also accept a WP_Comment object.
 *
 * @param string|array   $class    Optional. One or more classes to add to the class list.
 *                                 Default empty.
 * @param int|WP_Comment $comment  Comment ID or WP_Comment object. Default current comment.
 * @param int|WP_Post    $post_id  Post ID or WP_Post object. Default current post.
 * @param bool           $echo     Optional. Whether to echo or return the output.
 *                                 Default true.
 * @return void|string Void if `$echo` argument is true, comment classes if `$echo` is false.
 * @phpstan-return ($display is true ? void : string)
 */
function comment_class($class = '', $comment = \null, $post_id = \null, $echo = \true)
{
}