<?php


/**
 * Synchronizes category and post tag slugs when global terms are enabled.
 *
 * @since 3.0.0
 * @since 6.1.0 This function no longer does anything.
 * @deprecated 6.1.0
 *
 * @param WP_Term|array $term     The term.
 * @param string        $taxonomy The taxonomy for `$term`.
 * @return WP_Term|array Always returns `$term`.
 */
function sync_category_tag_slugs($term, $taxonomy)
{
}