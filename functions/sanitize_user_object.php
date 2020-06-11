<?php


/**
 * Sanitize every user field.
 *
 * If the context is 'raw', then the user object or array will get minimal santization of the int fields.
 *
 * @since 2.3.0
 * @deprecated 3.3.0
 *
 * @param object|array $user The User Object or Array
 * @param string $context Optional, default is 'display'. How to sanitize user fields.
 * @return object|array The now sanitized User Object or Array (will be the same type as $user)
 */
function sanitize_user_object($user, $context = 'display')
{
}