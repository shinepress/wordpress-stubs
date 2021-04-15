<?php


/**
 * Whether the current user has a specific capability.
 *
 * While checking against particular roles in place of a capability is supported
 * in part, this practice is discouraged as it may produce unreliable results.
 *
 * Note: Will always return true if the current user is a super admin, unless specifically denied.
 *
 * @since 2.0.0
 *
 * @see WP_User::has_cap()
 * @see map_meta_cap()
 *
 * @param string $capability Capability name.
 * @param int    $object_id  Optional. ID of the specific object to check against if `$capability` is a "meta" cap.
 *                           "Meta" capabilities, e.g. 'edit_post', 'edit_user', etc., are capabilities used
 *                           by map_meta_cap() to map to other "primitive" capabilities, e.g. 'edit_posts',
 *                           'edit_others_posts', etc. Accessed via func_get_args() and passed to WP_User::has_cap(),
 *                           then map_meta_cap().
 * @return bool Whether the current user has the given capability. If `$capability` is a meta cap and `$object_id` is
 *              passed, whether the current user has the given meta capability for the given object.
 */
function current_user_can($capability)
{
}