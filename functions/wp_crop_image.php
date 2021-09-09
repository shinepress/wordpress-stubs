<?php


/**
 * File contains all the administration image manipulation functions.
 *
 * @package WordPress
 * @subpackage Administration
 */
/**
 * Crops an image to a given size.
 *
 * @since 2.1.0
 *
 * @param string|int   $src      The source file or Attachment ID.
 * @param int          $src_x    The start x position to crop from.
 * @param int          $src_y    The start y position to crop from.
 * @param int          $src_w    The width to crop.
 * @param int          $src_h    The height to crop.
 * @param int          $dst_w    The destination width.
 * @param int          $dst_h    The destination height.
 * @param bool|false   $src_abs  Optional. If the source crop points are absolute.
 * @param string|false $dst_file Optional. The destination file to write to.
 * @return string|WP_Error New filepath on success, WP_Error on failure.
 */
function wp_crop_image($src, $src_x, $src_y, $src_w, $src_h, $dst_w, $dst_h, $src_abs = \false, $dst_file = \false)
{
}