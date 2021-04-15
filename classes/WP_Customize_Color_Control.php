<?php


/**
 * Customize API: WP_Customize_Color_Control class
 *
 * @package WordPress
 * @subpackage Customize
 * @since 4.4.0
 */
/**
 * Customize Color Control class.
 *
 * @since 3.4.0
 *
 * @see WP_Customize_Control
 */
class WP_Customize_Color_Control extends \WP_Customize_Control
{
    /**
     * Type.
     *
     * @var string
     */
    public $type = 'color';
    /**
     * Statuses.
     *
     * @var array
     */
    public $statuses;
    /**
     * Mode.
     *
     * @since 4.7.0
     * @var string
     */
    public $mode = 'full';
    /**
     * Constructor.
     *
     * @since 3.4.0
     *
     * @see WP_Customize_Control::__construct()
     *
     * @param WP_Customize_Manager $manager Customizer bootstrap instance.
     * @param string               $id      Control ID.
     * @param array                $args    Optional. Arguments to override class property defaults.
     *                                      See WP_Customize_Control::__construct() for information
     *                                      on accepted arguments. Default empty array.
     */
    public function __construct($manager, $id, $args = array())
    {
    }
    /**
     * Enqueue scripts/styles for the color picker.
     *
     * @since 3.4.0
     */
    public function enqueue()
    {
    }
    /**
     * Refresh the parameters passed to the JavaScript via JSON.
     *
     * @since 3.4.0
     * @uses WP_Customize_Control::to_json()
     */
    public function to_json()
    {
    }
    /**
     * Don't render the control content from PHP, as it's rendered via JS on load.
     *
     * @since 3.4.0
     */
    public function render_content()
    {
    }
    /**
     * Render a JS template for the content of the color picker control.
     *
     * @since 4.1.0
     */
    public function content_template()
    {
    }
}