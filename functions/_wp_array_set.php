<?php


/**
 * Sets an array in depth based on a path of keys.
 *
 * It is the PHP equivalent of JavaScript's `lodash.set()` and mirroring it may help other components
 * retain some symmetry between client and server implementations.
 *
 * Example usage:
 *
 *     $array = array();
 *     _wp_array_set( $array, array( 'a', 'b', 'c', 1 ) );
 *
 *     $array becomes:
 *     array(
 *         'a' => array(
 *             'b' => array(
 *                 'c' => 1,
 *             ),
 *         ),
 *     );
 *
 * @internal
 *
 * @since 5.8.0
 * @access private
 *
 * @param array $array An array that we want to mutate to include a specific value in a path.
 * @param array $path  An array of keys describing the path that we want to mutate.
 * @param mixed $value The value that will be set.
 * @phpstan-return void
 */
function _wp_array_set(&$array, $path, $value = \null)
{
}