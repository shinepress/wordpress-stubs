<?php


/**
 * Core walker class to output an unordered list of category checkbox input elements.
 *
 * @since 2.5.1
 *
 * @see Walker
 * @see wp_category_checklist()
 * @see wp_terms_checklist()
 */
class Walker_Category_Checklist extends \Walker
{
    public $tree_type = 'category';
    public $db_fields = array('parent' => 'parent', 'id' => 'term_id');
    /**
     * Starts the list before the elements are added.
     *
     * @see Walker:start_lvl()
     *
     * @since 2.5.1
     *
     * @param string $output Used to append additional content (passed by reference).
     * @param int    $depth  Depth of category. Used for tab indentation.
     * @param array  $args   An array of arguments. See {@see wp_terms_checklist()}.
     * @phpstan-param array{
     *   descendants_and_self?: int,
     *   selected_cats?: int[],
     *   popular_cats?: int[],
     *   walker?: Walker,
     *   taxonomy?: string,
     *   checked_ontop?: bool,
     *   echo?: bool,
     * } $args See wp_terms_checklist()
     */
    public function start_lvl(&$output, $depth = 0, $args = array())
    {
    }
    /**
     * Ends the list of after the elements are added.
     *
     * @see Walker::end_lvl()
     *
     * @since 2.5.1
     *
     * @param string $output Used to append additional content (passed by reference).
     * @param int    $depth  Depth of category. Used for tab indentation.
     * @param array  $args   An array of arguments. See {@see wp_terms_checklist()}.
     * @phpstan-param array{
     *   descendants_and_self?: int,
     *   selected_cats?: int[],
     *   popular_cats?: int[],
     *   walker?: Walker,
     *   taxonomy?: string,
     *   checked_ontop?: bool,
     *   echo?: bool,
     * } $args See wp_terms_checklist()
     */
    public function end_lvl(&$output, $depth = 0, $args = array())
    {
    }
    /**
     * Start the element output.
     *
     * @see Walker::start_el()
     *
     * @since 2.5.1
     * @since 5.9.0 Renamed `$category` to `$data_object` and `$id` to `$current_object_id`
     *              to match parent class for PHP 8 named parameter support.
     *
     * @param string  $output            Used to append additional content (passed by reference).
     * @param WP_Term $data_object       The current term object.
     * @param int     $depth             Depth of the term in reference to parents. Default 0.
     * @param array   $args              An array of arguments. See {@see wp_terms_checklist()}.
     * @param int     $current_object_id Optional. ID of the current term. Default 0.
     * @phpstan-param array{
     *   descendants_and_self?: int,
     *   selected_cats?: int[],
     *   popular_cats?: int[],
     *   walker?: Walker,
     *   taxonomy?: string,
     *   checked_ontop?: bool,
     *   echo?: bool,
     * } $args See wp_terms_checklist()
     */
    public function start_el(&$output, $data_object, $depth = 0, $args = array(), $current_object_id = 0)
    {
    }
    /**
     * Ends the element output, if needed.
     *
     * @see Walker::end_el()
     *
     * @since 2.5.1
     * @since 5.9.0 Renamed `$category` to `$data_object` to match parent class for PHP 8 named parameter support.
     *
     * @param string  $output      Used to append additional content (passed by reference).
     * @param WP_Term $data_object The current term object.
     * @param int     $depth       Depth of the term in reference to parents. Default 0.
     * @param array   $args        An array of arguments. See {@see wp_terms_checklist()}.
     * @phpstan-param array{
     *   descendants_and_self?: int,
     *   selected_cats?: int[],
     *   popular_cats?: int[],
     *   walker?: Walker,
     *   taxonomy?: string,
     *   checked_ontop?: bool,
     *   echo?: bool,
     * } $args See wp_terms_checklist()
     */
    public function end_el(&$output, $data_object, $depth = 0, $args = array())
    {
    }
}