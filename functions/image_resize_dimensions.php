<?php


/**
 * Retrieves calculated resize dimensions for use in WP_Image_Editor.
 *
 * Calculates dimensions and coordinates for a resized image that fits
 * within a specified width and height.
 *
 * @since 2.5.0
 *
 * @param int        $orig_w Original width in pixels.
 * @param int        $orig_h Original height in pixels.
 * @param int        $dest_w New width in pixels.
 * @param int        $dest_h New height in pixels.
 * @param bool|array $crop   {
 *     Optional. Image cropping behavior. If false, the image will be scaled (default).
 *     If true, image will be cropped to the specified dimensions using center positions.
 *     If an array, the image will be cropped using the array to specify the crop location:
 *
 *     @type string $0 The x crop position. Accepts 'left', 'center', or 'right'.
 *     @type string $1 The y crop position. Accepts 'top', 'center', or 'bottom'.
 * }
 * @return array|false Returned array matches parameters for `imagecopyresampled()`. False on failure.
 * @phpstan-param bool|array{
 *   0: string,
 *   1: string,
 * } $crop
 */
function image_resize_dimensions($orig_w, $orig_h, $dest_w, $dest_h, $crop = \false)
{
}