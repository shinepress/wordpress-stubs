<?php


/**
 * A setting that is used to filter a value, but will not save the results.
 *
 * Results should be properly handled using another setting or callback.
 *
 * @since 3.4.0
 *
 * @see WP_Customize_Setting
 */
final class WP_Customize_Header_Image_Setting extends \WP_Customize_Setting
{
    /**
     * Unique string identifier for the setting.
     *
     * @since 3.4.0
     * @var string
     */
    public $id = 'header_image_data';
    /**
     * @since 3.4.0
     *
     * @global Custom_Image_Header $custom_image_header
     *
     * @param mixed $value The value to update.
     */
    public function update($value)
    {
    }
}