<?php


/**
 * Determines whether the value is an acceptable type for GD image functions.
 *
 * In PHP 8.0, the GD extension uses GdImage objects for its data structures.
 * This function checks if the passed value is either a resource of type `gd`
 * or a GdImage object instance. Any other type will return false.
 *
 * @since 5.6.0
 *
 * @param resource|GdImage|false $image A value to check the type for.
 * @return bool True if $image is either a GD image resource or GdImage instance,
 *              false otherwise.
 */
function is_gd_image($image)
{
}