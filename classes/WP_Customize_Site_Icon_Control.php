<?php


/**
 * Customize API: WP_Customize_Site_Icon_Control class
 *
 * @package WordPress
 * @subpackage Customize
 * @since 4.4.0
 */
/**
 * Customize Site Icon control class.
 *
 * Used only for custom functionality in JavaScript.
 *
 * @since 4.3.0
 *
 * @see WP_Customize_Cropped_Image_Control
 */
class WP_Customize_Site_Icon_Control extends \WP_Customize_Cropped_Image_Control
{
    /**
     * Control type.
     *
     * @since 4.3.0
     * @var string
     */
    public $type = 'site_icon';
    /**
     * Constructor.
     *
     * @since 4.3.0
     *
     * @see WP_Customize_Control::__construct()
     *
     * @param WP_Customize_Manager $manager Customizer bootstrap instance.
     * @param string               $id      Control ID.
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
     * Renders a JS template for the content of the site icon control.
     *
     * @since 4.5.0
     */
    public function content_template()
    {
    }
}