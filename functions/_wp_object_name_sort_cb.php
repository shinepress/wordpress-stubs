<?php


/**
 * Serves as a callback for comparing objects based on name.
 *
 * Used with `uasort()`.
 *
 * @since 3.1.0
 * @access private
 *
 * @param object $a The first object to compare.
 * @param object $b The second object to compare.
 * @return int Negative number if `$a->name` is less than `$b->name`, zero if they are equal,
 *             or greater than zero if `$a->name` is greater than `$b->name`.
 */
function _wp_object_name_sort_cb($a, $b)
{
}