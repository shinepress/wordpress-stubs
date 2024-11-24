<?php


/**
 * Core walker class used to create an HTML list of comments.
 *
 * @since 2.7.0
 *
 * @see Walker
 */
class Walker_Comment extends \Walker
{
    /**
     * What the class handles.
     *
     * @since 2.7.0
     * @var string
     *
     * @see Walker::$tree_type
     */
    public $tree_type = 'comment';
    /**
     * Database fields to use.
     *
     * @since 2.7.0
     * @var string[]
     *
     * @see Walker::$db_fields
     * @todo Decouple this
     */
    public $db_fields = array('parent' => 'comment_parent', 'id' => 'comment_ID');
    /**
     * Starts the list before the elements are added.
     *
     * @since 2.7.0
     *
     * @see Walker::start_lvl()
     * @global int $comment_depth
     *
     * @param string $output Used to append additional content (passed by reference).
     * @param int    $depth  Optional. Depth of the current comment. Default 0.
     * @param array  $args   Optional. Uses 'style' argument for type of HTML list. Default empty array.
     */
    public function start_lvl(&$output, $depth = 0, $args = array())
    {
    }
    /**
     * Ends the list of items after the elements are added.
     *
     * @since 2.7.0
     *
     * @see Walker::end_lvl()
     * @global int $comment_depth
     *
     * @param string $output Used to append additional content (passed by reference).
     * @param int    $depth  Optional. Depth of the current comment. Default 0.
     * @param array  $args   Optional. Will only append content if style argument value is 'ol' or 'ul'.
     *                       Default empty array.
     */
    public function end_lvl(&$output, $depth = 0, $args = array())
    {
    }
    /**
     * Traverses elements to create list from elements.
     *
     * This function is designed to enhance Walker::display_element() to
     * display children of higher nesting levels than selected inline on
     * the highest depth level displayed. This prevents them being orphaned
     * at the end of the comment list.
     *
     * Example: max_depth = 2, with 5 levels of nested content.
     *     1
     *      1.1
     *        1.1.1
     *        1.1.1.1
     *        1.1.1.1.1
     *        1.1.2
     *        1.1.2.1
     *     2
     *      2.2
     *
     * @since 2.7.0
     *
     * @see Walker::display_element()
     * @see wp_list_comments()
     *
     * @param WP_Comment $element           Comment data object.
     * @param array      $children_elements List of elements to continue traversing. Passed by reference.
     * @param int        $max_depth         Max depth to traverse.
     * @param int        $depth             Depth of the current element.
     * @param array      $args              An array of arguments.
     * @param string     $output            Used to append additional content. Passed by reference.
     * @phpstan-return void
     */
    public function display_element($element, &$children_elements, $max_depth, $depth, $args, &$output)
    {
    }
    /**
     * Starts the element output.
     *
     * @since 2.7.0
     * @since 5.9.0 Renamed `$comment` to `$data_object` and `$id` to `$current_object_id`
     *              to match parent class for PHP 8 named parameter support.
     *
     * @see Walker::start_el()
     * @see wp_list_comments()
     * @global int        $comment_depth
     * @global WP_Comment $comment       Global comment object.
     *
     * @param string     $output            Used to append additional content. Passed by reference.
     * @param WP_Comment $data_object       Comment data object.
     * @param int        $depth             Optional. Depth of the current comment in reference to parents. Default 0.
     * @param array      $args              Optional. An array of arguments. Default empty array.
     * @param int        $current_object_id Optional. ID of the current comment. Default 0.
     * @phpstan-return void
     */
    public function start_el(&$output, $data_object, $depth = 0, $args = array(), $current_object_id = 0)
    {
    }
    /**
     * Ends the element output, if needed.
     *
     * @since 2.7.0
     * @since 5.9.0 Renamed `$comment` to `$data_object` to match parent class for PHP 8 named parameter support.
     *
     * @see Walker::end_el()
     * @see wp_list_comments()
     *
     * @param string     $output      Used to append additional content. Passed by reference.
     * @param WP_Comment $data_object Comment data object.
     * @param int        $depth       Optional. Depth of the current comment. Default 0.
     * @param array      $args        Optional. An array of arguments. Default empty array.
     * @phpstan-return void
     */
    public function end_el(&$output, $data_object, $depth = 0, $args = array())
    {
    }
    /**
     * Outputs a pingback comment.
     *
     * @since 3.6.0
     *
     * @see wp_list_comments()
     *
     * @param WP_Comment $comment The comment object.
     * @param int        $depth   Depth of the current comment.
     * @param array      $args    An array of arguments.
     */
    protected function ping($comment, $depth, $args)
    {
    }
    /**
     * Filters the comment text.
     *
     * Removes links from the pending comment's text if the commenter did not consent
     * to the comment cookies.
     *
     * @since 5.4.2
     *
     * @param string          $comment_text Text of the current comment.
     * @param WP_Comment|null $comment      The comment object. Null if not found.
     * @return string Filtered text of the current comment.
     */
    public function filter_comment_text($comment_text, $comment)
    {
    }
    /**
     * Outputs a single comment.
     *
     * @since 3.6.0
     *
     * @see wp_list_comments()
     *
     * @param WP_Comment $comment Comment to display.
     * @param int        $depth   Depth of the current comment.
     * @param array      $args    An array of arguments.
     */
    protected function comment($comment, $depth, $args)
    {
    }
    /**
     * Outputs a comment in the HTML5 format.
     *
     * @since 3.6.0
     *
     * @see wp_list_comments()
     *
     * @param WP_Comment $comment Comment to display.
     * @param int        $depth   Depth of the current comment.
     * @param array      $args    An array of arguments.
     */
    protected function html5_comment($comment, $depth, $args)
    {
    }
}