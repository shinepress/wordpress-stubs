<?php


/**
 * Customize API: WP_Customize_Nav_Menu_Locations_Control class
 *
 * @package WordPress
 * @subpackage Customize
 * @since 4.9.0
 */
/**
 * Customize Nav Menu Locations Control Class.
 *
 * @since 4.9.0
 *
 * @see WP_Customize_Control
 */
class WP_Customize_Nav_Menu_Locations_Control extends \WP_Customize_Control
{
    /**
     * Control type.
     *
     * @since 4.9.0
     * @var string
     */
    public $type = 'nav_menu_locations';
    /**
     * Don't render the control's content - it uses a JS template instead.
     *
     * @since 4.9.0
     */
    public function render_content()
    {
    }
    /**
     * JS/Underscore template for the control UI.
     *
     * @since 4.9.0
     */
    public function content_template()
    {
    }
}