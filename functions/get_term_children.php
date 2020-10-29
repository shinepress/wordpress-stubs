<?php


/**
 * Merge all term children into a single array of their IDs.
 *
 * This recursive function will merge all of the children of $term into the same
 * array of term IDs. Only useful for taxonomies which are hierarchical.
 *
 * Will return an empty array if $term does not exist in $taxonomy.
 *
 * @since 2.3.0
 *
 * @param int    $term_id  ID of Term to get children.
 * @param string $taxonomy Taxonomy Name.
 * @return array|WP_Error List of Term IDs. WP_Error returned if `$taxonomy` does not exist.
 */
function get_term_children($term_id, $taxonomy)
{
}