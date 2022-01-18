<?php


/**
 * Customize API: WP_Customize_Nav_Menu_Location_Control class
 *
 * @package WordPress
 * @subpackage Customize
 * @since 4.4.0
 */
/**
 * Customize Menu Location Control Class.
 *
 * This custom control is only needed for JS.
 *
 * @since 4.3.0
 *
 * @see WP_Customize_Control
 */
class WP_Customize_Nav_Menu_Location_Control extends \WP_Customize_Control
{
    /**
     * Control type.
     *
     * @since 4.3.0
     * @access public
     * @var string
     */
    public $type = 'nav_menu_location';
    /**
     * Location ID.
     *
     * @since 4.3.0
     * @access public
     * @var string
     */
    public $location_id = '';
    /**
     * Refresh the parameters passed to JavaScript via JSON.
     *
     * @since 4.3.0
     * @access public
     *
     * @see WP_Customize_Control::to_json()
     */
    public function to_json()
    {
    }
    /**
     * Render content just like a normal select control.
     *
     * @since 4.3.0
     * @access public
     */
    public function render_content()
    {
    }
}