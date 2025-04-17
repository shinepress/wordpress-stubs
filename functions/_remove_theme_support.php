<?php


/**
 * Do not use. Removes theme support internally without knowledge of those not used
 * by themes directly.
 *
 * @access private
 * @since 3.1.0
 * @global array               $_wp_theme_features
 * @global Custom_Image_Header $custom_image_header
 * @global Custom_Background   $custom_background
 *
 * @param string $feature The feature being removed. See add_theme_support() for the list
 *                        of possible values.
 * @return bool True if support was removed, false if the feature was not registered.
 */
function _remove_theme_support($feature)
{
}