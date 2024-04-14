<?php


/**
 * Class for looking up a site's health based on a user's WordPress environment.
 *
 * @package WordPress
 * @subpackage Site_Health
 * @since 5.2.0
 */
class WP_Site_Health
{
    public $is_mariadb = \false;
    public $schedules;
    public $crons;
    public $last_missed_cron = \null;
    /**
     * WP_Site_Health constructor.
     *
     * @since 5.2.0
     */
    public function __construct()
    {
    }
    /**
     * Enqueues the site health scripts.
     *
     * @since 5.2.0
     * @phpstan-return void
     */
    public function enqueue_scripts()
    {
    }
    /**
     * Test if `wp_version_check` is blocked.
     *
     * It's possible to block updates with the `wp_version_check` filter, but this can't be checked during an
     * AJAX call, as the filter is never introduced then.
     *
     * This filter overrides a normal page request if it's made by an admin through the AJAX call with the
     * right query argument to check for this.
     *
     * @since 5.2.0
     * @phpstan-return void
     */
    public function check_wp_version_check_exists()
    {
    }
    /**
     * Tests for WordPress version and outputs it.
     *
     * Gives various results depending on what kind of updates are available, if any, to encourage the
     * user to install security updates as a priority.
     *
     * @since 5.2.0
     *
     * @return array The test result.
     */
    public function get_test_wordpress_version()
    {
    }
    /**
     * Test if plugins are outdated, or unnecessary.
     *
     * The tests checks if your plugins are up to date, and encourages you to remove any that are not in use.
     *
     * @since 5.2.0
     *
     * @return array The test result.
     */
    public function get_test_plugin_version()
    {
    }
    /**
     * Test if themes are outdated, or unnecessary.
     *
     * The tests checks if your site has a default theme (to fall back on if there is a need), if your themes
     * are up to date and, finally, encourages you to remove any themes that are not needed.
     *
     * @since 5.2.0
     *
     * @return array The test results.
     */
    public function get_test_theme_version()
    {
    }
    /**
     * Test if the supplied PHP version is supported.
     *
     * @since 5.2.0
     *
     * @return array The test results.
     */
    public function get_test_php_version()
    {
    }
    /**
     * Test if required PHP modules are installed on the host.
     *
     * This test builds on the recommendations made by the WordPress Hosting Team
     * as seen at https://make.wordpress.org/hosting/handbook/handbook/server-environment/#php-extensions
     *
     * @since 5.2.0
     *
     * @return array
     */
    public function get_test_php_extensions()
    {
    }
    /**
     * Test if the SQL server is up to date.
     *
     * @since 5.2.0
     *
     * @return array The test results.
     */
    public function get_test_sql_server()
    {
    }
    /**
     * Test if the database server is capable of using utf8mb4.
     *
     * @since 5.2.0
     *
     * @return array The test results.
     */
    public function get_test_utf8mb4_support()
    {
    }
    /**
     * Test if the site can communicate with WordPress.org.
     *
     * @since 5.2.0
     *
     * @return array The test results.
     */
    public function get_test_dotorg_communication()
    {
    }
    /**
     * Test if debug information is enabled.
     *
     * When WP_DEBUG is enabled, errors and information may be disclosed to site visitors, or it may be
     * logged to a publicly accessible file.
     *
     * Debugging is also frequently left enabled after looking for errors on a site, as site owners do
     * not understand the implications of this.
     *
     * @since 5.2.0
     *
     * @return array The test results.
     */
    public function get_test_is_in_debug_mode()
    {
    }
    /**
     * Test if your site is serving content over HTTPS.
     *
     * Many sites have varying degrees of HTTPS support, the most common of which is sites that have it
     * enabled, but only if you visit the right site address.
     *
     * @since 5.2.0
     *
     * @return array The test results.
     */
    public function get_test_https_status()
    {
    }
    /**
     * Check if the HTTP API can handle SSL/TLS requests.
     *
     * @since 5.2.0
     *
     * @return array The test results.
     */
    public function get_test_ssl_support()
    {
    }
    /**
     * Test if scheduled events run as intended.
     *
     * If scheduled events are not running, this may indicate something with WP_Cron is not working as intended,
     * or that there are orphaned events hanging around from older code.
     *
     * @since 5.2.0
     *
     * @return array The test results.
     */
    public function get_test_scheduled_events()
    {
    }
    /**
     * Test if WordPress can run automated background updates.
     *
     * Background updates in WordPress are primarily used for minor releases and security updates. It's important
     * to either have these working, or be aware that they are intentionally disabled for whatever reason.
     *
     * @since 5.2.0
     *
     * @return array The test results.
     */
    public function get_test_background_updates()
    {
    }
    /**
     * Test if loopbacks work as expected.
     *
     * A loopback is when WordPress queries itself, for example to start a new WP_Cron instance, or when editing a
     * plugin or theme. This has shown itself to be a recurring issue as code can very easily break this interaction.
     *
     * @since 5.2.0
     *
     * @return array The test results.
     */
    public function get_test_loopback_requests()
    {
    }
    /**
     * Test if HTTP requests are blocked.
     *
     * It's possible to block all outgoing communication (with the possibility of whitelisting hosts) via the
     * HTTP API. This may create problems for users as many features are running as services these days.
     *
     * @since 5.2.0
     *
     * @return array The test results.
     */
    public function get_test_http_requests()
    {
    }
    /**
     * Test if the REST API is accessible.
     *
     * Various security measures may block the REST API from working, or it may have been disabled in general.
     * This is required for the new block editor to work, so we explicitly test for this.
     *
     * @since 5.2.0
     *
     * @return array The test results.
     */
    public function get_test_rest_availability()
    {
    }
    /**
     * Return a set of tests that belong to the site status page.
     *
     * Each site status test is defined here, they may be `direct` tests, that run on page load, or `async` tests
     * which will run later down the line via JavaScript calls to improve page performance and hopefully also user
     * experiences.
     *
     * @since 5.2.0
     *
     * @return array The list of tests to run.
     */
    public static function get_tests()
    {
    }
    /**
     * Add a class to the body HTML tag.
     *
     * Filters the body class string for admin pages and adds our own class for easier styling.
     *
     * @since 5.2.0
     *
     * @param string $body_class The body class string.
     * @return string The modified body class string.
     */
    public function admin_body_class($body_class)
    {
    }
    /**
     * Check if any scheduled tasks have been missed.
     *
     * Returns a boolean value of `true` if a scheduled task has been missed and ends processing. If the list of
     * crons is an instance of WP_Error, return the instance instead of a boolean value.
     *
     * @since 5.2.0
     *
     * @return bool|WP_Error true if a cron was missed, false if it wasn't. WP_Error if the cron is set to that.
     */
    public function has_missed_cron()
    {
    }
    /**
     * Run a loopback test on our site.
     *
     * Loopbacks are what WordPress uses to communicate with itself to start up WP_Cron, scheduled posts,
     * make sure plugin or theme edits don't cause site failures and similar.
     *
     * @since 5.2.0
     *
     * @return object The test results.
     */
    function can_perform_loopback()
    {
    }
}