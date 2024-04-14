<?php


/**
 * Compares a list of sidebars with their widgets against an allowed list.
 *
 * @since 4.9.0
 *
 * @param array $sidebars_widgets   List of sidebars and their widget instance IDs.
 * @param array $allowed_widget_ids Optional. List of widget IDs to compare against. Default: Registered widgets.
 * @return array Sidebars with allowed widgets.
 */
function _wp_remove_unregistered_widgets($sidebars_widgets, $allowed_widget_ids = array())
{
}