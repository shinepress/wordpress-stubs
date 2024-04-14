<?php


/**
 * Link/Bookmark API
 *
 * @package WordPress
 * @subpackage Bookmark
 */
/**
 * Retrieve Bookmark data
 *
 * @since 2.1.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int|stdClass $bookmark
 * @param string       $output   Optional. The required return type. One of OBJECT, ARRAY_A, or ARRAY_N, which
 *                               correspond to an stdClass object, an associative array, or a numeric array,
 *                               respectively. Default OBJECT.
 * @param string       $filter   Optional. How to sanitize bookmark fields. Default 'raw'.
 * @return array|object|null Type returned depends on $output value.
 * @phpstan-param 'OBJECT'|'ARRAY_A'|'ARRAY_N' $output
 * @phpstan-return null|($output is 'ARRAY_A' ? array<string, mixed> : ($output is 'ARRAY_N' ? array<int, mixed> : \stdClass))
 */
function get_bookmark($bookmark, $output = \OBJECT, $filter = 'raw')
{
}