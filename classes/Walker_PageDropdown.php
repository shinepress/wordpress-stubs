<?php


/**
 * Post API: Walker_PageDropdown class
 *
 * @package WordPress
 * @subpackage Post
 * @since 4.4.0
 */
/**
 * Core class used to create an HTML drop-down list of pages.
 *
 * @since 2.1.0
 *
 * @see Walker
 */
class Walker_PageDropdown extends \Walker
{
    /**
     * What the class handles.
     *
     * @since 2.1.0
     * @var string
     *
     * @see Walker::$tree_type
     */
    public $tree_type = 'page';
    /**
     * Database fields to use.
     *
     * @since 2.1.0
     * @var array
     *
     * @see Walker::$db_fields
     * @todo Decouple this
     */
    public $db_fields = array('parent' => 'post_parent', 'id' => 'ID');
    /**
     * Starts the element output.
     *
     * @since 2.1.0
     * @since 5.9.0 Renamed `$page` to `$data_object` and `$id` to `$current_object_id`
     *              to match parent class for PHP 8 named parameter support.
     *
     * @see Walker::start_el()
     *
     * @param string  $output             Used to append additional content. Passed by reference.
     * @param WP_Post $data_object        Page data object.
     * @param int     $depth              Optional. Depth of page in reference to parent pages.
     *                                    Used for padding. Default 0.
     * @param array   $args               Optional. Uses 'selected' argument for selected page to
     *                                    set selected HTML attribute for option element. Uses
     *                                    'value_field' argument to fill "value" attribute.
     *                                    See wp_dropdown_pages(). Default empty array.
     * @param int     $current_object_id  Optional. ID of the current page. Default 0.
     */
    public function start_el(&$output, $data_object, $depth = 0, $args = array(), $current_object_id = 0)
    {
    }
}