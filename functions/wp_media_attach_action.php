<?php


/**
 * Encapsulates the logic for Attach/Detach actions.
 *
 * @since 4.2.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int    $parent_id Attachment parent ID.
 * @param string $action    Optional. Attach/detach action. Accepts 'attach' or 'detach'.
 *                          Default 'attach'.
 * @phpstan-param 'attach'|'detach' $action
 * @phpstan-return void
 */
function wp_media_attach_action($parent_id, $action = 'attach')
{
}