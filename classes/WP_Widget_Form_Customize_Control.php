<?php


/**
 * Widget Form Customize Control class.
 *
 * @since 3.9.0
 *
 * @see WP_Customize_Control
 */
class WP_Widget_Form_Customize_Control extends \WP_Customize_Control
{
    /**
     * Customize control type.
     *
     * @since 3.9.0
     * @var string
     */
    public $type = 'widget_form';
    /**
     * Widget ID.
     *
     * @since 3.9.0
     * @var string
     */
    public $widget_id;
    /**
     * Widget ID base.
     *
     * @since 3.9.0
     * @var string
     */
    public $widget_id_base;
    /**
     * Sidebar ID.
     *
     * @since 3.9.0
     * @var string
     */
    public $sidebar_id;
    /**
     * Widget status.
     *
     * @since 3.9.0
     * @var bool True if new, false otherwise. Default false.
     */
    public $is_new = \false;
    /**
     * Widget width.
     *
     * @since 3.9.0
     * @var int
     */
    public $width;
    /**
     * Widget height.
     *
     * @since 3.9.0
     * @var int
     */
    public $height;
    /**
     * Widget mode.
     *
     * @since 3.9.0
     * @var bool True if wide, false otherwise. Default false.
     */
    public $is_wide = \false;
    /**
     * Gather control params for exporting to JavaScript.
     *
     * @since 3.9.0
     *
     * @global array $wp_registered_widgets
     */
    public function to_json()
    {
    }
    /**
     * Override render_content to be no-op since content is exported via to_json for deferred embedding.
     *
     * @since 3.9.0
     */
    public function render_content()
    {
    }
    /**
     * Whether the current widget is rendered on the page.
     *
     * @since 4.0.0
     *
     * @return bool Whether the widget is rendered.
     */
    public function active_callback()
    {
    }
}