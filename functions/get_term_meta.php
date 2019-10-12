<?php


/**
 * Retrieves metadata for a term.
 *
 * @since 4.4.0
 *
 * @param int    $term_id Term ID.
 * @param string $key     Optional. The meta key to retrieve. If no key is provided, fetches all metadata for the term.
 * @param bool   $single  Whether to return a single value. If false, an array of all values matching the
 *                        `$term_id`/`$key` pair will be returned. Default: false.
 * @return mixed If `$single` is false, an array of metadata values. If `$single` is true, a single metadata value.
 */
function get_term_meta($term_id, $key = '', $single = \false)
{
}