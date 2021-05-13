<?php


/**
 * Delete user interface settings.
 *
 * Deleting settings would reset them to the defaults.
 *
 * This function has to be used before any output has started as it calls setcookie().
 *
 * @since 2.7.0
 *
 * @param string $names The name or array of names of the setting to be deleted.
 * @return bool|null True if deleted successfully, false if not. Null if the current user can't be established.
 */
function delete_user_setting($names)
{
}