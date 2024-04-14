<?php


/**
 * Converts the widget settings from single to multi-widget format.
 *
 * @since 2.8.0
 *
 * @global array $_wp_sidebars_widgets
 *
 * @param string $base_name   Root ID for all widgets of this type.
 * @param string $option_name Option name for this widget type.
 * @param array  $settings    The array of widget instance settings.
 * @return array The array of widget settings converted to multi-widget format.
 */
function wp_convert_widget_settings($base_name, $option_name, $settings)
{
}