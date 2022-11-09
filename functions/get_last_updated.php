<?php


/**
 * Get a list of most recently updated blogs.
 *
 * @since MU (3.0.0)
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param mixed $deprecated Not used.
 * @param int   $start      Optional. Number of blogs to offset the query. Used to build LIMIT clause.
 *                          Can be used for pagination. Default 0.
 * @param int   $quantity   Optional. The maximum number of blogs to retrieve. Default 40.
 * @return array The list of blogs.
 */
function get_last_updated($deprecated = '', $start = 0, $quantity = 40)
{
}