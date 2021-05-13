<?php


/**
 * Scale an image to fit a particular size (such as 'thumb' or 'medium').
 *
 * Array with image url, width, height, and whether is intermediate size, in
 * that order is returned on success is returned. $is_intermediate is true if
 * $url is a resized image, false if it is the original.
 *
 * The URL might be the original image, or it might be a resized version. This
 * function won't create a new resized copy, it will just return an already
 * resized one if it exists.
 *
 * A plugin may use the {@see 'image_downsize'} filter to hook into and offer image
 * resizing services for images. The hook must return an array with the same
 * elements that are returned in the function. The first element being the URL
 * to the new image that was resized.
 *
 * @since 2.5.0
 *
 * @param int          $id   Attachment ID for image.
 * @param array|string $size Optional. Image size to scale to. Accepts any valid image size,
 *                           or an array of width and height values in pixels (in that order).
 *                           Default 'medium'.
 * @return false|array Array containing the image URL, width, height, and boolean for whether
 *                     the image is an intermediate size. False on failure.
 */
function image_downsize($id, $size = 'medium')
{
}