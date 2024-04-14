<?php


/**
 * Maintains a canonical list of terms by syncing terms created for each blog with the global terms table.
 *
 * @since 3.0.0
 *
 * @see term_id_filter
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 * @staticvar int $global_terms_recurse
 *
 * @param int    $term_id    An ID for a term on the current blog.
 * @param string $deprecated Not used.
 * @return int An ID from the global terms table mapped from $term_id.
 */
function global_terms($term_id, $deprecated = '')
{
}