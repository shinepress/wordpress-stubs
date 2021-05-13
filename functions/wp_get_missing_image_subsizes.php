<?php


/**
 * Compare the existing image sub-sizes (as saved in the attachment meta)
 * to the currently registered image sub-sizes, and return the difference.
 *
 * Registered sub-sizes that are larger than the image are skipped.
 *
 * @since 5.3.0
 *
 * @param int $attachment_id The image attachment post ID.
 * @return array An array of the image sub-sizes that are currently defined but don't exist for this image.
 */
function wp_get_missing_image_subsizes($attachment_id)
{
}