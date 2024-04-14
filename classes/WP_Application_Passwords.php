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
#[\AllowDynamicProperties]
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
     * The option name used to store whether application passwords are in use.
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
     * Checks if application passwords are being used by the site.
     *
     * This returns true if at least one application password has ever been created.
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
     * @param array $args     {
     *     Arguments used to create the application password.
     *
     *     @type string $name   The name of the application password.
     *     @type string $app_id A UUID provided by the application to uniquely identify it.
     * }
     * @return array|WP_Error The first key in the array is the new password, the second is its detailed information.
     *                        A WP_Error instance is returned on error.
     * @phpstan-param array{
     *   name?: string,
     *   app_id?: string,
     * } $args
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
     * @return array {
     *     The list of app passwords.
     *
     *     @type array ...$0 {
     *         @type string      $uuid      The unique identifier for the application password.
     *         @type string      $app_id    A UUID provided by the application to uniquely identify it.
     *         @type string      $name      The name of the application password.
     *         @type string      $password  A one-way hash of the password.
     *         @type int         $created   Unix timestamp of when the password was created.
     *         @type int|null    $last_used The Unix timestamp of the GMT date the application password was last used.
     *         @type string|null $last_ip   The IP address the application password was last used by.
     *     }
     * }
     * @phpstan-return array<int|string, array{
     *   uuid: string,
     *   app_id: string,
     *   name: string,
     *   password: string,
     *   created: int,
     *   last_used: int|null,
     *   last_ip: string|null,
     * }>
     */
    public static function get_user_application_passwords($user_id)
    {
    }
    /**
     * Gets a user's application password with the given UUID.
     *
     * @since 5.6.0
     *
     * @param int    $user_id User ID.
     * @param string $uuid    The password's UUID.
     * @return array|null The application password if found, null otherwise.
     */
    public static function get_user_application_password($user_id, $uuid)
    {
    }
    /**
     * Checks if an application password with the given name exists for this user.
     *
     * @since 5.7.0
     *
     * @param int    $user_id User ID.
     * @param string $name    Application name.
     * @return bool Whether the provided application name exists.
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
     * @param string $uuid    The password's UUID.
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
     * @param string $uuid    The password's UUID.
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
     * @param string $uuid    The password's UUID.
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
     * Sets a user's application passwords.
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