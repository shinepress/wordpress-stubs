<?php


/**
 * Registers widget control callback for customizing options.
 *
 * @since 2.2.0
 *
 * @todo `$params` parameter?
 *
 * @global array $wp_registered_widget_controls
 * @global array $wp_registered_widget_updates
 * @global array $wp_registered_widgets
 * @global array $_wp_deprecated_widgets_callbacks
 *
 * @param int|string   $id               Sidebar ID.
 * @param string       $name             Sidebar display name.
 * @param callable     $control_callback Run when sidebar is displayed.
 * @param array $options {
 *     Optional. Array or string of control options. Default empty array.
 *
 *     @type int        $height  Never used. Default 200.
 *     @type int        $width   Width of the fully expanded control form (but try hard to use the default width).
 *                               Default 250.
 *     @type int|string $id_base Required for multi-widgets, i.e widgets that allow multiple instances such as the
 *                               text widget. The widget id will end up looking like `{$id_base}-{$unique_number}`.
 * }
 * @phpstan-param array{
 *   height?: int,
 *   width?: int,
 *   id_base?: int|string,
 * } $options
 * @phpstan-return void
 */
function wp_register_widget_control($id, $name, $control_callback, $options = array())
{
}