<?php


/**
 * Taxonomy API: Walker_Category_Checklist class
 *
 * @package WordPress
 * @subpackage Administration
 * @since 4.4.0
 */
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
    // TODO: Decouple this.
    /**
     * Starts the list before the elements are added.
     *
     * @see Walker:start_lvl()
     *
     * @since 2.5.1
     *
     * @param string $output Used to append additional content (passed by reference).
     * @param int    $depth  Depth of category. Used for tab indentation.
     * @param array  $args   An array of arguments. @see wp_terms_checklist()
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
     * @param array  $args   An array of arguments. @see wp_terms_checklist()
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
     *
     * @param string  $output   Used to append additional content (passed by reference).
     * @param WP_Term $category The current term object.
     * @param int     $depth    Depth of the term in reference to parents. Default 0.
     * @param array   $args     An array of arguments. @see wp_terms_checklist()
     * @param int     $id       ID of the current term.
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
    public function start_el(&$output, $category, $depth = 0, $args = array(), $id = 0)
    {
    }
    /**
     * Ends the element output, if needed.
     *
     * @see Walker::end_el()
     *
     * @since 2.5.1
     *
     * @param string  $output   Used to append additional content (passed by reference).
     * @param WP_Term $category The current term object.
     * @param int     $depth    Depth of the term in reference to parents. Default 0.
     * @param array   $args     An array of arguments. @see wp_terms_checklist()
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
    public function end_el(&$output, $category, $depth = 0, $args = array())
    {
    }
}