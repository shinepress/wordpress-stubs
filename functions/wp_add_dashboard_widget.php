<?php


/**
 * Adds a new dashboard widget.
 *
 * @since 2.7.0
 * @since 5.6.0 The `$context` and `$priority` parameters were added.
 *
 * @global callable[] $wp_dashboard_control_callbacks
 *
 * @param string   $widget_id        Widget ID  (used in the 'id' attribute for the widget).
 * @param string   $widget_name      Title of the widget.
 * @param callable $callback         Function that fills the widget with the desired content.
 *                                   The function should echo its output.
 * @param callable $control_callback Optional. Function that outputs controls for the widget. Default null.
 * @param array    $callback_args    Optional. Data that should be set as the $args property of the widget array
 *                                   (which is the second parameter passed to your callback). Default null.
 * @param string   $context          Optional. The context within the screen where the box should display.
 *                                   Accepts 'normal', 'side', 'column3', or 'column4'. Default 'normal'.
 * @param string   $priority         Optional. The priority within the context where the box should show.
 *                                   Accepts 'high', 'core', 'default', or 'low'. Default 'core'.
 */
function wp_add_dashboard_widget($widget_id, $widget_name, $callback, $control_callback = \null, $callback_args = \null, $context = 'normal', $priority = 'core')
{
}