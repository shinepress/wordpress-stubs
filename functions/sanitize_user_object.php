<?php


/**
 * Sanitize every user field.
 *
 * If the context is 'raw', then the user object or array will get minimal santization of the int fields.
 *
 * @since 2.3.0
 * @deprecated 3.3.0
 *
 * @param object|array $user    The user object or array.
 * @param string       $context Optional. How to sanitize user fields. Default 'display'.
 * @return object|array The now sanitized user object or array (will be the same type as $user).
 */
function sanitize_user_object($user, $context = 'display')
{
}