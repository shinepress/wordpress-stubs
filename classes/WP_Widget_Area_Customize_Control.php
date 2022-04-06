<?php


/**
 * Customize API: WP_Widget_Area_Customize_Control class
 *
 * @package WordPress
 * @subpackage Customize
 * @since 3.4.0
 */
/**
 * Widget Area Customize Control class.
 *
 * @since 3.9.0
 *
 * @see WP_Customize_Control
 */
class WP_Widget_Area_Customize_Control extends \WP_Customize_Control
{
    /**
     * Customize control type.
     *
     * @since 3.9.0
     * @var string
     */
    public $type = 'sidebar_widgets';
    /**
     * Sidebar ID.
     *
     * @since 3.9.0
     * @var int|string
     */
    public $sidebar_id;
    /**
     * Refreshes the parameters passed to the JavaScript via JSON.
     *
     * @since 3.9.0
     */
    public function to_json()
    {
    }
    /**
     * Renders the control's content.
     *
     * @since 3.9.0
     */
    public function render_content()
    {
    }
}