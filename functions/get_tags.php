<?php


/**
 * Retrieves all post tags.
 *
 * @since 2.3.0
 *
 * @param string|array $args {
 *     Optional. Arguments to retrieve tags. See get_terms() for additional options.
 *
 *     @type string $taxonomy Taxonomy to retrieve terms for. Default 'post_tag'.
 * }
 * @return WP_Term[]|int|WP_Error Array of 'post_tag' term objects, a count thereof,
 *                                or WP_Error if any of the taxonomies do not exist.
 * @phpstan-param array{
 *   taxonomy?: string,
 * } $args
 * @phpstan-return ($args is array{fields: 'count'}&array ? numeric-string : ($args is array{fields: 'names'|'slugs'}&array ? list<string> : ($args is array{fields: 'id=>name'|'id=>slug'}&array ? array<int, string> : ($args is array{fields: 'id=>parent'}&array ? array<int, int> : ($args is array{fields: 'ids'|'tt_ids'}&array ? list<int> : array<int, \WP_Term>)))))|\WP_Error
 */
function get_tags($args = '')
{
}