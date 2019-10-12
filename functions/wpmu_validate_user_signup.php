<?php


/**
 * Sanitize and validate data required for a user sign-up.
 *
 * Verifies the validity and uniqueness of user names and user email addresses,
 * and checks email addresses against admin-provided domain whitelists and blacklists.
 *
 * The {@see 'wpmu_validate_user_signup'} hook provides an easy way to modify the sign-up
 * process. The value $result, which is passed to the hook, contains both the user-provided
 * info and the error messages created by the function. {@see 'wpmu_validate_user_signup'}
 * allows you to process the data in any way you'd like, and unset the relevant errors if
 * necessary.
 *
 * @since MU (3.0.0)
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string $user_name  The login name provided by the user.
 * @param string $user_email The email provided by the user.
 * @return array Contains username, email, and error messages.
 */
function wpmu_validate_user_signup($user_name, $user_email)
{
}