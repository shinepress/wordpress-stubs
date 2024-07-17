<?php


/**
 * Registers the update callback for a widget.
 *
 * @since 2.8.0
 * @since 5.3.0 Formalized the existing and already documented `...$params` parameter
 *              by adding it to the function signature.
 *
 * @global array $wp_registered_widget_updates The registered widget updates.
 *
 * @param string   $id_base         The base ID of a widget created by extending WP_Widget.
 * @param callable $update_callback Update callback method for the widget.
 * @param array    $options         Optional. Widget control options. See wp_register_widget_control().
 *                                  Default empty array.
 * @param mixed    ...$params       Optional additional parameters to pass to the callback function when it's called.
 * @phpstan-param array{
 *   height?: int,
 *   width?: int,
 *   id_base?: int|string,
 * } $options See wp_register_widget_control()
 * @phpstan-return void
 */
function _register_widget_update_callback($id_base, $update_callback, $options = array(), ...$params)
{
}