<?php


/**
 * Widget API: WP_Widget_Media_Gallery class
 *
 * @package WordPress
 * @subpackage Widgets
 * @since 4.9.0
 */
/**
 * Core class that implements a gallery widget.
 *
 * @since 4.9.0
 *
 * @see WP_Widget_Media
 * @see WP_Widget
 */
class WP_Widget_Media_Gallery extends \WP_Widget_Media
{
    /**
     * Constructor.
     *
     * @since 4.9.0
     */
    public function __construct()
    {
    }
    /**
     * Get schema for properties of a widget instance (item).
     *
     * @since 4.9.0
     *
     * @see WP_REST_Controller::get_item_schema()
     * @see WP_REST_Controller::get_additional_fields()
     * @link https://core.trac.wordpress.org/ticket/35574
     *
     * @return array Schema for properties.
     */
    public function get_instance_schema()
    {
    }
    /**
     * Render the media on the frontend.
     *
     * @since 4.9.0
     *
     * @param array $instance Widget instance props.
     */
    public function render_media($instance)
    {
    }
    /**
     * Loads the required media files for the media manager and scripts for media widgets.
     *
     * @since 4.9.0
     */
    public function enqueue_admin_scripts()
    {
    }
    /**
     * Render form template scripts.
     *
     * @since 4.9.0
     */
    public function render_control_template_scripts()
    {
    }
    /**
     * Whether the widget has content to show.
     *
     * @since 4.9.0
     * @access protected
     *
     * @param array $instance Widget instance props.
     * @return bool Whether widget has content.
     */
    protected function has_content($instance)
    {
    }
}