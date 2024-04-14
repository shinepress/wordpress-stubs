<?php


/**
 * Customize API: WP_Customize_Media_Control class
 *
 * @package WordPress
 * @subpackage Customize
 * @since 4.4.0
 */
/**
 * Customize Media Control class.
 *
 * @since 4.2.0
 *
 * @see WP_Customize_Control
 */
class WP_Customize_Media_Control extends \WP_Customize_Control
{
    /**
     * Control type.
     *
     * @since 4.2.0
     * @var string
     */
    public $type = 'media';
    /**
     * Media control mime type.
     *
     * @since 4.2.0
     * @var string
     */
    public $mime_type = '';
    /**
     * Button labels.
     *
     * @since 4.2.0
     * @var array
     */
    public $button_labels = array();
    /**
     * Constructor.
     *
     * @since 4.1.0
     * @since 4.2.0 Moved from WP_Customize_Upload_Control.
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
     * Enqueue control related scripts/styles.
     *
     * @since 3.4.0
     * @since 4.2.0 Moved from WP_Customize_Upload_Control.
     */
    public function enqueue()
    {
    }
    /**
     * Refresh the parameters passed to the JavaScript via JSON.
     *
     * @since 3.4.0
     * @since 4.2.0 Moved from WP_Customize_Upload_Control.
     *
     * @see WP_Customize_Control::to_json()
     */
    public function to_json()
    {
    }
    /**
     * Don't render any content for this control from PHP.
     *
     * @since 3.4.0
     * @since 4.2.0 Moved from WP_Customize_Upload_Control.
     *
     * @see WP_Customize_Media_Control::content_template()
     */
    public function render_content()
    {
    }
    /**
     * Render a JS template for the content of the media control.
     *
     * @since 4.1.0
     * @since 4.2.0 Moved from WP_Customize_Upload_Control.
     */
    public function content_template()
    {
    }
    /**
     * Get default button labels.
     *
     * Provides an array of the default button labels based on the mime type of the current control.
     *
     * @since 4.9.0
     *
     * @return string[] An associative array of default button labels keyed by the button name.
     */
    public function get_default_button_labels()
    {
    }
}