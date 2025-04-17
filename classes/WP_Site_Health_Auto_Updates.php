<?php


/**
 * Class for testing automatic updates in the WordPress code.
 *
 * @package WordPress
 * @subpackage Site_Health
 * @since 5.2.0
 */
#[\AllowDynamicProperties]
class WP_Site_Health_Auto_Updates
{
    /**
     * WP_Site_Health_Auto_Updates constructor.
     *
     * @since 5.2.0
     */
    public function __construct()
    {
    }
    /**
     * Runs tests to determine if auto-updates can run.
     *
     * @since 5.2.0
     *
     * @return array The test results.
     */
    public function run_tests()
    {
    }
    /**
     * Tests if auto-updates related constants are set correctly.
     *
     * @since 5.2.0
     * @since 5.5.1 The `$value` parameter can accept an array.
     *
     * @param string $constant         The name of the constant to check.
     * @param bool|string|array $value The value that the constant should be, if set,
     *                                 or an array of acceptable values.
     * @return array|null The test results if there are any constants set incorrectly,
     *                    or null if the test passed.
     */
    public function test_constants($constant, $value)
    {
    }
    /**
     * Checks if updates are intercepted by a filter.
     *
     * @since 5.2.0
     *
     * @return array|null The test results if wp_version_check() is disabled,
     *                    or null if the test passed.
     */
    public function test_wp_version_check_attached()
    {
    }
    /**
     * Checks if automatic updates are disabled by a filter.
     *
     * @since 5.2.0
     *
     * @return array|null The test results if the {@see 'automatic_updater_disabled'} filter is set,
     *                    or null if the test passed.
     */
    public function test_filters_automatic_updater_disabled()
    {
    }
    /**
     * Checks if automatic updates are disabled.
     *
     * @since 5.3.0
     *
     * @return array|false The test results if auto-updates are disabled, false otherwise.
     */
    public function test_wp_automatic_updates_disabled()
    {
    }
    /**
     * Checks if automatic updates have tried to run, but failed, previously.
     *
     * @since 5.2.0
     *
     * @return array|false The test results if auto-updates previously failed, false otherwise.
     */
    public function test_if_failed_update()
    {
    }
    /**
     * Checks if WordPress is controlled by a VCS (Git, Subversion etc).
     *
     * @since 5.2.0
     *
     * @return array The test results.
     */
    public function test_vcs_abspath()
    {
    }
    /**
     * Checks if we can access files without providing credentials.
     *
     * @since 5.2.0
     *
     * @return array The test results.
     */
    public function test_check_wp_filesystem_method()
    {
    }
    /**
     * Checks if core files are writable by the web user/group.
     *
     * @since 5.2.0
     *
     * @global WP_Filesystem_Base $wp_filesystem WordPress filesystem subclass.
     *
     * @return array|false The test results if at least some of WordPress core files are writeable,
     *                     or if a list of the checksums could not be retrieved from WordPress.org.
     *                     False if the core files are not writeable.
     */
    public function test_all_files_writable()
    {
    }
    /**
     * Checks if the install is using a development branch and can use nightly packages.
     *
     * @since 5.2.0
     *
     * @return array|false|null The test results if development updates are blocked.
     *                          False if it isn't a development version. Null if the test passed.
     */
    public function test_accepts_dev_updates()
    {
    }
    /**
     * Checks if the site supports automatic minor updates.
     *
     * @since 5.2.0
     *
     * @return array|null The test results if minor updates are blocked,
     *                    or null if the test passed.
     */
    public function test_accepts_minor_updates()
    {
    }
}