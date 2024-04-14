<?php


/**
 * Retrieves the template files from the theme.
 *
 * @since 5.9.0
 * @since 6.3.0 Added the `$query` parameter.
 * @access private
 *
 * @param string $template_type 'wp_template' or 'wp_template_part'.
 * @param array  $query {
 *     Arguments to retrieve templates. Optional, empty by default.
 *
 *     @type array  $slug__in     List of slugs to include.
 *     @type array  $slug__not_in List of slugs to skip.
 *     @type string $area         A 'wp_template_part_area' taxonomy value to filter by (for 'wp_template_part' template type only).
 *     @type string $post_type    Post type to get the templates for.
 * }
 *
 * @return array Template
 * @phpstan-param array{
 *   slug__in?: array,
 *   slug__not_in?: array,
 *   area?: string,
 *   post_type?: string,
 * } $query
 */
function _get_block_templates_files($template_type, $query = array())
{
}