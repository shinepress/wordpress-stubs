<?php


/**
 * Serves as a callback for handling a menu item when its original object is deleted.
 *
 * @since 3.0.0
 * @access private
 *
 * @param int    $object_id Optional. The ID of the original object being trashed. Default 0.
 * @param int    $tt_id     Term taxonomy ID. Unused.
 * @param string $taxonomy  Taxonomy slug.
 */
function _wp_delete_tax_menu_item($object_id = 0, $tt_id, $taxonomy)
{
}