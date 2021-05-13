<?php


/**
 * Displays the next post link that is adjacent to the current post.
 *
 * @since 1.5.0
 * @see get_next_post_link()
 *
 * @param string       $format         Optional. Link anchor format. Default '&laquo; %link'.
 * @param string       $link           Optional. Link permalink format. Default '%title'
 * @param bool         $in_same_term   Optional. Whether link should be in a same taxonomy term. Default false.
 * @param array|string $excluded_terms Optional. Array or comma-separated list of excluded term IDs. Default empty.
 * @param string       $taxonomy       Optional. Taxonomy, if $in_same_term is true. Default 'category'.
 */
function next_post_link($format = '%link &raquo;', $link = '%title', $in_same_term = \false, $excluded_terms = '', $taxonomy = 'category')
{
}