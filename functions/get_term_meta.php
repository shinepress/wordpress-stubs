<?php


/**
 * Retrieves metadata for a term.
 *
 * @since 4.4.0
 *
 * @param int    $term_id Term ID.
 * @param string $key     Optional. The meta key to retrieve. By default,
 *                        returns data for all keys. Default empty.
 * @param bool   $single  Optional. Whether to return a single value.
 *                        This parameter has no effect if $key is not specified.
 *                        Default false.
 * @return mixed An array if $single is false. The value of the meta field
 *               if $single is true. False for an invalid $term_id.
 */
function get_term_meta($term_id, $key = '', $single = \false)
{
}