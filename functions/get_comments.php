<?php


/**
 * Retrieves a list of comments.
 *
 * The comment list can be for the blog as a whole or for an individual post.
 *
 * @since 2.7.0
 *
 * @param string|array $args Optional. Array or string of arguments. See WP_Comment_Query::__construct()
 *                           for information on accepted arguments. Default empty.
 * @return WP_Comment[]|int[]|int List of comments or number of found comments if `$count` argument is true.
 */
function get_comments($args = '')
{
}