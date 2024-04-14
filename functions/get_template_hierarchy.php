<?php


/**
 * Gets the template hierarchy for the given template slug to be created.
 *
 * Note: Always add `index` as the last fallback template.
 *
 * @since 6.1.0
 *
 * @param string  $slug           The template slug to be created.
 * @param boolean $is_custom      Optional. Indicates if a template is custom or
 *                                part of the template hierarchy. Default false.
 * @param string $template_prefix Optional. The template prefix for the created template.
 *                                Used to extract the main template type, e.g.
 *                                in `taxonomy-books` the `taxonomy` is extracted.
 *                                Default empty string.
 * @return string[] The template hierarchy.
 */
function get_template_hierarchy($slug, $is_custom = \false, $template_prefix = '')
{
}