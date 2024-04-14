<?php


/**
 * Return the correct 'wp_template' to render for the request template type.
 *
 * @access private
 * @since 5.8.0
 *
 * @param string   $template_type      The current template type.
 * @param string[] $template_hierarchy The current template hierarchy, ordered by priority.
 * @return WP_Block_Template|null template A template object, or null if none could be found.
 */
function resolve_block_template($template_type, $template_hierarchy)
{
}