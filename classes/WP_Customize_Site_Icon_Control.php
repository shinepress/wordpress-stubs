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
     * @param WP_Customize_Manager $manager Customizer bootstrap instance.
     * @param string               $id      Control ID.
     * @param array                $args    Optional. Arguments to override class property defaults.
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