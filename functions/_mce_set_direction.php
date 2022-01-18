<?php


/**
 * Set the localized direction for MCE plugin.
 *
 * Will only set the direction to 'rtl', if the WordPress locale has
 * the text direction set to 'rtl'.
 *
 * Fills in the 'directionality' setting, enables the 'directionality'
 * plugin, and adds the 'ltr' button to 'toolbar1', formerly
 * 'theme_advanced_buttons1' array keys. These keys are then returned
 * in the $mce_init (TinyMCE settings) array.
 *
 * @since 2.1.0
 * @access private
 *
 * @param array $mce_init MCE settings array.
 * @return array Direction set for 'rtl', if needed by locale.
 */
function _mce_set_direction($mce_init)
{
}