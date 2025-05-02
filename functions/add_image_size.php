<?php


/**
 * Registers a new image size.
 *
 * @since 2.9.0
 *
 * @global array $_wp_additional_image_sizes Associative array of additional image sizes.
 *
 * @param string     $name   Image size identifier.
 * @param int        $width  Optional. Image width in pixels. Default 0.
 * @param int        $height Optional. Image height in pixels. Default 0.
 * @param bool|array $crop   {
 *     Optional. Image cropping behavior. If false, the image will be scaled (default).
 *     If true, image will be cropped to the specified dimensions using center positions.
 *     If an array, the image will be cropped using the array to specify the crop location:
 *
 *     @type string $0 The x crop position. Accepts 'left', 'center', or 'right'.
 *     @type string $1 The y crop position. Accepts 'top', 'center', or 'bottom'.
 * }
 * @phpstan-param bool|array{
 *   0: string,
 *   1: string,
 * } $crop
 */
function add_image_size($name, $width = 0, $height = 0, $crop = \false)
{
}