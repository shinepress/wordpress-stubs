<?php


/**
 * Customize API: WP_Customize_Background_Image_Control class
 *
 * @package WordPress
 * @subpackage Customize
 * @since 4.4.0
 */
/**
 * Customize Background Image Control class.
 *
 * @since 3.4.0
 *
 * @see WP_Customize_Image_Control
 */
class WP_Customize_Background_Image_Control extends \WP_Customize_Image_Control
{
    public $type = 'background';
    /**
     * Constructor.
     *
     * @since 3.4.0
     * @uses WP_Customize_Image_Control::__construct()
     *
     * @param WP_Customize_Manager $manager Customizer bootstrap instance.
     */
    public function __construct($manager)
    {
    }
    /**
     * Enqueue control related scripts/styles.
     *
     * @since 4.1.0
     */
    public function enqueue()
    {
    }
}