<?php


/**
 * Customize API: WP_Customize_Nav_Menu_Item_Control class
 *
 * @package WordPress
 * @subpackage Customize
 * @since 4.4.0
 */
/**
 * Customize control to represent the name field for a given menu.
 *
 * @since 4.3.0
 */
class WP_Customize_Nav_Menu_Item_Control extends \WP_Customize_Control
{
    /**
     * Control type.
     *
     * @since 4.3.0
     * @access public
     * @var string
     */
    public $type = 'nav_menu_item';
    /**
     * The nav menu item setting.
     *
     * @since 4.3.0
     * @access public
     * @var WP_Customize_Nav_Menu_Item_Setting
     */
    public $setting;
    /**
     * Constructor.
     *
     * @since 4.3.0
     * @access public
     *
     * @see WP_Customize_Control::__construct()
     *
     * @param WP_Customize_Manager $manager Customizer bootstrap instance.
     * @param string               $id      The control ID.
     * @param array                $args    Optional. Overrides class property defaults.
     */
    public function __construct($manager, $id, $args = array())
    {
    }
    /**
     * Don't render the control's content - it's rendered with a JS template.
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