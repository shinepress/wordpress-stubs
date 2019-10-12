<?php


/**
 * Get extended image metadata, exif or iptc as available.
 *
 * Retrieves the EXIF metadata aperture, credit, camera, caption, copyright, iso
 * created_timestamp, focal_length, shutter_speed, and title.
 *
 * The IPTC metadata that is retrieved is APP13, credit, byline, created date
 * and time, caption, copyright, and title. Also includes FNumber, Model,
 * DateTimeDigitized, FocalLength, ISOSpeedRatings, and ExposureTime.
 *
 * @todo Try other exif libraries if available.
 * @since 2.5.0
 *
 * @param string $file
 * @return bool|array False on failure. Image metadata array on success.
 */
function wp_read_image_metadata($file)
{
}