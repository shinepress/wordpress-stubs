<?php


/**
 * Sorts a list of objects, based on one or more orderby arguments.
 *
 * @since 4.7.0
 *
 * @param array        $list          An array of objects to filter.
 * @param string|array $orderby       Optional. Either the field name to order by or an array
 *                                    of multiple orderby fields as $orderby => $order.
 * @param string       $order         Optional. Either 'ASC' or 'DESC'. Only used if $orderby
 *                                    is a string.
 * @param bool         $preserve_keys Optional. Whether to preserve keys. Default false.
 * @return array The sorted array.
 */
function wp_list_sort($list, $orderby = array(), $order = 'ASC', $preserve_keys = \false)
{
}