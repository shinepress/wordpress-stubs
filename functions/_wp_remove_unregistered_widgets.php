<?php


/**
 * Compares a list of sidebars with their widgets against a whitelist.
 *
 * @since 4.9.0
 *
 * @param array $sidebars_widgets List of sidebars and their widget instance IDs.
 * @param array $whitelist        Optional. List of widget IDs to compare against. Default: Registered widgets.
 * @return array Sidebars with whitelisted widgets.
 */
function _wp_remove_unregistered_widgets($sidebars_widgets, $whitelist = array())
{
}