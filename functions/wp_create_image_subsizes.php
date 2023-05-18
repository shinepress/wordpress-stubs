<?php


/**
 * Creates image sub-sizes, adds the new data to the image meta `sizes` array, and updates the image metadata.
 *
 * Intended for use after an image is uploaded. Saves/updates the image metadata after each
 * sub-size is created. If there was an error, it is added to the returned image metadata array.
 *
 * @since 5.3.0
 *
 * @param string $file          Full path to the image file.
 * @param int    $attachment_id Attachment Id to process.
 * @return array The image attachment meta data.
 */
function wp_create_image_subsizes($file, $attachment_id)
{
}