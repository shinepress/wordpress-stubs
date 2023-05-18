<?php


/**
 * Accesses an array in depth based on a path of keys.
 *
 * It is the PHP equivalent of JavaScript's `lodash.get()` and mirroring it may help other components
 * retain some symmetry between client and server implementations.
 *
 * Example usage:
 *
 *     $array = array(
 *         'a' => array(
 *             'b' => array(
 *                 'c' => 1,
 *             ),
 *         ),
 *     );
 *     _wp_array_get( $array, array( 'a', 'b', 'c' ) );
 *
 * @internal
 *
 * @since 5.6.0
 * @access private
 *
 * @param array $array   An array from which we want to retrieve some information.
 * @param array $path    An array of keys describing the path with which to retrieve information.
 * @param mixed $default Optional. The return value if the path does not exist within the array,
 *                       or if `$array` or `$path` are not arrays. Default null.
 * @return mixed The value from the path specified.
 */
function _wp_array_get($array, $path, $default = \null)
{
}