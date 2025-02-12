<?php


/**
 * Returns a confirmation key for a user action and stores the hashed version for future comparison.
 *
 * @since 4.9.6
 *
 * @global PasswordHash $wp_hasher Portable PHP password hashing framework instance.
 *
 * @param int $request_id Request ID.
 * @return string Confirmation key.
 */
function wp_generate_user_request_key($request_id)
{
}