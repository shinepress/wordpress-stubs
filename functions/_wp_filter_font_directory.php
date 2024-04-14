<?php


/**
 * A callback function for use in the {@see 'upload_dir'} filter.
 *
 * This function is intended for internal use only and should not be used by plugins and themes.
 * Use wp_get_font_dir() instead.
 *
 * @since 6.5.0
 * @access private
 *
 * @param string $font_dir The font directory.
 * @return string The modified font directory.
 */
function _wp_filter_font_directory($font_dir)
{
}