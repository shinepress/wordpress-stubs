<?php


/**
 * Creates default array of embed parameters.
 *
 * The width defaults to the content width as specified by the theme. If the
 * theme does not specify a content width, then 500px is used.
 *
 * The default height is 1.5 times the width, or 1000px, whichever is smaller.
 *
 * The {@see 'embed_defaults'} filter can be used to adjust either of these values.
 *
 * @since 2.9.0
 *
 * @global int $content_width
 *
 * @param string $url Optional. The URL that should be embedded. Default empty.
 * @return array {
 *     Indexed array of the embed width and height in pixels.
 *
 *     @type int $0 The embed width.
 *     @type int $1 The embed height.
 * }
 * @phpstan-return array{
 *   0: int,
 *   1: int,
 * }
 */
function wp_embed_defaults($url = '')
{
}