<?php


/**
 * Customize API: WP_Customize_Code_Editor_Control class
 *
 * @package WordPress
 * @subpackage Customize
 * @since 4.9.0
 */
/**
 * Customize Code Editor Control class.
 *
 * @since 4.9.0
 *
 * @see WP_Customize_Control
 */
class WP_Customize_Code_Editor_Control extends \WP_Customize_Control
{
    /**
     * Customize control type.
     *
     * @since 4.9.0
     * @var string
     */
    public $type = 'code_editor';
    /**
     * Type of code that is being edited.
     *
     * @since 4.9.0
     * @var string
     */
    public $code_type = '';
    /**
     * Code editor settings.
     *
     * @see wp_enqueue_code_editor()
     * @since 4.9.0
     * @var array|false
     */
    public $editor_settings = array();
    /**
     * Enqueue control related scripts/styles.
     *
     * @since 4.9.0
     */
    public function enqueue()
    {
    }
    /**
     * Refresh the parameters passed to the JavaScript via JSON.
     *
     * @since 4.9.0
     *
     * @see WP_Customize_Control::json()
     *
     * @return array Array of parameters passed to the JavaScript.
     */
    public function json()
    {
    }
    /**
     * Don't render the control content from PHP, as it's rendered via JS on load.
     *
     * @since 4.9.0
     */
    public function render_content()
    {
    }
    /**
     * Render a JS template for control display.
     *
     * @since 4.9.0
     */
    public function content_template()
    {
    }
}