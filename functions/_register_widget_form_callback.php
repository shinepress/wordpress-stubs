<?php


/**
 * Registers the form callback for a widget.
 *
 * @since 2.8.0
 *
 * @global array $wp_registered_widget_controls
 *
 * @param int|string $id            Widget ID.
 * @param string     $name          Name attribute for the widget.
 * @param callable   $form_callback Form callback.
 * @param array      $options       Optional. Widget control options. See wp_register_widget_control().
 *                                  Default empty array.
 * @phpstan-param array{
 *   height?: int,
 *   width?: int,
 *   id_base?: int|string,
 * } $options See wp_register_widget_control()
 */
function _register_widget_form_callback($id, $name, $form_callback, $options = array())
{
}