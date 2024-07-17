<?php


/**
 * Flips an image resource. Internal use only.
 *
 * @since 2.9.0
 * @deprecated 3.5.0 Use WP_Image_Editor::flip()
 * @see WP_Image_Editor::flip()
 *
 * @ignore
 * @param resource|GdImage $img  Image resource or GdImage instance.
 * @param bool             $horz Whether to flip horizontally.
 * @param bool             $vert Whether to flip vertically.
 * @return resource|GdImage (maybe) flipped image resource or GdImage instance.
 */
function _flip_image_resource($img, $horz, $vert)
{
}