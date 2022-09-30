<?php


/**
 * Class for testing automatic updates in the WordPress code.
 *
 * @package WordPress
 * @subpackage Site_Health
 * @since 5.2.0
 */
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
     * Run tests to determine if auto-updates can run.
     *
     * @since 5.2.0
     *
     * @return array The test results.
     */
    public function run_tests()
    {
    }
    /**
     * Test if auto-updates related constants are set correctly.
     *
     * @since 5.2.0
     * @since 5.5.1 The `$value` parameter can accept an array.
     *
     * @param string $constant         The name of the constant to check.
     * @param bool|string|array $value The value that the constant should be, if set,
     *                                 or an array of acceptable values.
     * @return array The test results.
     */
    public function test_constants($constant, $value)
    {
    }
    /**
     * Check if updates are intercepted by a filter.
     *
     * @since 5.2.0
     *
     * @return array The test results.
     */
    public function test_wp_version_check_attached()
    {
    }
    /**
     * Check if automatic updates are disabled by a filter.
     *
     * @since 5.2.0
     *
     * @return array The test results.
     */
    public function test_filters_automatic_updater_disabled()
    {
    }
    /**
     * Check if automatic updates are disabled.
     *
     * @since 5.3.0
     *
     * @return array|false The test results. False if auto-updates are enabled.
     */
    public function test_wp_automatic_updates_disabled()
    {
    }
    /**
     * Check if automatic updates have tried to run, but failed, previously.
     *
     * @since 5.2.0
     *
     * @return array|false The test results. False if the auto-updates failed.
     */
    function test_if_failed_update()
    {
    }
    /**
     * Check if WordPress is controlled by a VCS (Git, Subversion etc).
     *
     * @since 5.2.0
     *
     * @return array The test results.
     */
    public function test_vcs_abspath()
    {
    }
    /**
     * Check if we can access files without providing credentials.
     *
     * @since 5.2.0
     *
     * @return array The test results.
     */
    function test_check_wp_filesystem_method()
    {
    }
    /**
     * Check if core files are writable by the web user/group.
     *
     * @since 5.2.0
     *
     * @global WP_Filesystem_Base $wp_filesystem WordPress filesystem subclass.
     *
     * @return array|false The test results. False if they're not writeable.
     */
    function test_all_files_writable()
    {
    }
    /**
     * Check if the install is using a development branch and can use nightly packages.
     *
     * @since 5.2.0
     *
     * @return array|false The test results. False if it isn't a development version.
     */
    function test_accepts_dev_updates()
    {
    }
    /**
     * Check if the site supports automatic minor updates.
     *
     * @since 5.2.0
     *
     * @return array The test results.
     */
    function test_accepts_minor_updates()
    {
    }
}