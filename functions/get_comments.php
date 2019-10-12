<?php


/**
 * Retrieve a list of comments.
 *
 * The comment list can be for the blog as a whole or for an individual post.
 *
 * @since 2.7.0
 *
 * @param string|array $args Optional. Array or string of arguments. See WP_Comment_Query::parse_query()
 *                           for information on accepted arguments. Default empty.
 * @return int|array List of comments or number of found comments if `$count` argument is true.
 */
function get_comments($args = '')
{
}