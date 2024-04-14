<?php


/**
 * Upgrade API: WP_Automatic_Updater class
 *
 * @package WordPress
 * @subpackage Upgrader
 * @since 4.6.0
 */
/**
 * Core class used for handling automatic background updates.
 *
 * @since 3.7.0
 * @since 4.6.0 Moved to its own file from wp-admin/includes/class-wp-upgrader.php.
 */
class WP_Automatic_Updater
{
    /**
     * Tracks update results during processing.
     *
     * @var array
     */
    protected $update_results = array();
    /**
     * Whether the entire automatic updater is disabled.
     *
     * @since 3.7.0
     */
    public function is_disabled()
    {
    }
    /**
     * Check for version control checkouts.
     *
     * Checks for Subversion, Git, Mercurial, and Bazaar. It recursively looks up the
     * filesystem to the top of the drive, erring on the side of detecting a VCS
     * checkout somewhere.
     *
     * ABSPATH is always checked in addition to whatever `$context` is (which may be the
     * wp-content directory, for example). The underlying assumption is that if you are
     * using version control *anywhere*, then you should be making decisions for
     * how things get updated.
     *
     * @since 3.7.0
     *
     * @param string $context The filesystem path to check, in addition to ABSPATH.
     * @return bool True if a VCS checkout was discovered at `$context` or ABSPATH,
     *              or anywhere higher. False otherwise.
     */
    public function is_vcs_checkout($context)
    {
    }
    /**
     * Tests to see if we can and should update a specific item.
     *
     * @since 3.7.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param string $type    The type of update being checked: 'core', 'theme',
     *                        'plugin', 'translation'.
     * @param object $item    The update offer.
     * @param string $context The filesystem context (a path) against which filesystem
     *                        access and status should be checked.
     * @return bool True if the item should be updated, false otherwise.
     */
    public function should_update($type, $item, $context)
    {
    }
    /**
     * Notifies an administrator of a core update.
     *
     * @since 3.7.0
     *
     * @param object $item The update offer.
     * @return bool True if the site administrator is notified of a core update,
     *              false otherwise.
     */
    protected function send_core_update_notification_email($item)
    {
    }
    /**
     * Update an item, if appropriate.
     *
     * @since 3.7.0
     *
     * @param string $type The type of update being checked: 'core', 'theme', 'plugin', 'translation'.
     * @param object $item The update offer.
     * @return null|WP_Error
     */
    public function update($type, $item)
    {
    }
    /**
     * Kicks off the background update process, looping through all pending updates.
     *
     * @since 3.7.0
     * @phpstan-return void
     */
    public function run()
    {
    }
    /**
     * If we tried to perform a core update, check if we should send an email,
     * and if we need to avoid processing future updates.
     *
     * @since 3.7.0
     *
     * @param object $update_result The result of the core update. Includes the update offer and result.
     * @phpstan-return void
     */
    protected function after_core_update($update_result)
    {
    }
    /**
     * Sends an email upon the completion or failure of a background core update.
     *
     * @since 3.7.0
     *
     * @param string $type        The type of email to send. Can be one of 'success', 'fail', 'manual', 'critical'.
     * @param object $core_update The update offer that was attempted.
     * @param mixed  $result      Optional. The result for the core update. Can be WP_Error.
     * @phpstan-return void
     */
    protected function send_email($type, $core_update, $result = \null)
    {
    }
    /**
     * If we tried to perform plugin or theme updates, check if we should send an email.
     *
     * @since 5.5.0
     *
     * @param array $update_results The results of update tasks.
     * @phpstan-return void
     */
    protected function after_plugin_theme_update($update_results)
    {
    }
    /**
     * Sends an email upon the completion or failure of a plugin or theme background update.
     *
     * @since 5.5.0
     *
     * @param string $type               The type of email to send. Can be one of 'success', 'fail', 'mixed'.
     * @param array  $successful_updates A list of updates that succeeded.
     * @param array  $failed_updates     A list of updates that failed.
     * @phpstan-return void
     */
    protected function send_plugin_theme_email($type, $successful_updates, $failed_updates)
    {
    }
    /**
     * Prepares and sends an email of a full log of background update results, useful for debugging and geekery.
     *
     * @since 3.7.0
     */
    protected function send_debug_email()
    {
    }
}