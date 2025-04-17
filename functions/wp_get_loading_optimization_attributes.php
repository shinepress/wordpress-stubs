<?php


/**
 * Gets loading optimization attributes.
 *
 * This function returns an array of attributes that should be merged into the given attributes array to optimize
 * loading performance. Potential attributes returned by this function are:
 * - `loading` attribute with a value of "lazy"
 * - `fetchpriority` attribute with a value of "high"
 * - `decoding` attribute with a value of "async"
 *
 * If any of these attributes are already present in the given attributes, they will not be modified. Note that no
 * element should have both `loading="lazy"` and `fetchpriority="high"`, so the function will trigger a warning in case
 * both attributes are present with those values.
 *
 * @since 6.3.0
 *
 * @global WP_Query $wp_query WordPress Query object.
 *
 * @param string $tag_name The tag name.
 * @param array  $attr     Array of the attributes for the tag.
 * @param string $context  Context for the element for which the loading optimization attribute is requested.
 * @return array Loading optimization attributes.
 */
function wp_get_loading_optimization_attributes($tag_name, $attr, $context)
{
}