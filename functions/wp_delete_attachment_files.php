<?php


/**
 * Deletes all files that belong to the given attachment.
 *
 * @since 4.9.7
 *
 * @param int    $post_id      Attachment ID.
 * @param array  $meta         The attachment's meta data.
 * @param array  $backup_sizes The meta data for the attachment's backup images.
 * @param string $file         Absolute path to the attachment's file.
 * @return bool True on success, false on failure.
 */
function wp_delete_attachment_files($post_id, $meta, $backup_sizes, $file)
{
}