<?php


/**
 * Session API: WP_Session_Tokens class
 *
 * @package WordPress
 * @subpackage Session
 * @since 4.7.0
 */
/**
 * Abstract class for managing user session tokens.
 *
 * @since 4.0.0
 */
#[\AllowDynamicProperties]
abstract class WP_Session_Tokens
{
    /**
     * User ID.
     *
     * @since 4.0.0
     * @var int User ID.
     */
    protected $user_id;
    /**
     * Protected constructor. Use the `get_instance()` method to get the instance.
     *
     * @since 4.0.0
     *
     * @param int $user_id User whose session to manage.
     */
    protected function __construct($user_id)
    {
    }
    /**
     * Retrieves a session manager instance for a user.
     *
     * This method contains a {@see 'session_token_manager'} filter, allowing a plugin to swap out
     * the session manager for a subclass of `WP_Session_Tokens`.
     *
     * @since 4.0.0
     *
     * @param int $user_id User whose session to manage.
     * @return WP_Session_Tokens The session object, which is by default an instance of
     *                           the `WP_User_Meta_Session_Tokens` class.
     */
    final public static function get_instance($user_id)
    {
    }
    /**
     * Retrieves a user's session for the given token.
     *
     * @since 4.0.0
     *
     * @param string $token Session token.
     * @return array|null The session, or null if it does not exist.
     */
    final public function get($token)
    {
    }
    /**
     * Validates the given session token for authenticity and validity.
     *
     * Checks that the given token is present and hasn't expired.
     *
     * @since 4.0.0
     *
     * @param string $token Token to verify.
     * @return bool Whether the token is valid for the user.
     */
    final public function verify($token)
    {
    }
    /**
     * Generates a session token and attaches session information to it.
     *
     * A session token is a long, random string. It is used in a cookie
     * to link that cookie to an expiration time and to ensure the cookie
     * becomes invalidated when the user logs out.
     *
     * This function generates a token and stores it with the associated
     * expiration time (and potentially other session information via the
     * {@see 'attach_session_information'} filter).
     *
     * @since 4.0.0
     *
     * @param int $expiration Session expiration timestamp.
     * @return string Session token.
     */
    final public function create($expiration)
    {
    }
    /**
     * Updates the data for the session with the given token.
     *
     * @since 4.0.0
     *
     * @param string $token Session token to update.
     * @param array  $session Session information.
     */
    final public function update($token, $session)
    {
    }
    /**
     * Destroys the session with the given token.
     *
     * @since 4.0.0
     *
     * @param string $token Session token to destroy.
     */
    final public function destroy($token)
    {
    }
    /**
     * Destroys all sessions for this user except the one with the given token (presumably the one in use).
     *
     * @since 4.0.0
     *
     * @param string $token_to_keep Session token to keep.
     */
    final public function destroy_others($token_to_keep)
    {
    }
    /**
     * Determines whether a session is still valid, based on its expiration timestamp.
     *
     * @since 4.0.0
     *
     * @param array $session Session to check.
     * @return bool Whether session is valid.
     */
    final protected function is_still_valid($session)
    {
    }
    /**
     * Destroys all sessions for a user.
     *
     * @since 4.0.0
     */
    final public function destroy_all()
    {
    }
    /**
     * Destroys all sessions for all users.
     *
     * @since 4.0.0
     */
    final public static function destroy_all_for_all_users()
    {
    }
    /**
     * Retrieves all sessions for a user.
     *
     * @since 4.0.0
     *
     * @return array Sessions for a user.
     */
    final public function get_all()
    {
    }
    /**
     * Retrieves all sessions of the user.
     *
     * @since 4.0.0
     *
     * @return array Sessions of the user.
     */
    abstract protected function get_sessions();
    /**
     * Retrieves a session based on its verifier (token hash).
     *
     * @since 4.0.0
     *
     * @param string $verifier Verifier for the session to retrieve.
     * @return array|null The session, or null if it does not exist.
     */
    abstract protected function get_session($verifier);
    /**
     * Updates a session based on its verifier (token hash).
     *
     * Omitting the second argument destroys the session.
     *
     * @since 4.0.0
     *
     * @param string $verifier Verifier for the session to update.
     * @param array  $session  Optional. Session. Omitting this argument destroys the session.
     */
    abstract protected function update_session($verifier, $session = \null);
    /**
     * Destroys all sessions for this user, except the single session with the given verifier.
     *
     * @since 4.0.0
     *
     * @param string $verifier Verifier of the session to keep.
     */
    abstract protected function destroy_other_sessions($verifier);
    /**
     * Destroys all sessions for the user.
     *
     * @since 4.0.0
     */
    abstract protected function destroy_all_sessions();
    /**
     * Destroys all sessions for all users.
     *
     * @since 4.0.0
     */
    public static function drop_sessions()
    {
    }
}