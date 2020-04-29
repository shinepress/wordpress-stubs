<?php


/**
 * Customize API: WP_Customize_Header_Image_Control class
 *
 * @package WordPress
 * @subpackage Customize
 * @since 4.4.0
 */
/**
 * Customize Header Image Control class.
 *
 * @since 3.4.0
 *
 * @see WP_Customize_Image_Control
 */
class WP_Customize_Header_Image_Control extends \WP_Customize_Image_Control
{
    public $type = 'header';
    public $uploaded_headers;
    public $default_headers;
    /**
     * Constructor.
     *
     * @since 3.4.0
     *
     * @param WP_Customize_Manager $manager Customizer bootstrap instance.
     */
    public function __construct($manager)
    {
    }
    /**
     * @access public
     */
    public function enqueue()
    {
    }
    /**
     *
     * @global Custom_Image_Header $custom_image_header
     */
    public function prepare_control()
    {
    }
    /**
     * @access public
     */
    public function print_header_image_template()
    {
    }
    /**
     * @return string|void
     */
    public function get_current_image_src()
    {
    }
    /**
     * @access public
     */
    public function render_content()
    {
    }
}