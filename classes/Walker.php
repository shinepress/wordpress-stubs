<?php


/**
 * A class for displaying various tree-like structures.
 *
 * Extend the Walker class to use it, see examples below. Child classes
 * do not need to implement all of the abstract methods in the class. The child
 * only needs to implement the methods that are needed.
 *
 * @since 2.1.0
 *
 * @package WordPress
 * @abstract
 */
class Walker
{
    /**
     * What the class handles.
     *
     * @since 2.1.0
     * @var string
     */
    public $tree_type;
    /**
     * DB fields to use.
     *
     * @since 2.1.0
     * @var array
     */
    public $db_fields;
    /**
     * Max number of pages walked by the paged walker
     *
     * @since 2.7.0
     * @var int
     */
    public $max_pages = 1;
    /**
     * Whether the current element has children or not.
     *
     * To be used in start_el().
     *
     * @since 4.0.0
     * @var bool
     */
    public $has_children;
    /**
     * Starts the list before the elements are added.
     *
     * The $args parameter holds additional values that may be used with the child
     * class methods. This method is called at the start of the output list.
     *
     * @since 2.1.0
     * @abstract
     *
     * @param string $output Used to append additional content (passed by reference).
     * @param int    $depth  Depth of the item.
     * @param array  $args   An array of additional arguments.
     */
    public function start_lvl(&$output, $depth = 0, $args = array())
    {
    }
    /**
     * Ends the list of after the elements are added.
     *
     * The $args parameter holds additional values that may be used with the child
     * class methods. This method finishes the list at the end of output of the elements.
     *
     * @since 2.1.0
     * @abstract
     *
     * @param string $output Used to append additional content (passed by reference).
     * @param int    $depth  Depth of the item.
     * @param array  $args   An array of additional arguments.
     */
    public function end_lvl(&$output, $depth = 0, $args = array())
    {
    }
    /**
     * Start the element output.
     *
     * The $args parameter holds additional values that may be used with the child
     * class methods. Includes the element output also.
     *
     * @since 2.1.0
     * @abstract
     *
     * @param string $output            Used to append additional content (passed by reference).
     * @param object $object            The data object.
     * @param int    $depth             Depth of the item.
     * @param array  $args              An array of additional arguments.
     * @param int    $current_object_id ID of the current item.
     */
    public function start_el(&$output, $object, $depth = 0, $args = array(), $current_object_id = 0)
    {
    }
    /**
     * Ends the element output, if needed.
     *
     * The $args parameter holds additional values that may be used with the child class methods.
     *
     * @since 2.1.0
     * @abstract
     *
     * @param string $output Used to append additional content (passed by reference).
     * @param object $object The data object.
     * @param int    $depth  Depth of the item.
     * @param array  $args   An array of additional arguments.
     */
    public function end_el(&$output, $object, $depth = 0, $args = array())
    {
    }
    /**
     * Traverse elements to create list from elements.
     *
     * Display one element if the element doesn't have any children otherwise,
     * display the element and its children. Will only traverse up to the max
     * depth and no ignore elements under that depth. It is possible to set the
     * max depth to include all depths, see walk() method.
     *
     * This method should not be called directly, use the walk() method instead.
     *
     * @since 2.5.0
     *
     * @param object $element           Data object.
     * @param array  $children_elements List of elements to continue traversing (passed by reference).
     * @param int    $max_depth         Max depth to traverse.
     * @param int    $depth             Depth of current element.
     * @param array  $args              An array of arguments.
     * @param string $output            Used to append additional content (passed by reference).
     */
    public function display_element($element, &$children_elements, $max_depth, $depth, $args, &$output)
    {
    }
    /**
     * Display array of elements hierarchically.
     *
     * Does not assume any existing order of elements.
     *
     * $max_depth = -1 means flatly display every element.
     * $max_depth = 0 means display all levels.
     * $max_depth > 0 specifies the number of display levels.
     *
     * @since 2.1.0
     *
     * @param array $elements  An array of elements.
     * @param int   $max_depth The maximum hierarchical depth.
     * @return string The hierarchical item output.
     */
    public function walk($elements, $max_depth)
    {
    }
    /**
     * paged_walk() - produce a page of nested elements
     *
     * Given an array of hierarchical elements, the maximum depth, a specific page number,
     * and number of elements per page, this function first determines all top level root elements
     * belonging to that page, then lists them and all of their children in hierarchical order.
     *
     * $max_depth = 0 means display all levels.
     * $max_depth > 0 specifies the number of display levels.
     *
     * @since 2.7.0
     *
     * @param array $elements
     * @param int   $max_depth The maximum hierarchical depth.
     * @param int   $page_num The specific page number, beginning with 1.
     * @param int   $per_page
     * @return string XHTML of the specified page of elements
     */
    public function paged_walk($elements, $max_depth, $page_num, $per_page)
    {
    }
    /**
     * Calculates the total number of root elements.
     *
     * @since 2.7.0
     *
     * @param array $elements Elements to list.
     * @return int Number of root elements.
     */
    public function get_number_of_root_elements($elements)
    {
    }
    /**
     * Unset all the children for a given top level element.
     *
     * @since 2.7.0
     *
     * @param object $e
     * @param array $children_elements
     */
    public function unset_children($e, &$children_elements)
    {
    }
}