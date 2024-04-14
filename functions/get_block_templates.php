<?php


/**
 * Retrieves a list of unified template objects based on a query.
 *
 * @since 5.8.0
 *
 * @param array $query {
 *     Optional. Arguments to retrieve templates.
 *
 *     @type array  $slug__in List of slugs to include.
 *     @type int    $wp_id Post ID of customized template.
 * }
 * @param string $template_type Optional. The template type (post type). Default 'wp_template'.
 * @return WP_Block_Template[] Block template objects.
 * @phpstan-param array{
 *   slug__in?: array,
 *   wp_id?: int,
 * } $query
 */
function get_block_templates($query = array(), $template_type = 'wp_template')
{
}