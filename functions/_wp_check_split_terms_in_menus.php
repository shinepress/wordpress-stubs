<?php


/**
 * Checks menu items when a term gets split to see if any of them need to be updated.
 *
 * @ignore
 * @since 4.2.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int    $term_id          ID of the formerly shared term.
 * @param int    $new_term_id      ID of the new term created for the $term_taxonomy_id.
 * @param int    $term_taxonomy_id ID for the term_taxonomy row affected by the split.
 * @param string $taxonomy         Taxonomy for the split term.
 */
function _wp_check_split_terms_in_menus($term_id, $new_term_id, $term_taxonomy_id, $taxonomy)
{
}