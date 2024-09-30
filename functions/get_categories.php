<?php


/**
 * Retrieves a list of category objects.
 *
 * If you set the 'taxonomy' argument to 'link_category', the link categories
 * will be returned instead.
 *
 * @since 2.1.0
 *
 * @see get_terms() Type of arguments that can be changed.
 *
 * @param string|array $args {
 *     Optional. Arguments to retrieve categories. See get_terms() for additional options.
 *
 *     @type string $taxonomy Taxonomy to retrieve terms for. Default 'category'.
 * }
 * @return array List of category objects.
 * @phpstan-param array{
 *   taxonomy?: string,
 * } $args
 * @phpstan-return ($args is array{fields: 'count'} ? list<numeric-string> : ($args is array{fields: 'names'|'slugs'} ? list<string> : ($args is array{fields: 'id=>name'|'id=>slug'} ? array<int, string> : ($args is array{fields: 'id=>parent'} ? array<int, int> : ($args is array{fields: 'ids'|'tt_ids'} ? list<int> : array<int, \WP_Term>)))))
 */
function get_categories($args = '')
{
}