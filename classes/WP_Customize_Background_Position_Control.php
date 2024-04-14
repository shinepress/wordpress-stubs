<?php


/**
 * Customize API: WP_Customize_Background_Position_Control class
 *
 * @package WordPress
 * @subpackage Customize
 * @since 4.7.0
 */
/**
 * Customize Background Position Control class.
 *
 * @since 4.7.0
 *
 * @see WP_Customize_Control
 */
class WP_Customize_Background_Position_Control extends \WP_Customize_Control
{
    /**
     * Type.
     *
     * @since 4.7.0
     * @var string
     */
    public $type = 'background_position';
    /**
     * Don't render the control content from PHP, as it's rendered via JS on load.
     *
     * @since 4.7.0
     */
    public function render_content()
    {
    }
    /**
     * Render a JS template for the content of the position control.
     *
     * @since 4.7.0
     */
    public function content_template()
    {
    }
}