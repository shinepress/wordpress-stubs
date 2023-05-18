<?php


/**
 * WordPress List utility class
 *
 * @package WordPress
 * @since 4.7.0
 */
/**
 * List utility.
 *
 * Utility class to handle operations on an array of objects.
 *
 * @since 4.7.0
 */
class WP_List_Util
{
    /**
     * Constructor.
     *
     * Sets the input array.
     *
     * @since 4.7.0
     *
     * @param array $input Array to perform operations on.
     */
    public function __construct($input)
    {
    }
    /**
     * Returns the original input array.
     *
     * @since 4.7.0
     *
     * @return array The input array.
     */
    public function get_input()
    {
    }
    /**
     * Returns the output array.
     *
     * @since 4.7.0
     *
     * @return array The output array.
     */
    public function get_output()
    {
    }
    /**
     * Filters the list, based on a set of key => value arguments.
     *
     * @since 4.7.0
     *
     * @param array  $args     Optional. An array of key => value arguments to match
     *                         against each object. Default empty array.
     * @param string $operator Optional. The logical operation to perform. 'AND' means
     *                         all elements from the array must match. 'OR' means only
     *                         one element needs to match. 'NOT' means no elements may
     *                         match. Default 'AND'.
     * @return array Array of found values.
     */
    public function filter($args = array(), $operator = 'AND')
    {
    }
    /**
     * Plucks a certain field out of each object in the list.
     *
     * This has the same functionality and prototype of
     * array_column() (PHP 5.5) but also supports objects.
     *
     * @since 4.7.0
     *
     * @param int|string $field     Field from the object to place instead of the entire object
     * @param int|string $index_key Optional. Field from the object to use as keys for the new array.
     *                              Default null.
     * @return array Array of found values. If `$index_key` is set, an array of found values with keys
     *               corresponding to `$index_key`. If `$index_key` is null, array keys from the original
     *               `$list` will be preserved in the results.
     */
    public function pluck($field, $index_key = \null)
    {
    }
    /**
     * Sorts the list, based on one or more orderby arguments.
     *
     * @since 4.7.0
     *
     * @param string|array $orderby       Optional. Either the field name to order by or an array
     *                                    of multiple orderby fields as $orderby => $order.
     * @param string       $order         Optional. Either 'ASC' or 'DESC'. Only used if $orderby
     *                                    is a string.
     * @param bool         $preserve_keys Optional. Whether to preserve keys. Default false.
     * @return array The sorted array.
     */
    public function sort($orderby = array(), $order = 'ASC', $preserve_keys = \false)
    {
    }
}