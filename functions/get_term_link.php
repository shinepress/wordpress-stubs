<?php


/**
 * Generate a permalink for a taxonomy term archive.
 *
 * @since 2.5.0
 *
 * @global WP_Rewrite $wp_rewrite WordPress rewrite component.
 *
 * @param WP_Term|int|string $term     The term object, ID, or slug whose link will be retrieved.
 * @param string             $taxonomy Optional. Taxonomy. Default empty.
 * @return string|WP_Error URL of the taxonomy term archive on success, WP_Error if term does not exist.
 */
function get_term_link($term, $taxonomy = '')
{
}