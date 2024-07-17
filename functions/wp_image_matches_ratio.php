<?php


/**
 * Helper function to test if aspect ratios for two images match.
 *
 * @since 4.6.0
 *
 * @param int $source_width  Width of the first image in pixels.
 * @param int $source_height Height of the first image in pixels.
 * @param int $target_width  Width of the second image in pixels.
 * @param int $target_height Height of the second image in pixels.
 * @return bool True if aspect ratios match within 1px. False if not.
 */
function wp_image_matches_ratio($source_width, $source_height, $target_width, $target_height)
{
}