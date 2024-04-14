<?php


/**
 * Add count of children to parent count.
 *
 * Recalculates term counts by including items from child terms. Assumes all
 * relevant children are already in the $terms argument.
 *
 * @access private
 * @since 2.3.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param array  $terms    List of term objects (passed by reference).
 * @param string $taxonomy Term context.
 * @phpstan-return void
 */
function _pad_term_counts(&$terms, $taxonomy)
{
}