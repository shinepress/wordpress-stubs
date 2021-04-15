<?php


/**
 * Filters a list of objects, based on a set of key => value arguments.
 *
 * @since 3.0.0
 * @since 4.7.0 Uses WP_List_Util class.
 *
 * @param array       $list     An array of objects to filter
 * @param array       $args     Optional. An array of key => value arguments to match
 *                              against each object. Default empty array.
 * @param string      $operator Optional. The logical operation to perform. 'or' means
 *                              only one element from the array needs to match; 'and'
 *                              means all elements must match; 'not' means no elements may
 *                              match. Default 'and'.
 * @param bool|string $field    A field from the object to place instead of the entire object.
 *                              Default false.
 * @return array A list of objects or object fields.
 */
function wp_filter_object_list($list, $args = array(), $operator = 'and', $field = \false)
{
}