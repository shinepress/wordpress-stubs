<?php


/**
 * Check if Term exists.
 *
 * @since 2.3.0
 * @deprecated 3.0.0 Use term_exists()
 * @see term_exists()
 *
 * @param int|string $term The term to check
 * @param string $taxonomy The taxonomy name to use
 * @param int $parent ID of parent term under which to confine the exists search.
 * @return mixed Get the term ID or term object, if exists.
 * @phpstan-return ($term is 0 ? 0 : ($term is '' ? null : ($taxonomy is '' ? string|null : array{term_id: string, term_taxonomy_id: string}|null)))
 */
function is_term($term, $taxonomy = '', $parent = 0)
{
}