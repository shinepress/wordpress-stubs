<?php


/**
 * Finds a block template with equal or higher specificity than a given PHP template file.
 *
 * Internally, this communicates the block content that needs to be used by the template canvas through a global variable.
 *
 * @since 5.8.0
 *
 * @global string $_wp_current_template_content
 *
 * @param string   $template  Path to the template. See locate_template().
 * @param string   $type      Sanitized filename without extension.
 * @param string[] $templates A list of template candidates, in descending order of priority.
 * @return string The path to the Full Site Editing template canvas file, or the fallback PHP template.
 */
function locate_block_template($template, $type, array $templates)
{
}