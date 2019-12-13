<?php


/**
 * Synchronize category and post tag slugs when global terms are enabled.
 *
 * @since 3.0.0
 *
 * @param object $term     The term.
 * @param string $taxonomy The taxonomy for `$term`. Should be 'category' or 'post_tag', as these are
 *                         the only taxonomies which are processed by this function; anything else
 *                         will be returned untouched.
 * @return object|array Returns `$term`, after filtering the 'slug' field with sanitize_title()
 *                      if $taxonomy is 'category' or 'post_tag'.
 */
function sync_category_tag_slugs($term, $taxonomy)
{
}