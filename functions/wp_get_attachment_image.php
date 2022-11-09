<?php


/**
 * Get an HTML img element representing an image attachment
 *
 * While `$size` will accept an array, it is better to register a size with
 * add_image_size() so that a cropped version is generated. It's much more
 * efficient than having to find the closest-sized image and then having the
 * browser scale down the image.
 *
 * @since 2.5.0
 *
 * @param int          $attachment_id Image attachment ID.
 * @param string|array $size          Optional. Image size. Accepts any valid image size, or an array of width
 *                                    and height values in pixels (in that order). Default 'thumbnail'.
 * @param bool         $icon          Optional. Whether the image should be treated as an icon. Default false.
 * @param string|array $attr {
 *     Optional. Attributes for the image markup.
 *
 *     @type string $src    Image attachment URL.
 *     @type string $class  CSS class name or space-separated list of classes.
 *                          Default `attachment-$size_class size-$size_class`,
 *                          where `$size_class` is the image size being requested.
 *     @type string $alt    Image description for the alt attribute.
 *     @type string $srcset The 'srcset' attribute value.
 *     @type string $sizes  The 'sizes' attribute value.
 * }
 * @return string HTML img element or empty string on failure.
 * @phpstan-param array{
 *   src?: string,
 *   class?: string,
 *   alt?: string,
 *   srcset?: string,
 *   sizes?: string,
 * } $attr
 */
function wp_get_attachment_image($attachment_id, $size = 'thumbnail', $icon = \false, $attr = '')
{
}