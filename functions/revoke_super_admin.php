<?php


/**
 * Revokes Super Admin privileges.
 *
 * @since 3.0.0
 *
 * @global array $super_admins
 *
 * @param int $user_id ID of the user Super Admin privileges to be revoked from.
 * @return bool True on success, false on failure. This can fail when the user's email
 *              is the network admin email or when the `$super_admins` global is defined.
 */
function revoke_super_admin($user_id)
{
}