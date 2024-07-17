<?php


/**
 * WordPress Query API
 *
 * The query API attempts to get which part of WordPress the user is on. It
 * also provides functionality for getting URL query information.
 *
 * @link https://developer.wordpress.org/themes/basics/the-loop/ More information on The Loop.
 *
 * @package WordPress
 * @subpackage Query
 */
/**
 * Retrieves the value of a query variable in the WP_Query class.
 *
 * @since 1.5.0
 * @since 3.9.0 The `$default_value` argument was introduced.
 *
 * @global WP_Query $wp_query WordPress Query object.
 *
 * @param string $query_var     The variable key to retrieve.
 * @param mixed  $default_value Optional. Value to return if the query variable is not set.
 *                              Default empty string.
 * @return mixed Contents of the query variable.
 */
function get_query_var($query_var, $default_value = '')
{
}