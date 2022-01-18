<?php


/**
 * Load an image from a string, if PHP supports it.
 *
 * @since 2.1.0
 * @deprecated 3.5.0 Use wp_get_image_editor()
 * @see wp_get_image_editor()
 *
 * @param string $file Filename of the image to load.
 * @return resource|GdImage|string The resulting image resource or GdImage instance on success,
 *                                 error string on failure.
 */
function wp_load_image($file)
{
}