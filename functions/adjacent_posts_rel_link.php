<?php


/**
 * Displays the relational links for the posts adjacent to the current post.
 *
 * @since 2.8.0
 *
 * @param string       $title          Optional. Link title format. Default '%title'.
 * @param bool         $in_same_term   Optional. Whether link should be in the same taxonomy term.
 *                                     Default false.
 * @param int[]|string $excluded_terms Optional. Array or comma-separated list of excluded term IDs.
 *                                     Default empty.
 * @param string       $taxonomy       Optional. Taxonomy, if `$in_same_term` is true. Default 'category'.
 */
function adjacent_posts_rel_link($title = '%title', $in_same_term = \false, $excluded_terms = '', $taxonomy = 'category')
{
}