<?php


/**
 * Retrieves the icon for a MIME type or attachment.
 *
 * @since 2.1.0
 * @since 6.5.0 Added the `$preferred_ext` parameter.
 *
 * @param string|int $mime          MIME type or attachment ID.
 * @param string     $preferred_ext File format to prefer in return. Default '.png'.
 * @return string|false Icon, false otherwise.
 */
function wp_mime_type_icon($mime = 0, $preferred_ext = '.png')
{
}