<?php


/**
 * Taxonomy API: Walker_CategoryDropdown class
 *
 * @package WordPress
 * @subpackage Template
 * @since 4.4.0
 */
/**
 * Core class used to create an HTML dropdown list of Categories.
 *
 * @since 2.1.0
 *
 * @see Walker
 */
class Walker_CategoryDropdown extends \Walker
{
    /**
     * What the class handles.
     *
     * @since 2.1.0
     * @var string
     *
     * @see Walker::$tree_type
     */
    public $tree_type = 'category';
    /**
     * Database fields to use.
     *
     * @since 2.1.0
     * @todo Decouple this
     * @var array
     *
     * @see Walker::$db_fields
     */
    public $db_fields = array('parent' => 'parent', 'id' => 'term_id');
    /**
     * Starts the element output.
     *
     * @since 2.1.0
     *
     * @see Walker::start_el()
     *
     * @param string $output   Used to append additional content (passed by reference).
     * @param object $category Category data object.
     * @param int    $depth    Depth of category. Used for padding.
     * @param array  $args     Uses 'selected', 'show_count', and 'value_field' keys, if they exist.
     *                         See wp_dropdown_categories().
     * @param int    $id       Optional. ID of the current category. Default 0 (unused).
     * @phpstan-param array{
     *   show_option_all?: string,
     *   show_option_none?: string,
     *   option_none_value?: string,
     *   orderby?: string,
     *   pad_counts?: bool,
     *   show_count?: bool|int,
     *   echo?: bool|int,
     *   hierarchical?: bool|int,
     *   depth?: int,
     *   tab_index?: int,
     *   name?: string,
     *   id?: string,
     *   class?: string,
     *   selected?: int|string,
     *   value_field?: string,
     *   taxonomy?: string|array,
     *   hide_if_empty?: bool,
     *   required?: bool,
     * } $args See wp_dropdown_categories()
     */
    public function start_el(&$output, $category, $depth = 0, $args = array(), $id = 0)
    {
    }
}