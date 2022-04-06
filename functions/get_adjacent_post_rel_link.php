<?php


/**
 * Retrieves the adjacent post relational link.
 *
 * Can either be next or previous post relational link.
 *
 * @since 2.8.0
 *
 * @param string       $title          Optional. Link title format. Default '%title'.
 * @param bool         $in_same_term   Optional. Whether link should be in a same taxonomy term. Default false.
 * @param int[]|string $excluded_terms Optional. Array or comma-separated list of excluded term IDs. Default empty.
 * @param bool         $previous       Optional. Whether to display link to previous or next post. Default true.
 * @param string       $taxonomy       Optional. Taxonomy, if $in_same_term is true. Default 'category'.
 * @return string|void The adjacent post relational link URL.
 */
function get_adjacent_post_rel_link($title = '%title', $in_same_term = \false, $excluded_terms = '', $previous = \true, $taxonomy = 'category')
{
}