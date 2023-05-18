<?php


/**
 * Extracts meta information about a webp file: width, height and type.
 *
 * @since 5.8.0
 *
 * @param string $filename Path to a WebP file.
 * @return array $webp_info {
 *     An array of WebP image information.
 *
 *     @type array $size {
 *         @type int|false    $width  Image width on success, false on failure.
 *         @type int|false    $height Image height on success, false on failure.
 *         @type string|false $type   The WebP type: one of 'lossy', 'lossless' or 'animated-alpha'.
 *                                    False on failure.
 *     }
 * @phpstan-return array{
 *   width: int|false,
 *   height: int|false,
 *   type: string|false,
 * }
 */
function wp_get_webp_info($filename)
{
}