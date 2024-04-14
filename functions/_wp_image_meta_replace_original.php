<?php


/**
 * Updates the attached file and image meta data when the original image was edited.
 *
 * @since 5.3.0
 * @since 6.0.0 The `$filesize` value was added to the returned array.
 * @access private
 *
 * @param array  $saved_data    The data returned from WP_Image_Editor after successfully saving an image.
 * @param string $original_file Path to the original file.
 * @param array  $image_meta    The image meta data.
 * @param int    $attachment_id The attachment post ID.
 * @return array The updated image meta data.
 */
function _wp_image_meta_replace_original($saved_data, $original_file, $image_meta, $attachment_id)
{
}