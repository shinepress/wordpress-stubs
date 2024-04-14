<?php


/**
 * Taxonomy API: Walker_Category class
 *
 * @package WordPress
 * @subpackage Template
 * @since 4.4.0
 */
/**
 * Core class used to create an HTML list of categories.
 *
 * @since 2.1.0
 *
 * @see Walker
 */
class Walker_Category extends \Walker
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
     * @var array
     *
     * @see Walker::$db_fields
     * @todo Decouple this
     */
    public $db_fields = array('parent' => 'parent', 'id' => 'term_id');
    /**
     * Starts the list before the elements are added.
     *
     * @since 2.1.0
     *
     * @see Walker::start_lvl()
     *
     * @param string $output Used to append additional content. Passed by reference.
     * @param int    $depth  Optional. Depth of category. Used for tab indentation. Default 0.
     * @param array  $args   Optional. An array of arguments. Will only append content if style argument
     *                       value is 'list'. See wp_list_categories(). Default empty array.
     * @phpstan-param array{
     *   child_of?: int,
     *   current_category?: int|array,
     *   depth?: int,
     *   echo?: bool|int,
     *   exclude?: array|string,
     *   exclude_tree?: array|string,
     *   feed?: string,
     *   feed_image?: string,
     *   feed_type?: string,
     *   hide_empty?: bool|int,
     *   hide_title_if_empty?: bool,
     *   hierarchical?: bool,
     *   order?: string,
     *   orderby?: string,
     *   separator?: string,
     *   show_count?: bool|int,
     *   show_option_all?: string,
     *   show_option_none?: string,
     *   style?: string,
     *   taxonomy?: string,
     *   title_li?: string,
     *   use_desc_for_title?: bool|int,
     * } $args See wp_list_categories()
     * @phpstan-return void
     */
    public function start_lvl(&$output, $depth = 0, $args = array())
    {
    }
    /**
     * Ends the list of after the elements are added.
     *
     * @since 2.1.0
     *
     * @see Walker::end_lvl()
     *
     * @param string $output Used to append additional content. Passed by reference.
     * @param int    $depth  Optional. Depth of category. Used for tab indentation. Default 0.
     * @param array  $args   Optional. An array of arguments. Will only append content if style argument
     *                       value is 'list'. See wp_list_categories(). Default empty array.
     * @phpstan-param array{
     *   child_of?: int,
     *   current_category?: int|array,
     *   depth?: int,
     *   echo?: bool|int,
     *   exclude?: array|string,
     *   exclude_tree?: array|string,
     *   feed?: string,
     *   feed_image?: string,
     *   feed_type?: string,
     *   hide_empty?: bool|int,
     *   hide_title_if_empty?: bool,
     *   hierarchical?: bool,
     *   order?: string,
     *   orderby?: string,
     *   separator?: string,
     *   show_count?: bool|int,
     *   show_option_all?: string,
     *   show_option_none?: string,
     *   style?: string,
     *   taxonomy?: string,
     *   title_li?: string,
     *   use_desc_for_title?: bool|int,
     * } $args See wp_list_categories()
     * @phpstan-return void
     */
    public function end_lvl(&$output, $depth = 0, $args = array())
    {
    }
    /**
     * Starts the element output.
     *
     * @since 2.1.0
     *
     * @see Walker::start_el()
     *
     * @param string $output   Used to append additional content (passed by reference).
     * @param object $category Category data object.
     * @param int    $depth    Optional. Depth of category in reference to parents. Default 0.
     * @param array  $args     Optional. An array of arguments. See wp_list_categories(). Default empty array.
     * @param int    $id       Optional. ID of the current category. Default 0.
     * @phpstan-param array{
     *   child_of?: int,
     *   current_category?: int|array,
     *   depth?: int,
     *   echo?: bool|int,
     *   exclude?: array|string,
     *   exclude_tree?: array|string,
     *   feed?: string,
     *   feed_image?: string,
     *   feed_type?: string,
     *   hide_empty?: bool|int,
     *   hide_title_if_empty?: bool,
     *   hierarchical?: bool,
     *   order?: string,
     *   orderby?: string,
     *   separator?: string,
     *   show_count?: bool|int,
     *   show_option_all?: string,
     *   show_option_none?: string,
     *   style?: string,
     *   taxonomy?: string,
     *   title_li?: string,
     *   use_desc_for_title?: bool|int,
     * } $args See wp_list_categories()
     * @phpstan-return void
     */
    public function start_el(&$output, $category, $depth = 0, $args = array(), $id = 0)
    {
    }
    /**
     * Ends the element output, if needed.
     *
     * @since 2.1.0
     *
     * @see Walker::end_el()
     *
     * @param string $output Used to append additional content (passed by reference).
     * @param object $page   Not used.
     * @param int    $depth  Optional. Depth of category. Not used.
     * @param array  $args   Optional. An array of arguments. Only uses 'list' for whether should append
     *                       to output. See wp_list_categories(). Default empty array.
     * @phpstan-param array{
     *   child_of?: int,
     *   current_category?: int|array,
     *   depth?: int,
     *   echo?: bool|int,
     *   exclude?: array|string,
     *   exclude_tree?: array|string,
     *   feed?: string,
     *   feed_image?: string,
     *   feed_type?: string,
     *   hide_empty?: bool|int,
     *   hide_title_if_empty?: bool,
     *   hierarchical?: bool,
     *   order?: string,
     *   orderby?: string,
     *   separator?: string,
     *   show_count?: bool|int,
     *   show_option_all?: string,
     *   show_option_none?: string,
     *   style?: string,
     *   taxonomy?: string,
     *   title_li?: string,
     *   use_desc_for_title?: bool|int,
     * } $args See wp_list_categories()
     * @phpstan-return void
     */
    public function end_el(&$output, $page, $depth = 0, $args = array())
    {
    }
}