<?php


/**
 * Retrieves the template files from the theme.
 *
 * @since 5.9.0
 * @since 6.3.0 Added the `$query` parameter.
 * @access private
 *
 * @param string $template_type Template type. Either 'wp_template' or 'wp_template_part'.
 * @param array  $query {
 *     Arguments to retrieve templates. Optional, empty by default.
 *
 *     @type string[] $slug__in     List of slugs to include.
 *     @type string[] $slug__not_in List of slugs to skip.
 *     @type string   $area         A 'wp_template_part_area' taxonomy value to filter by (for 'wp_template_part' template type only).
 *     @type string   $post_type    Post type to get the templates for.
 * }
 *
 * @return array Template
 * @phpstan-param 'wp_template'|'wp_template_part' $template_type
 * @phpstan-param array{
 *   slug__in?: string[],
 *   slug__not_in?: string[],
 *   area?: string,
 *   post_type?: string,
 * } $query
 */
function _get_block_templates_files($template_type, $query = array())
{
}