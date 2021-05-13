<?php


/**
 * Customize API: WP_Customize_Theme_Control class
 *
 * @package WordPress
 * @subpackage Customize
 * @since 4.4.0
 */
/**
 * Customize Theme Control class.
 *
 * @since 4.2.0
 *
 * @see WP_Customize_Control
 */
class WP_Customize_Theme_Control extends \WP_Customize_Control
{
    /**
     * Customize control type.
     *
     * @since 4.2.0
     * @var string
     */
    public $type = 'theme';
    /**
     * Theme object.
     *
     * @since 4.2.0
     * @var WP_Theme
     */
    public $theme;
    /**
     * Refresh the parameters passed to the JavaScript via JSON.
     *
     * @since 4.2.0
     *
     * @see WP_Customize_Control::to_json()
     */
    public function to_json()
    {
    }
    /**
     * Don't render the control content from PHP, as it's rendered via JS on load.
     *
     * @since 4.2.0
     */
    public function render_content()
    {
    }
    /**
     * Render a JS template for theme display.
     *
     * @since 4.2.0
     */
    public function content_template()
    {
    }
}