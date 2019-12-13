<?php


/**
 * Retrieves uploads directory information.
 *
 * Same as wp_upload_dir() but "light weight" as it doesn't attempt to create the uploads directory.
 * Intended for use in themes, when only 'basedir' and 'baseurl' are needed, generally in all cases
 * when not uploading files.
 *
 * @since 4.5.0
 *
 * @see wp_upload_dir()
 *
 * @return array See wp_upload_dir() for description.
 */
function wp_get_upload_dir()
{
}