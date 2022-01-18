<?php


/**
 * Add a user to a blog based on details from maybe_add_existing_user_to_blog().
 *
 * @since MU (3.0.0)
 *
 * @param array $details User details.
 * @return true|WP_Error|void True on success or a WP_Error object if the user doesn't exist
 *                            or could not be added. Void if $details array was not provided.
 */
function add_existing_user_to_blog($details = \false)
{
}