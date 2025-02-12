<?php


/**
 * Checks an attachment being deleted to see if it's a header or background image.
 *
 * If true it removes the theme modification which would be pointing at the deleted
 * attachment.
 *
 * @access private
 * @since 3.0.0
 * @since 4.3.0 Also removes `header_image_data`.
 * @since 4.5.0 Also removes custom logo theme mods.
 * @since 6.6.0 Also removes `site_logo` option set by the site logo block.
 *
 * @param int $id The attachment ID.
 */
function _delete_attachment_theme_mod($id)
{
}