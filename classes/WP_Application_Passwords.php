<?php


/**
 * WP_Application_Passwords class
 *
 * @package WordPress
 * @since   5.6.0
 */
/**
 * Class for displaying, modifying, and sanitizing application passwords.
 *
 * @package WordPress
 */
class WP_Application_Passwords
{
    /**
     * The application passwords user meta key.
     *
     * @since 5.6.0
     *
     * @var string
     */
    const USERMETA_KEY_APPLICATION_PASSWORDS = '_application_passwords';
    /**
     * The option name used to store whether application passwords is in use.
     *
     * @since 5.6.0
     *
     * @var string
     */
    const OPTION_KEY_IN_USE = 'using_application_passwords';
    /**
     * The generated application password length.
     *
     * @since 5.6.0
     *
     * @var int
     */
    const PW_LENGTH = 24;
    /**
     * Checks if Application Passwords are being used by the site.
     *
     * This returns true if at least one App Password has ever been created.
     *
     * @since 5.6.0
     *
     * @return bool
     */
    public static function is_in_use()
    {
    }
    /**
     * Creates a new application password.
     *
     * @since 5.6.0
     * @since 5.7.0 Returns WP_Error if application name already exists.
     *
     * @param int   $user_id  User ID.
     * @param array $args     Information about the application password.
     * @return array|WP_Error The first key in the array is the new password, the second is its detailed information.
     *                        A WP_Error instance is returned on error.
     */
    public static function create_new_application_password($user_id, $args = array())
    {
    }
    /**
     * Gets a user's application passwords.
     *
     * @since 5.6.0
     *
     * @param int $user_id User ID.
     * @return array The list of app passwords.
     */
    public static function get_user_application_passwords($user_id)
    {
    }
    /**
     * Gets a user's application password with the given uuid.
     *
     * @since 5.6.0
     *
     * @param int    $user_id User ID.
     * @param string $uuid    The password's uuid.
     * @return array|null The application password if found, null otherwise.
     */
    public static function get_user_application_password($user_id, $uuid)
    {
    }
    /**
     * Checks if application name exists for this user.
     *
     * @since 5.7.0
     *
     * @param int    $user_id User ID.
     * @param string $name    Application name.
     * @return bool Whether provided application name exists or not.
     */
    public static function application_name_exists_for_user($user_id, $name)
    {
    }
    /**
     * Updates an application password.
     *
     * @since 5.6.0
     *
     * @param int    $user_id User ID.
     * @param string $uuid    The password's uuid.
     * @param array  $update  Information about the application password to update.
     * @return true|WP_Error True if successful, otherwise a WP_Error instance is returned on error.
     */
    public static function update_application_password($user_id, $uuid, $update = array())
    {
    }
    /**
     * Records that an application password has been used.
     *
     * @since 5.6.0
     *
     * @param int    $user_id User ID.
     * @param string $uuid    The password's uuid.
     * @return true|WP_Error True if the usage was recorded, a WP_Error if an error occurs.
     */
    public static function record_application_password_usage($user_id, $uuid)
    {
    }
    /**
     * Deletes an application password.
     *
     * @since 5.6.0
     *
     * @param int    $user_id User ID.
     * @param string $uuid    The password's uuid.
     * @return true|WP_Error Whether the password was successfully found and deleted, a WP_Error otherwise.
     */
    public static function delete_application_password($user_id, $uuid)
    {
    }
    /**
     * Deletes all application passwords for the given user.
     *
     * @since 5.6.0
     *
     * @param int $user_id User ID.
     * @return int|WP_Error The number of passwords that were deleted or a WP_Error on failure.
     */
    public static function delete_all_application_passwords($user_id)
    {
    }
    /**
     * Sets a users application passwords.
     *
     * @since 5.6.0
     *
     * @param int   $user_id   User ID.
     * @param array $passwords Application passwords.
     *
     * @return bool
     */
    protected static function set_user_application_passwords($user_id, $passwords)
    {
    }
    /**
     * Sanitizes and then splits a password into smaller chunks.
     *
     * @since 5.6.0
     *
     * @param string $raw_password The raw application password.
     * @return string The chunked password.
     */
    public static function chunk_password($raw_password)
    {
    }
}