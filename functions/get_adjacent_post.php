<?php


/**
 * Retrieves the adjacent post.
 *
 * Can either be next or previous post.
 *
 * @since 2.5.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param bool         $in_same_term   Optional. Whether post should be in the same taxonomy term.
 *                                     Default false.
 * @param int[]|string $excluded_terms Optional. Array or comma-separated list of excluded term IDs.
 *                                     Default empty string.
 * @param bool         $previous       Optional. Whether to retrieve previous post.
 *                                     Default true.
 * @param string       $taxonomy       Optional. Taxonomy, if `$in_same_term` is true. Default 'category'.
 * @return WP_Post|null|string Post object if successful. Null if global `$post` is not set.
 *                             Empty string if no corresponding post exists.
 */
function get_adjacent_post($in_same_term = \false, $excluded_terms = '', $previous = \true, $taxonomy = 'category')
{
}