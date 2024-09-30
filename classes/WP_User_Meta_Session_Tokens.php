<?php


/**
 * Meta-based user sessions token manager.
 *
 * @since 4.0.0
 *
 * @see WP_Session_Tokens
 */
class WP_User_Meta_Session_Tokens extends \WP_Session_Tokens
{
    /**
     * Retrieves all sessions of the user.
     *
     * @since 4.0.0
     *
     * @return array Sessions of the user.
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
     * Retrieves a session based on its verifier (token hash).
     *
     * @since 4.0.0
     *
     * @param string $verifier Verifier for the session to retrieve.
     * @return array|null The session, or null if it does not exist
     */
    protected function get_session($verifier)
    {
    }
    /**
     * Updates a session based on its verifier (token hash).
     *
     * @since 4.0.0
     *
     * @param string $verifier Verifier for the session to update.
     * @param array  $session  Optional. Session. Omitting this argument destroys the session.
     */
    protected function update_session($verifier, $session = \null)
    {
    }
    /**
     * Updates the user's sessions in the usermeta table.
     *
     * @since 4.0.0
     *
     * @param array $sessions Sessions.
     */
    protected function update_sessions($sessions)
    {
    }
    /**
     * Destroys all sessions for this user, except the single session with the given verifier.
     *
     * @since 4.0.0
     *
     * @param string $verifier Verifier of the session to keep.
     */
    protected function destroy_other_sessions($verifier)
    {
    }
    /**
     * Destroys all session tokens for the user.
     *
     * @since 4.0.0
     */
    protected function destroy_all_sessions()
    {
    }
    /**
     * Destroys all sessions for all users.
     *
     * @since 4.0.0
     */
    public static function drop_sessions()
    {
    }
}