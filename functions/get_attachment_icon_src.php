<?php


/**
 * Retrieve icon URL and Path.
 *
 * @since 2.1.0
 * @deprecated 2.5.0 Use wp_get_attachment_image_src()
 * @see wp_get_attachment_image_src()
 *
 * @param int  $id       Optional. Post ID.
 * @param bool $fullsize Optional. Whether to have full image. Default false.
 * @return array Icon URL and full path to file, respectively.
 */
function get_attachment_icon_src($id = 0, $fullsize = \false)
{
}