<?php


/**
 * Saves image to file.
 *
 * @since 2.9.0
 * @since 3.5.0 The `$image` parameter expects a `WP_Image_Editor` instance.
 * @since 6.0.0 The `$filesize` value was added to the returned array.
 *
 * @param string          $filename  Name of the file to be saved.
 * @param WP_Image_Editor $image     The image editor instance.
 * @param string          $mime_type The mime type of the image.
 * @param int             $post_id   Attachment post ID.
 * @return array|WP_Error|bool {
 *     Array on success or WP_Error if the file failed to save.
 *     When called with a deprecated value for the `$image` parameter,
 *     i.e. a non-`WP_Image_Editor` image resource or `GdImage` instance,
 *     the function will return true on success, false on failure.
 *
 *     @type string $path      Path to the image file.
 *     @type string $file      Name of the image file.
 *     @type int    $width     Image width.
 *     @type int    $height    Image height.
 *     @type string $mime-type The mime type of the image.
 *     @type int    $filesize  File size of the image.
 * }
 * @phpstan-return \WP_Error|bool|array{
 *   path: string,
 *   file: string,
 *   width: int,
 *   height: int,
 *   mime-type: string,
 *   filesize: int,
 * }
 */
function wp_save_image_file($filename, $image, $mime_type, $post_id)
{
}