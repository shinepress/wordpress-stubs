<?php


/**
 * Adds `decoding` attribute to an `img` HTML tag.
 *
 * The `decoding` attribute allows developers to indicate whether the
 * browser can decode the image off the main thread (`async`), on the
 * main thread (`sync`) or as determined by the browser (`auto`).
 *
 * By default WordPress adds `decoding="async"` to images but developers
 * can use the {@see 'wp_img_tag_add_decoding_attr'} filter to modify this
 * to remove the attribute or set it to another accepted value.
 *
 * @since 6.1.0
 *
 * @param string $image   The HTML `img` tag where the attribute should be added.
 * @param string $context Additional context to pass to the filters.
 *
 * @return string Converted `img` tag with `decoding` attribute added.
 */
function wp_img_tag_add_decoding_attr($image, $context)
{
}