<?php


/**
 * Deletes the site_logo when the custom_logo theme mod is removed.
 *
 * @since 5.8.0
 *
 * @param array $old_value Previous theme mod settings.
 * @param array $value     Updated theme mod settings.
 * @phpstan-return void
 */
function _delete_site_logo_on_remove_custom_logo($old_value, $value)
{
}