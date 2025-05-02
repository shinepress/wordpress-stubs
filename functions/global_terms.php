<?php


/**
 * Maintains a canonical list of terms by syncing terms created for each blog with the global terms table.
 *
 * @since 3.0.0
 * @since 6.1.0 This function no longer does anything.
 * @deprecated 6.1.0
 *
 * @param int    $term_id    An ID for a term on the current blog.
 * @param string $deprecated Not used.
 * @return int An ID from the global terms table mapped from $term_id.
 */
function global_terms($term_id, $deprecated = '')
{
}