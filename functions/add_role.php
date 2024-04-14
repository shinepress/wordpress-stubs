<?php


/**
 * Add role, if it does not exist.
 *
 * @since 2.0.0
 *
 * @param string $role         Role name.
 * @param string $display_name Display name for role.
 * @param bool[] $capabilities List of capabilities keyed by the capability name,
 *                             e.g. array( 'edit_posts' => true, 'delete_posts' => false ).
 * @return WP_Role|null WP_Role object if role is added, null if already exists.
 */
function add_role($role, $display_name, $capabilities = array())
{
}