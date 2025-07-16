<?php


/**
 * Returns an image resource. Internal use only.
 *
 * @since 2.9.0
 * @deprecated 3.5.0 Use WP_Image_Editor::rotate()
 * @see WP_Image_Editor::rotate()
 *
 * @ignore
 * @param resource|GdImage $img   Image resource.
 * @param float|int        $angle Image rotation angle, in degrees.
 * @return resource|GdImage|false GD image resource or GdImage instance, false otherwise.
 */
function _rotate_image_resource($img, $angle)
{
}