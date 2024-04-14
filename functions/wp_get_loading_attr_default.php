<?php


/**
 * Gets the default value to use for a `loading` attribute on an element.
 *
 * This function should only be called for a tag and context if lazy-loading is generally enabled.
 *
 * The function usually returns 'lazy', but uses certain heuristics to guess whether the current element is likely to
 * appear above the fold, in which case it returns a boolean `false`, which will lead to the `loading` attribute being
 * omitted on the element. The purpose of this refinement is to avoid lazy-loading elements that are within the initial
 * viewport, which can have a negative performance impact.
 *
 * Under the hood, the function uses {@see wp_increase_content_media_count()} every time it is called for an element
 * within the main content. If the element is the very first content element, the `loading` attribute will be omitted.
 * This default threshold of 1 content element to omit the `loading` attribute for can be customized using the
 * {@see 'wp_omit_loading_attr_threshold'} filter.
 *
 * @since 5.9.0
 *
 * @param string $context Context for the element for which the `loading` attribute value is requested.
 * @return string|bool The default `loading` attribute value. Either 'lazy', 'eager', or a boolean `false`, to indicate
 *                     that the `loading` attribute should be skipped.
 */
function wp_get_loading_attr_default($context)
{
}