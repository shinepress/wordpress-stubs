<?php


/**
 * Compares a list of sidebars with their widgets against an allowed list.
 *
 * @since 4.9.0
 * @since 4.9.2 Always tries to restore widget assignments from previous data, not just if sidebars needed mapping.
 *
 * @global array $wp_registered_sidebars The registered sidebars.
 *
 * @param array $existing_sidebars_widgets List of sidebars and their widget instance IDs.
 * @return array Mapped sidebars widgets.
 */
function wp_map_sidebars_widgets($existing_sidebars_widgets)
{
}