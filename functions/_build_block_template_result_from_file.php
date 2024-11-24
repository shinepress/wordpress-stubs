<?php


/**
 * Builds a unified template object based on a theme file.
 *
 * @since 5.9.0
 * @since 6.3.0 Added `modified` property to template objects.
 * @access private
 *
 * @param array  $template_file Theme file.
 * @param string $template_type Template type. Either 'wp_template' or 'wp_template_part'.
 * @return WP_Block_Template Template.
 * @phpstan-param 'wp_template'|'wp_template_part' $template_type
 */
function _build_block_template_result_from_file($template_file, $template_type)
{
}