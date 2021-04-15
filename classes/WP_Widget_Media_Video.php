<?php


/**
 * Widget API: WP_Widget_Media_Video class
 *
 * @package WordPress
 * @subpackage Widgets
 * @since 4.8.0
 */
/**
 * Core class that implements a video widget.
 *
 * @since 4.8.0
 *
 * @see WP_Widget
 */
class WP_Widget_Media_Video extends \WP_Widget_Media
{
    /**
     * Constructor.
     *
     * @since  4.8.0
     * @access public
     */
    public function __construct()
    {
    }
    /**
     * Get schema for properties of a widget instance (item).
     *
     * @since  4.8.0
     * @access public
     *
     * @see WP_REST_Controller::get_item_schema()
     * @see WP_REST_Controller::get_additional_fields()
     * @link https://core.trac.wordpress.org/ticket/35574
     * @return array Schema for properties.
     */
    public function get_instance_schema()
    {
    }
    /**
     * Render the media on the frontend.
     *
     * @since  4.8.0
     * @access public
     *
     * @param array $instance Widget instance props.
     *
     * @return void
     */
    public function render_media($instance)
    {
    }
    /**
     * Inject max-width and remove height for videos too constrained to fit inside sidebars on frontend.
     *
     * @since 4.8.0
     * @access public
     *
     * @param string $html Video shortcode HTML output.
     * @return string HTML Output.
     */
    public function inject_video_max_width_style($html)
    {
    }
    /**
     * Enqueue preview scripts.
     *
     * These scripts normally are enqueued just-in-time when a video shortcode is used.
     * In the customizer, however, widgets can be dynamically added and rendered via
     * selective refresh, and so it is important to unconditionally enqueue them in
     * case a widget does get added.
     *
     * @since 4.8.0
     * @access public
     */
    public function enqueue_preview_scripts()
    {
    }
    /**
     * Loads the required scripts and styles for the widget control.
     *
     * @since 4.8.0
     * @access public
     */
    public function enqueue_admin_scripts()
    {
    }
    /**
     * Render form template scripts.
     *
     * @since 4.8.0
     * @access public
     */
    public function render_control_template_scripts()
    {
    }
}