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
 * @return int Negative number if `$a->count` is less than `$b->count`, zero if they are equal,
 *             or greater than zero if `$a->count` is greater than `$b->count`.
 */
function _wp_object_count_sort_cb($a, $b)
{
}