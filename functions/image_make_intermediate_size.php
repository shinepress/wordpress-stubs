<?php


/**
 * Resizes an image to make a thumbnail or intermediate size.
 *
 * The returned array has the file size, the image width, and image height. The
 * {@see 'image_make_intermediate_size'} filter can be used to hook in and change the
 * values of the returned array. The only parameter is the resized file path.
 *
 * @since 2.5.0
 *
 * @param string $file   File path.
 * @param int    $width  Image width.
 * @param int    $height Image height.
 * @param bool   $crop   Optional. Whether to crop image to specified width and height or resize.
 *                       Default false.
 * @return false|array False, if no image was created. Metadata array on success.
 */
function image_make_intermediate_size($file, $width, $height, $crop = \false)
{
}