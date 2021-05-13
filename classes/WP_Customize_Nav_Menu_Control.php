<?php


/**
 * Customize API: WP_Customize_Nav_Menu_Control class
 *
 * @package WordPress
 * @subpackage Customize
 * @since 4.4.0
 */
/**
 * Customize Nav Menu Control Class.
 *
 * @since 4.3.0
 */
class WP_Customize_Nav_Menu_Control extends \WP_Customize_Control
{
    /**
     * Control type.
     *
     * @since 4.3.0
     * @access public
     * @var string
     */
    public $type = 'nav_menu';
    /**
     * The nav menu setting.
     *
     * @since 4.3.0
     * @access public
     * @var WP_Customize_Nav_Menu_Setting
     */
    public $setting;
    /**
     * Don't render the control's content - it uses a JS template instead.
     *
     * @since 4.3.0
     * @access public
     */
    public function render_content()
    {
    }
    /**
     * JS/Underscore template for the control UI.
     *
     * @since 4.3.0
     * @access public
     */
    public function content_template()
    {
    }
    /**
     * Return parameters for this control.
     *
     * @since 4.3.0
     * @access public
     *
     * @return array Exported parameters.
     */
    public function json()
    {
    }
}