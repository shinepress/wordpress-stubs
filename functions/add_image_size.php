<?php


/**
 * Register a new image size.
 *
 * @since 2.9.0
 *
 * @global array $_wp_additional_image_sizes Associative array of additional image sizes.
 *
 * @param string     $name   Image size identifier.
 * @param int        $width  Optional. Image width in pixels. Default 0.
 * @param int        $height Optional. Image height in pixels. Default 0.
 * @param bool|array $crop   Optional. Image cropping behavior. If false, the image will be scaled (default),
 *                           If true, image will be cropped to the specified dimensions using center positions.
 *                           If an array, the image will be cropped using the array to specify the crop location.
 *                           Array values must be in the format: array( x_crop_position, y_crop_position ) where:
 *                               - x_crop_position accepts: 'left', 'center', or 'right'.
 *                               - y_crop_position accepts: 'top', 'center', or 'bottom'.
 */
function add_image_size($name, $width = 0, $height = 0, $crop = \false)
{
}