<?php


/**
 * Retrieves the path to an uploaded image file.
 *
 * Similar to `get_attached_file()` however some images may have been processed after uploading
 * to make them suitable for web use. In this case the attached "full" size file is usually replaced
 * with a scaled down version of the original image. This function always returns the path
 * to the originally uploaded image file.
 *
 * @since 5.3.0
 *
 * @param int $attachment_id Attachment ID.
 * @return string|false Path to the original image file or false if the attachment is not an image.
 */
function wp_get_original_image_path($attachment_id)
{
}