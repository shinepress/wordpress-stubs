<?php


/**
 * Filters a list of objects, based on a set of key => value arguments.
 *
 * @since 3.1.0
 * @since 4.7.0 Uses `WP_List_Util` class.
 *
 * @param array  $list     An array of objects to filter.
 * @param array  $args     Optional. An array of key => value arguments to match
 *                         against each object. Default empty array.
 * @param string $operator Optional. The logical operation to perform. 'AND' means
 *                         all elements from the array must match. 'OR' means only
 *                         one element needs to match. 'NOT' means no elements may
 *                         match. Default 'AND'.
 * @return array Array of found values.
 */
function wp_list_filter($list, $args = array(), $operator = 'AND')
{
}