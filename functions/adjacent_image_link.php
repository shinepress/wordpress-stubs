<?php


/**
 * Displays next or previous image link that has the same post parent.
 *
 * Retrieves the current attachment object from the $post global.
 *
 * @since 2.5.0
 *
 * @param bool         $prev Optional. Whether to display the next (false) or previous (true) link. Default true.
 * @param string|int[] $size Optional. Image size. Accepts any registered image size name, or an array
 *                           of width and height values in pixels (in that order). Default 'thumbnail'.
 * @param bool         $text Optional. Link text. Default false.
 */
function adjacent_image_link($prev = \true, $size = 'thumbnail', $text = \false)
{
}