<?php


/**
 * Parse creation date from media metadata.
 *
 * The getID3 library doesn't have a standard method for getting creation dates,
 * so the location of this data can vary based on the MIME type.
 *
 * @since 4.9.0
 *
 * @link https://github.com/JamesHeinrich/getID3/blob/master/structure.txt
 *
 * @param array $metadata The metadata returned by getID3::analyze().
 * @return int|false A UNIX timestamp for the media's creation date if available
 *                   or a boolean FALSE if a timestamp could not be determined.
 */
function wp_get_media_creation_timestamp($metadata)
{
}