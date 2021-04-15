<?php


/**
 * Flips an image resource. Internal use only.
 *
 * @since 2.9.0
 * @deprecated 3.5.0 Use WP_Image_Editor::flip()
 * @see WP_Image_Editor::flip()
 *
 * @ignore
 * @param resource $img  Image resource.
 * @param bool     $horz Whether to flip horizontally.
 * @param bool     $vert Whether to flip vertically.
 * @return resource (maybe) flipped image resource.
 */
function _flip_image_resource($img, $horz, $vert)
{
}