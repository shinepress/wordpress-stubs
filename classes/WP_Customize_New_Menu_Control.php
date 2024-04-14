<?php


/**
 * Customize control class for new menus.
 *
 * @since 4.3.0
 * @deprecated 4.9.0 This class is no longer used as of the menu creation UX introduced in #40104.
 *
 * @see WP_Customize_Control
 */
class WP_Customize_New_Menu_Control extends \WP_Customize_Control
{
    /**
     * Control type.
     *
     * @since 4.3.0
     * @var string
     */
    public $type = 'new_menu';
    /**
     * Constructor.
     *
     * @since 4.9.0
     * @deprecated 4.9.0
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
     *   active_callback?: callback,
     * } $args See WP_Customize_Control::__construct()
     */
    public function __construct(\WP_Customize_Manager $manager, $id, array $args = array())
    {
    }
    /**
     * Render the control's content.
     *
     * @since 4.3.0
     * @deprecated 4.9.0
     */
    public function render_content()
    {
    }
}