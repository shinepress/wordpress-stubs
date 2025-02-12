<?php


/**
 * Callback to enable showing of the user error when uploading .heic images.
 *
 * @since 5.5.0
 * @since 6.7.0 The default behavior is to enable heic uploads as long as the server
 *              supports the format. The uploads are converted to JPEG's by default.
 *
 * @param array[] $plupload_settings The settings for Plupload.js.
 * @return array[] Modified settings for Plupload.js.
 */
function wp_show_heic_upload_error($plupload_settings)
{
}