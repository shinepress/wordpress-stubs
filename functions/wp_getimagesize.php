<?php


/**
 * Allows PHP's getimagesize() to be debuggable when necessary.
 *
 * @since 5.7.0
 *
 * @param string $filename  The file path.
 * @param array  $imageinfo Extended image information, passed by reference.
 * @return array|false Array of image information or false on failure.
 */
function wp_getimagesize($filename, &$imageinfo = array())
{
}