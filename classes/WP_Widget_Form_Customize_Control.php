<?php


/**
 * Customize API: WP_Widget_Form_Customize_Control class
 *
 * @package WordPress
 * @subpackage Customize
 * @since 4.4.0
 */
/**
 * Widget Form Customize Control class.
 *
 * @since 3.9.0
 *
 * @see WP_Customize_Control
 */
class WP_Widget_Form_Customize_Control extends \WP_Customize_Control
{
    public $type = 'widget_form';
    public $widget_id;
    public $widget_id_base;
    public $sidebar_id;
    public $is_new = \false;
    public $width;
    public $height;
    public $is_wide = \false;
    /**
     * Gather control params for exporting to JavaScript.
     *
     * @global array $wp_registered_widgets
     */
    public function to_json()
    {
    }
    /**
     * Override render_content to be no-op since content is exported via to_json for deferred embedding.
     */
    public function render_content()
    {
    }
    /**
     * Whether the current widget is rendered on the page.
     *
     * @since 4.0.0
     * @access public
     *
     * @return bool Whether the widget is rendered.
     */
    public function active_callback()
    {
    }
}