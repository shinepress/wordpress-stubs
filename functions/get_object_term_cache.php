<?php


/**
 * Retrieves the taxonomy relationship to the term object id.
 *
 * Upstream functions (like get_the_terms() and is_object_in_term()) are
 * responsible for populating the object-term relationship cache. The current
 * function only fetches relationship data that is already in the cache.
 *
 * @since 2.3.0
 * @since 4.7.0 Returns a `WP_Error` object if `get_term()` returns an error for
 *              any of the matched terms.
 *
 * @param int    $id       Term object ID.
 * @param string $taxonomy Taxonomy name.
 * @return bool|array|WP_Error Array of `WP_Term` objects, if cached.
 *                             False if cache is empty for `$taxonomy` and `$id`.
 *                             WP_Error if get_term() returns an error object for any term.
 */
function get_object_term_cache($id, $taxonomy)
{
}