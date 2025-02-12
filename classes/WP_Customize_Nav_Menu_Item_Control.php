<?php


/**
 * Customize control to represent the name field for a given menu.
 *
 * @since 4.3.0
 *
 * @see WP_Customize_Control
 */
class WP_Customize_Nav_Menu_Item_Control extends \WP_Customize_Control
{
    /**
     * Control type.
     *
     * @since 4.3.0
     * @var string
     */
    public $type = 'nav_menu_item';
    /**
     * The nav menu item setting.
     *
     * @since 4.3.0
     * @var WP_Customize_Nav_Menu_Item_Setting
     */
    public $setting;
    /**
     * Constructor.
     *
     * @since 4.3.0
     *
     * @see WP_Customize_Control::__construct()
     *
     * @param WP_Customize_Manager $manager Customizer bootstrap instance.
     * @param string               $id      The control ID.
     * @param array                $args    Optional. Arguments to override class property defaults.
     *                                      See WP_Customize_Control::__construct() for information
     *                                      on accepted arguments. Default empty array.
     * @phpstan-param array{
     *   instance_number?: int,
     *   manager?: WP_Customize_Manager,
     *   id?: string,
     *   settings?: array,
     *   setting?: string,
     *   capability?: string,
     *   priority?: int,
     *   section?: string,
     *   label?: string,
     *   description?: string,
     *   choices?: array,
     *   input_attrs?: array,
     *   allow_addition?: bool,
     *   json?: array,
     *   type?: string,
     *   active_callback?: callable,
     * } $args See WP_Customize_Control::__construct()
     */
    public function __construct($manager, $id, $args = array())
    {
    }
    /**
     * Don't render the control's content - it's rendered with a JS template.
     *
     * @since 4.3.0
     */
    public function render_content()
    {
    }
    /**
     * JS/Underscore template for the control UI.
     *
     * @since 4.3.0
     */
    public function content_template()
    {
    }
    /**
     * Return parameters for this control.
     *
     * @since 4.3.0
     *
     * @return array Exported parameters.
     */
    public function json()
    {
    }
}