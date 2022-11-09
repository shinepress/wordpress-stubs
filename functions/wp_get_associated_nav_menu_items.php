<?php


/**
 * Get the menu items associated with a particular object.
 *
 * @since 3.0.0
 *
 * @param int    $object_id   The ID of the original object.
 * @param string $object_type The type of object, such as "taxonomy" or "post_type."
 * @param string $taxonomy    If $object_type is "taxonomy", $taxonomy is the name of the tax that $object_id belongs to
 * @return array The array of menu item IDs; empty array if none;
 */
function wp_get_associated_nav_menu_items($object_id = 0, $object_type = 'post_type', $taxonomy = '')
{
}