<?php


/**
 * Parses wp_template content and injects the active theme's
 * stylesheet as a theme attribute into each wp_template_part
 *
 * @since 5.9.0
 * @deprecated 6.4.0 Use traverse_and_serialize_blocks( parse_blocks( $template_content ), '_inject_theme_attribute_in_template_part_block' ) instead.
 * @access private
 *
 * @param string $template_content serialized wp_template content.
 * @return string Updated 'wp_template' content.
 */
function _inject_theme_attribute_in_block_template_content($template_content)
{
}