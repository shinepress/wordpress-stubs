<?php


/**
 * Registers the form callback for a widget.
 *
 * @since 2.8.0
 * @since 5.3.0 Formalized the existing and already documented `...$params` parameter
 *              by adding it to the function signature.
 *
 * @global array $wp_registered_widget_controls The registered widget controls.
 *
 * @param int|string $id            Widget ID.
 * @param string     $name          Name attribute for the widget.
 * @param callable   $form_callback Form callback.
 * @param array      $options       Optional. Widget control options. See wp_register_widget_control().
 *                                  Default empty array.
 * @param mixed      ...$params     Optional additional parameters to pass to the callback function when it's called.
 * @phpstan-param array{
 *   height?: int,
 *   width?: int,
 *   id_base?: int|string,
 * } $options See wp_register_widget_control()
 * @phpstan-return void
 */
function _register_widget_form_callback($id, $name, $form_callback, $options = array(), ...$params)
{
}