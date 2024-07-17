<?php


/**
 * Retrieves a single unified template object using its id.
 *
 * @since 5.8.0
 *
 * @param string $id            Template unique identifier (example: 'theme_slug//template_slug').
 * @param string $template_type Optional. Template type. Either 'wp_template' or 'wp_template_part'.
 *                              Default 'wp_template'.
 * @return WP_Block_Template|null Template.
 * @phpstan-param 'wp_template'|'wp_template_part' $template_type
 */
function get_block_template($id, $template_type = 'wp_template')
{
}