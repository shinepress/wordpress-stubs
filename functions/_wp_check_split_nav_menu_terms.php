<?php


/**
 * If the term being split is a nav_menu, change associations.
 *
 * @ignore
 * @since 4.3.0
 *
 * @param int    $term_id          ID of the formerly shared term.
 * @param int    $new_term_id      ID of the new term created for the $term_taxonomy_id.
 * @param int    $term_taxonomy_id ID for the term_taxonomy row affected by the split.
 * @param string $taxonomy         Taxonomy for the split term.
 */
function _wp_check_split_nav_menu_terms($term_id, $new_term_id, $term_taxonomy_id, $taxonomy)
{
}