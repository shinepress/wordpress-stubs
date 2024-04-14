<?php


/**
 * The REST API autosave endpoint doesn't save meta, so we can use the
 * `wp_creating_autosave` when it updates an exiting autosave, and
 * `_wp_put_post_revision` when it creates a new autosave.
 *
 * @since 6.3.0
 *
 * @param int|array $autosave The autosave ID or array.
 * @phpstan-return void
 */
function _wp_rest_api_autosave_meta($autosave)
{
}