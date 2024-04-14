<?php


/**
 * Widget API: WP_Widget_Media_Audio class
 *
 * @package WordPress
 * @subpackage Widgets
 * @since 4.8.0
 */
/**
 * Core class that implements an audio widget.
 *
 * @since 4.8.0
 *
 * @see WP_Widget_Media
 * @see WP_Widget
 */
class WP_Widget_Media_Audio extends \WP_Widget_Media
{
    /**
     * Constructor.
     *
     * @since 4.8.0
     */
    public function __construct()
    {
    }
    /**
     * Get schema for properties of a widget instance (item).
     *
     * @since 4.8.0
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
     * @since 4.8.0
     *
     * @param array $instance Widget instance props.
     */
    public function render_media($instance)
    {
    }
    /**
     * Enqueue preview scripts.
     *
     * These scripts normally are enqueued just-in-time when an audio shortcode is used.
     * In the customizer, however, widgets can be dynamically added and rendered via
     * selective refresh, and so it is important to unconditionally enqueue them in
     * case a widget does get added.
     *
     * @since 4.8.0
     */
    public function enqueue_preview_scripts()
    {
    }
    /**
     * Loads the required media files for the media manager and scripts for media widgets.
     *
     * @since 4.8.0
     */
    public function enqueue_admin_scripts()
    {
    }
    /**
     * Render form template scripts.
     *
     * @since 4.8.0
     */
    public function render_control_template_scripts()
    {
    }
}