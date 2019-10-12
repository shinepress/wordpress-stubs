<?php


/**
 * Registers the update callback for a widget.
 *
 * @since 2.8.0
 *
 * @global array $wp_registered_widget_updates
 *
 * @param string   $id_base         The base ID of a widget created by extending WP_Widget.
 * @param callable $update_callback Update callback method for the widget.
 * @param array    $options         Optional. Widget control options. See wp_register_widget_control().
 *                                  Default empty array.
 */
function _register_widget_update_callback($id_base, $update_callback, $options = array())
{
}