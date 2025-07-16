<?php


/**
 * Checks whether auto-updates are forced for an item.
 *
 * @since 5.6.0
 *
 * @param string    $type   The type of update being checked: Either 'theme' or 'plugin'.
 * @param bool|null $update Whether to update. The value of null is internally used
 *                          to detect whether nothing has hooked into this filter.
 * @param object    $item   The update offer.
 * @return bool True if auto-updates are forced for `$item`, false otherwise.
 * @phpstan-param 'theme'|'plugin' $type
 */
function wp_is_auto_update_forced_for_item($type, $update, $item)
{
}