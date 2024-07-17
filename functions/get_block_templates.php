<?php


/**
 * Retrieves a list of unified template objects based on a query.
 *
 * @since 5.8.0
 *
 * @param array  $query {
 *     Optional. Arguments to retrieve templates.
 *
 *     @type string[] $slug__in  List of slugs to include.
 *     @type int      $wp_id     Post ID of customized template.
 *     @type string   $area      A 'wp_template_part_area' taxonomy value to filter by (for 'wp_template_part' template type only).
 *     @type string   $post_type Post type to get the templates for.
 * }
 * @param string $template_type Template type. Either 'wp_template' or 'wp_template_part'.
 * @return WP_Block_Template[] Array of block templates.
 * @phpstan-param array{
 *   slug__in?: string[],
 *   wp_id?: int,
 *   area?: string,
 *   post_type?: string,
 * } $query
 * @phpstan-param 'wp_template'|'wp_template_part' $template_type
 */
function get_block_templates($query = array(), $template_type = 'wp_template')
{
}