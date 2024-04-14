<?php


/**
 * Get the subset of $terms that are descendants of $term_id.
 *
 * If `$terms` is an array of objects, then _get_term_children() returns an array of objects.
 * If `$terms` is an array of IDs, then _get_term_children() returns an array of IDs.
 *
 * @access private
 * @since 2.3.0
 *
 * @param int    $term_id   The ancestor term: all returned terms should be descendants of `$term_id`.
 * @param array  $terms     The set of terms - either an array of term objects or term IDs - from which those that
 *                          are descendants of $term_id will be chosen.
 * @param string $taxonomy  The taxonomy which determines the hierarchy of the terms.
 * @param array  $ancestors Optional. Term ancestors that have already been identified. Passed by reference, to keep
 *                          track of found terms when recursing the hierarchy. The array of located ancestors is used
 *                          to prevent infinite recursion loops. For performance, `term_ids` are used as array keys,
 *                          with 1 as value. Default empty array.
 * @return array|WP_Error The subset of $terms that are descendants of $term_id.
 */
function _get_term_children($term_id, $terms, $taxonomy, &$ancestors = array())
{
}