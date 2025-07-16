<?php


/**
 * Updates attachment file path based on attachment ID.
 *
 * Used to update the file path of the attachment, which uses post meta name
 * `_wp_attached_file` to store the path of the attachment.
 *
 * @since 2.1.0
 *
 * @param int    $attachment_id Attachment ID.
 * @param string $file          File path for the attachment.
 * @return int|bool Meta ID if the `_wp_attached_file` key didn't exist for the attachment.
 *                  True on successful update, false on failure or if the `$file` value passed
 *                  to the function is the same as the one that is already in the database.
 */
function update_attached_file($attachment_id, $file)
{
}