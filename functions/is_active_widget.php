<?php


/**
 * Whether widget is displayed on the front end.
 *
 * Either $callback or $id_base can be used
 * $id_base is the first argument when extending WP_Widget class
 * Without the optional $widget_id parameter, returns the ID of the first sidebar
 * in which the first instance of the widget with the given callback or $id_base is found.
 * With the $widget_id parameter, returns the ID of the sidebar where
 * the widget with that callback/$id_base AND that ID is found.
 *
 * NOTE: $widget_id and $id_base are the same for single widgets. To be effective
 * this function has to run after widgets have initialized, at action {@see 'init'} or later.
 *
 * @since 2.2.0
 *
 * @global array $wp_registered_widgets
 *
 * @param string|false $callback      Optional, Widget callback to check. Default false.
 * @param int|false    $widget_id     Optional. Widget ID. Optional, but needed for checking. Default false.
 * @param string|false $id_base       Optional. The base ID of a widget created by extending WP_Widget. Default false.
 * @param bool         $skip_inactive Optional. Whether to check in 'wp_inactive_widgets'. Default true.
 * @return string|false False if widget is not active or id of sidebar in which the widget is active.
 */
function is_active_widget($callback = \false, $widget_id = \false, $id_base = \false, $skip_inactive = \true)
{
}