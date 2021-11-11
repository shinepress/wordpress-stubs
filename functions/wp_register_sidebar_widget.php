<?php


/**
 * Register an instance of a widget.
 *
 * The default widget option is 'classname' that can be overridden.
 *
 * The function can also be used to un-register widgets when `$output_callback`
 * parameter is an empty string.
 *
 * @since 2.2.0
 *
 * @global array $wp_registered_widgets            Uses stored registered widgets.
 * @global array $wp_registered_widget_controls    Stores the registered widget controls (options).
 * @global array $wp_registered_widget_updates
 * @global array $_wp_deprecated_widgets_callbacks
 *
 * @param int|string $id              Widget ID.
 * @param string     $name            Widget display title.
 * @param callable   $output_callback Run when widget is called.
 * @param array      $options {
 *     Optional. An array of supplementary widget options for the instance.
 *
 *     @type string $classname   Class name for the widget's HTML container. Default is a shortened
 *                               version of the output callback name.
 *     @type string $description Widget description for display in the widget administration
 *                               panel and/or theme.
 * }
 */
function wp_register_sidebar_widget($id, $name, $output_callback, $options = array())
{
}