<?php


/**
 * Determines whether a taxonomy term exists.
 *
 * Formerly is_term(), introduced in 2.3.0.
 *
 * For more information on this and similar theme functions, check out
 * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/
 * Conditional Tags} article in the Theme Developer Handbook.
 *
 * @since 3.0.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int|string $term     The term to check. Accepts term ID, slug, or name.
 * @param string     $taxonomy Optional. The taxonomy name to use.
 * @param int        $parent   Optional. ID of parent term under which to confine the exists search.
 * @return mixed Returns null if the term does not exist.
 *               Returns the term ID if no taxonomy is specified and the term ID exists.
 *               Returns an array of the term ID and the term taxonomy ID if the taxonomy is specified and the pairing exists.
 *               Returns 0 if term ID 0 is passed to the function.
 * @phpstan-return ($term is 0 ? 0 : ($term is '' ? null : ($taxonomy is '' ? string|null : array{term_id: string, term_taxonomy_id: string}|null)))
 */
function term_exists($term, $taxonomy = '', $parent = \null)
{
}