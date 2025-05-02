<?php


/**
 * Returns whether the current user has the specified capability for a given site.
 *
 * @since 3.0.0
 * @since 5.3.0 Formalized the existing and already documented `...$args` parameter
 *              by adding it to the function signature.
 * @since 5.8.0 Wraps current_user_can() after switching to blog.
 * @deprecated 6.7.0 Use current_user_can_for_site() instead.
 *
 * @param int    $blog_id    Site ID.
 * @param string $capability Capability name.
 * @param mixed  ...$args    Optional further parameters, typically starting with an object ID.
 * @return bool Whether the user has the given capability.
 */
function current_user_can_for_blog($blog_id, $capability, ...$args)
{
}