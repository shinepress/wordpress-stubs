<?php


/**
 * Retrieves the image HTML to send to the editor.
 *
 * @since 2.5.0
 *
 * @param int          $id      Image attachment ID.
 * @param string       $caption Image caption.
 * @param string       $title   Image title attribute.
 * @param string       $align   Image CSS alignment property.
 * @param string       $url     Optional. Image src URL. Default empty.
 * @param bool|string  $rel     Optional. Value for rel attribute or whether to add a default value. Default false.
 * @param string|array $size    Optional. Image size. Accepts any valid image size, or an array of width
 *                              and height values in pixels (in that order). Default 'medium'.
 * @param string       $alt     Optional. Image alt attribute. Default empty.
 * @return string The HTML output to insert into the editor.
 */
function get_image_send_to_editor($id, $caption, $title, $align, $url = '', $rel = \false, $size = 'medium', $alt = '')
{
}