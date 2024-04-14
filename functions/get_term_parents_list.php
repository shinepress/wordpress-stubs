<?php


/**
 * Retrieve term parents with separator.
 *
 * @since 4.8.0
 *
 * @param int     $term_id  Term ID.
 * @param string  $taxonomy Taxonomy name.
 * @param string|array $args {
 *     Array of optional arguments.
 *
 *     @type string $format    Use term names or slugs for display. Accepts 'name' or 'slug'.
 *                             Default 'name'.
 *     @type string $separator Separator for between the terms. Default '/'.
 *     @type bool   $link      Whether to format as a link. Default true.
 *     @type bool   $inclusive Include the term to get the parents for. Default true.
 * }
 * @return string|WP_Error A list of term parents on success, WP_Error or empty string on failure.
 * @phpstan-param array{
 *   format?: string,
 *   separator?: string,
 *   link?: bool,
 *   inclusive?: bool,
 * } $args
 */
function get_term_parents_list($term_id, $taxonomy, $args = array())
{
}