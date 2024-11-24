<?php


/**
 * Customize Header Image Control class.
 *
 * @since 3.4.0
 *
 * @see WP_Customize_Image_Control
 */
class WP_Customize_Header_Image_Control extends \WP_Customize_Image_Control
{
    /**
     * Customize control type.
     *
     * @since 4.2.0
     * @var string
     */
    public $type = 'header';
    /**
     * Uploaded header images.
     *
     * @since 3.9.0
     * @var string
     */
    public $uploaded_headers;
    /**
     * Default header images.
     *
     * @since 3.9.0
     * @var string
     */
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
     */
    public function enqueue()
    {
    }
    /**
     * @global Custom_Image_Header $custom_image_header
     * @phpstan-return void
     */
    public function prepare_control()
    {
    }
    /**
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
     */
    public function render_content()
    {
    }
}