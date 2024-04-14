<?php


/**
 * Low-level function to create image sub-sizes.
 *
 * Updates the image meta after each sub-size is created.
 * Errors are stored in the returned image metadata array.
 *
 * @since 5.3.0
 * @access private
 *
 * @param array  $new_sizes     Array defining what sizes to create.
 * @param string $file          Full path to the image file.
 * @param array  $image_meta    The attachment meta data array.
 * @param int    $attachment_id Attachment ID to process.
 * @return array The attachment meta data with updated `sizes` array. Includes an array of errors encountered while resizing.
 */
function _wp_make_subsizes($new_sizes, $file, $image_meta, $attachment_id)
{
}