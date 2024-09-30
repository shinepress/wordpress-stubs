<?php


/**
 * Parses a block template and removes the theme attribute from each template part.
 *
 * @since 5.9.0
 * @deprecated 6.4.0 Use traverse_and_serialize_blocks( parse_blocks( $template_content ), '_remove_theme_attribute_from_template_part_block' ) instead.
 * @access private
 *
 * @param string $template_content Serialized block template content.
 * @return string Updated block template content.
 */
function _remove_theme_attribute_in_block_template_content($template_content)
{
}