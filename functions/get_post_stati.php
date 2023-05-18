<?php


/**
 * Get a list of post statuses.
 *
 * @since 3.0.0
 *
 * @global array $wp_post_statuses List of post statuses.
 *
 * @see register_post_status()
 *
 * @param array|string $args     Optional. Array or string of post status arguments to compare against
 *                               properties of the global `$wp_post_statuses objects`. Default empty array.
 * @param string       $output   Optional. The type of output to return, either 'names' or 'objects'. Default 'names'.
 * @param string       $operator Optional. The logical operation to perform. 'or' means only one element
 *                               from the array needs to match; 'and' means all elements must match.
 *                               Default 'and'.
 * @return array A list of post status names or objects.
 * @phpstan-return ($output is 'names' ? array<string, string> : array<string, \stdClass>)
 */
function get_post_stati($args = array(), $output = 'names', $operator = 'and')
{
}