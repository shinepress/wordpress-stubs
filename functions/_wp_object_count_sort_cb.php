<?php


/**
 * Serves as a callback for comparing objects based on count.
 *
 * Used with `uasort()`.
 *
 * @since 3.1.0
 * @access private
 *
 * @param object $a The first object to compare.
 * @param object $b The second object to compare.
 * @return bool Whether the count value for `$a` is greater than the count value for `$b`.
 */
function _wp_object_count_sort_cb($a, $b)
{
}