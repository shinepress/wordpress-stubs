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
     * Protected constructor.
     *
     * @since 4.0.0
     *
     * @param int $user_id User whose session to manage.
     */
    protected function __construct($user_id)
    {
    }
    /**
     * Retrieves a session token manager instance for a user.
     *
     * This method contains a {@see 'session_token_manager'} filter, allowing a plugin to swap out
     * the session manager for a subclass of `WP_Session_Tokens`.
     *
     * @since 4.0.0
     * @static
     *
     * @param int $user_id User whose session to manage.
     * @return WP_User_Meta_Session_Tokens WP_User_Meta_Session_Tokens class instance by default.
     */
    final public static function get_instance($user_id)
    {
    }
    /**
     * Get a user's session.
     *
     * @since 4.0.0
     *
     * @param string $token Session token
     * @return array User session
     */
    final public function get($token)
    {
    }
    /**
     * Validate a user's session token as authentic.
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
     * Generate a session token and attach session information to it.
     *
     * A session token is a long, random string. It is used in a cookie
     * link that cookie to an expiration time and to ensure the cookie
     * becomes invalidated upon logout.
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
     * Update a session token.
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
     * Destroy a session token.
     *
     * @since 4.0.0
     *
     * @param string $token Session token to destroy.
     */
    final public function destroy($token)
    {
    }
    /**
     * Destroy all session tokens for this user,
     * except a single token, presumably the one in use.
     *
     * @since 4.0.0
     *
     * @param string $token_to_keep Session token to keep.
     */
    final public function destroy_others($token_to_keep)
    {
    }
    /**
     * Determine whether a session token is still valid,
     * based on expiration.
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
     * Destroy all session tokens for a user.
     *
     * @since 4.0.0
     */
    final public function destroy_all()
    {
    }
    /**
     * Destroy all session tokens for all users.
     *
     * @since 4.0.0
     * @static
     */
    final public static function destroy_all_for_all_users()
    {
    }
    /**
     * Retrieve all sessions of a user.
     *
     * @since 4.0.0
     *
     * @return array Sessions of a user.
     */
    final public function get_all()
    {
    }
    /**
     * This method should retrieve all sessions of a user, keyed by verifier.
     *
     * @since 4.0.0
     *
     * @return array Sessions of a user, keyed by verifier.
     */
    abstract protected function get_sessions();
    /**
     * This method should look up a session by its verifier (token hash).
     *
     * @since 4.0.0
     *
     * @param string $verifier Verifier of the session to retrieve.
     * @return array|null The session, or null if it does not exist.
     */
    abstract protected function get_session($verifier);
    /**
     * This method should update a session by its verifier.
     *
     * Omitting the second argument should destroy the session.
     *
     * @since 4.0.0
     *
     * @param string $verifier Verifier of the session to update.
     * @param array  $session  Optional. Session. Omitting this argument destroys the session.
     */
    abstract protected function update_session($verifier, $session = \null);
    /**
     * This method should destroy all session tokens for this user,
     * except a single session passed.
     *
     * @since 4.0.0
     *
     * @param string $verifier Verifier of the session to keep.
     */
    abstract protected function destroy_other_sessions($verifier);
    /**
     * This method should destroy all sessions for a user.
     *
     * @since 4.0.0
     */
    abstract protected function destroy_all_sessions();
    /**
     * This static method should destroy all session tokens for all users.
     *
     * @since 4.0.0
     * @static
     */
    public static function drop_sessions()
    {
    }
}