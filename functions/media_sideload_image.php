<?php


/**
 * Downloads an image from the specified URL and attaches it to a post.
 *
 * @since 2.6.0
 * @since 4.2.0 Introduced the `$return` parameter.
 *
 * @param string $file    The URL of the image to download.
 * @param int    $post_id The post ID the media is to be associated with.
 * @param string $desc    Optional. Description of the image.
 * @param string $return  Optional. Accepts 'html' (image tag html) or 'src' (URL). Default 'html'.
 * @return string|WP_Error Populated HTML img tag on success, WP_Error object otherwise.
 */
function media_sideload_image($file, $post_id, $desc = \null, $return = 'html')
{
}