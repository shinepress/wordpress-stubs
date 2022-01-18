<?php


/**
 * Retrieves attachment metadata for attachment ID.
 *
 * @since 2.1.0
 *
 * @param int  $attachment_id Attachment post ID. Defaults to global $post.
 * @param bool $unfiltered    Optional. If true, filters are not run. Default false.
 * @return array|false {
 *     Attachment metadata. False on failure.
 *
 *     @type int    $width      The width of the attachment.
 *     @type int    $height     The height of the attachment.
 *     @type string $file       The file path relative to `wp-content/uploads`.
 *     @type array  $sizes      Keys are size slugs, each value is an array containing
 *                              'file', 'width', 'height', and 'mime-type'.
 *     @type array  $image_meta Image metadata.
 * }
 */
function wp_get_attachment_metadata($attachment_id = 0, $unfiltered = \false)
{
}