<?php


/**
 * Retrieves the next post that is adjacent to the current post.
 *
 * @since 1.5.0
 *
 * @param bool         $in_same_term   Optional. Whether post should be in the same taxonomy term.
 *                                     Default false.
 * @param int[]|string $excluded_terms Optional. Array or comma-separated list of excluded term IDs.
 *                                     Default empty.
 * @param string       $taxonomy       Optional. Taxonomy, if `$in_same_term` is true. Default 'category'.
 * @return WP_Post|null|string Post object if successful. Null if global `$post` is not set.
 *                             Empty string if no corresponding post exists.
 */
function get_next_post($in_same_term = \false, $excluded_terms = '', $taxonomy = 'category')
{
}