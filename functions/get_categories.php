<?php


/**
 * Taxonomy API: Core category-specific functionality
 *
 * @package WordPress
 * @subpackage Taxonomy
 */
/**
 * Retrieve list of category objects.
 *
 * If you change the type to 'link' in the arguments, then the link categories
 * will be returned instead. Also all categories will be updated to be backward
 * compatible with pre-2.3 plugins and themes.
 *
 * @since 2.1.0
 * @see get_terms() Type of arguments that can be changed.
 *
 * @param string|array $args {
 *     Optional. Arguments to retrieve categories. See get_terms() for additional options.
 *
 *     @type string $taxonomy Taxonomy to retrieve terms for. In this case, default 'category'.
 * }
 * @return array List of categories.
 */
function get_categories($args = '')
{
}