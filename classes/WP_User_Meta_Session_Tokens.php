<?php


/**
 * Session API: WP_User_Meta_Session_Tokens class
 *
 * @package WordPress
 * @subpackage Session
 * @since 4.7.0
 */
/**
 * Meta-based user sessions token manager.
 *
 * @since 4.0.0
 */
class WP_User_Meta_Session_Tokens extends \WP_Session_Tokens
{
    /**
     * Get all sessions of a user.
     *
     * @since 4.0.0
     *
     * @return array Sessions of a user.
     */
    protected function get_sessions()
    {
    }
    /**
     * Converts an expiration to an array of session information.
     *
     * @param mixed $session Session or expiration.
     * @return array Session.
     */
    protected function prepare_session($session)
    {
    }
    /**
     * Retrieve a session by its verifier (token hash).
     *
     * @since 4.0.0
     *
     * @param string $verifier Verifier of the session to retrieve.
     * @return array|null The session, or null if it does not exist
     */
    protected function get_session($verifier)
    {
    }
    /**
     * Update a session by its verifier.
     *
     * @since 4.0.0
     *
     * @param string $verifier Verifier of the session to update.
     * @param array  $session  Optional. Session. Omitting this argument destroys the session.
     */
    protected function update_session($verifier, $session = \null)
    {
    }
    /**
     * Update a user's sessions in the usermeta table.
     *
     * @since 4.0.0
     *
     * @param array $sessions Sessions.
     */
    protected function update_sessions($sessions)
    {
    }
    /**
     * Destroy all session tokens for a user, except a single session passed.
     *
     * @since 4.0.0
     *
     * @param string $verifier Verifier of the session to keep.
     */
    protected function destroy_other_sessions($verifier)
    {
    }
    /**
     * Destroy all session tokens for a user.
     *
     * @since 4.0.0
     */
    protected function destroy_all_sessions()
    {
    }
    /**
     * Destroy all session tokens for all users.
     *
     * @since 4.0.0
     * @static
     */
    public static function drop_sessions()
    {
    }
}