<?php


/**
 * Class for looking up a site's health based on a user's WordPress environment.
 *
 * @package WordPress
 * @subpackage Site_Health
 * @since 5.2.0
 */
#[\AllowDynamicProperties]
class WP_Site_Health
{
    public $is_mariadb = \false;
    public $php_memory_limit;
    public $schedules;
    public $crons;
    public $last_missed_cron = \null;
    public $last_late_cron = \null;
    /**
     * WP_Site_Health constructor.
     *
     * @since 5.2.0
     */
    public function __construct()
    {
    }
    /**
     * Outputs the content of a tab in the Site Health screen.
     *
     * @since 5.8.0
     *
     * @param string $tab Slug of the current tab being displayed.
     */
    public function show_site_health_tab($tab)
    {
    }
    /**
     * Returns an instance of the WP_Site_Health class, or create one if none exist yet.
     *
     * @since 5.4.0
     *
     * @return WP_Site_Health|null
     */
    public static function get_instance()
    {
    }
    /**
     * Enqueues the site health scripts.
     *
     * @since 5.2.0
     */
    public function enqueue_scripts()
    {
    }
    /**
     * Tests whether `wp_version_check` is blocked.
     *
     * It's possible to block updates with the `wp_version_check` filter, but this can't be checked
     * during an Ajax call, as the filter is never introduced then.
     *
     * This filter overrides a standard page request if it's made by an admin through the Ajax call
     * with the right query argument to check for this.
     *
     * @since 5.2.0
     */
    public function check_wp_version_check_exists()
    {
    }
    /**
     * Tests for WordPress version and outputs it.
     *
     * Gives various results depending on what kind of updates are available, if any, to encourage
     * the user to install security updates as a priority.
     *
     * @since 5.2.0
     *
     * @return array The test result.
     */
    public function get_test_wordpress_version()
    {
    }
    /**
     * Tests if plugins are outdated, or unnecessary.
     *
     * The test checks if your plugins are up to date, and encourages you to remove any
     * that are not in use.
     *
     * @since 5.2.0
     *
     * @return array The test result.
     */
    public function get_test_plugin_version()
    {
    }
    /**
     * Tests if themes are outdated, or unnecessary.
     *
     * Checks if your site has a default theme (to fall back on if there is a need),
     * if your themes are up to date and, finally, encourages you to remove any themes
     * that are not needed.
     *
     * @since 5.2.0
     *
     * @return array The test results.
     */
    public function get_test_theme_version()
    {
    }
    /**
     * Tests if the supplied PHP version is supported.
     *
     * @since 5.2.0
     *
     * @return array The test results.
     */
    public function get_test_php_version()
    {
    }
    /**
     * Tests if required PHP modules are installed on the host.
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
     * Tests if the PHP default timezone is set to UTC.
     *
     * @since 5.3.1
     *
     * @return array The test results.
     */
    public function get_test_php_default_timezone()
    {
    }
    /**
     * Tests if there's an active PHP session that can affect loopback requests.
     *
     * @since 5.5.0
     *
     * @return array The test results.
     */
    public function get_test_php_sessions()
    {
    }
    /**
     * Tests if the SQL server is up to date.
     *
     * @since 5.2.0
     *
     * @return array The test results.
     */
    public function get_test_sql_server()
    {
    }
    /**
     * Tests if the database server is capable of using utf8mb4.
     *
     * @since 5.2.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @return array The test results.
     */
    public function get_test_utf8mb4_support()
    {
    }
    /**
     * Tests if the site can communicate with WordPress.org.
     *
     * @since 5.2.0
     *
     * @return array The test results.
     */
    public function get_test_dotorg_communication()
    {
    }
    /**
     * Tests if debug information is enabled.
     *
     * When WP_DEBUG is enabled, errors and information may be disclosed to site visitors,
     * or logged to a publicly accessible file.
     *
     * Debugging is also frequently left enabled after looking for errors on a site,
     * as site owners do not understand the implications of this.
     *
     * @since 5.2.0
     *
     * @return array The test results.
     */
    public function get_test_is_in_debug_mode()
    {
    }
    /**
     * Tests if the site is serving content over HTTPS.
     *
     * Many sites have varying degrees of HTTPS support, the most common of which is sites that have it
     * enabled, but only if you visit the right site address.
     *
     * @since 5.2.0
     * @since 5.7.0 Updated to rely on {@see wp_is_using_https()} and {@see wp_is_https_supported()}.
     *
     * @return array The test results.
     */
    public function get_test_https_status()
    {
    }
    /**
     * Checks if the HTTP API can handle SSL/TLS requests.
     *
     * @since 5.2.0
     *
     * @return array The test result.
     */
    public function get_test_ssl_support()
    {
    }
    /**
     * Tests if scheduled events run as intended.
     *
     * If scheduled events are not running, this may indicate something with WP_Cron is not working
     * as intended, or that there are orphaned events hanging around from older code.
     *
     * @since 5.2.0
     *
     * @return array The test results.
     */
    public function get_test_scheduled_events()
    {
    }
    /**
     * Tests if WordPress can run automated background updates.
     *
     * Background updates in WordPress are primarily used for minor releases and security updates.
     * It's important to either have these working, or be aware that they are intentionally disabled
     * for whatever reason.
     *
     * @since 5.2.0
     *
     * @return array The test results.
     */
    public function get_test_background_updates()
    {
    }
    /**
     * Tests if plugin and theme auto-updates appear to be configured correctly.
     *
     * @since 5.5.0
     *
     * @return array The test results.
     */
    public function get_test_plugin_theme_auto_updates()
    {
    }
    /**
     * Tests available disk space for updates.
     *
     * @since 6.3.0
     *
     * @return array The test results.
     */
    public function get_test_available_updates_disk_space()
    {
    }
    /**
     * Tests if plugin and theme temporary backup directories are writable or can be created.
     *
     * @since 6.3.0
     *
     * @global WP_Filesystem_Base $wp_filesystem WordPress filesystem subclass.
     *
     * @return array The test results.
     */
    public function get_test_update_temp_backup_writable()
    {
    }
    /**
     * Tests if loopbacks work as expected.
     *
     * A loopback is when WordPress queries itself, for example to start a new WP_Cron instance,
     * or when editing a plugin or theme. This has shown itself to be a recurring issue,
     * as code can very easily break this interaction.
     *
     * @since 5.2.0
     *
     * @return array The test results.
     */
    public function get_test_loopback_requests()
    {
    }
    /**
     * Tests if HTTP requests are blocked.
     *
     * It's possible to block all outgoing communication (with the possibility of allowing certain
     * hosts) via the HTTP API. This may create problems for users as many features are running as
     * services these days.
     *
     * @since 5.2.0
     *
     * @return array The test results.
     */
    public function get_test_http_requests()
    {
    }
    /**
     * Tests if the REST API is accessible.
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
     * Tests if 'file_uploads' directive in PHP.ini is turned off.
     *
     * @since 5.5.0
     *
     * @return array The test results.
     */
    public function get_test_file_uploads()
    {
    }
    /**
     * Tests if the Authorization header has the expected values.
     *
     * @since 5.6.0
     *
     * @return array
     */
    public function get_test_authorization_header()
    {
    }
    /**
     * Tests if a full page cache is available.
     *
     * @since 6.1.0
     *
     * @return array The test result.
     */
    public function get_test_page_cache()
    {
    }
    /**
     * Tests if the site uses persistent object cache and recommends to use it if not.
     *
     * @since 6.1.0
     *
     * @return array The test result.
     */
    public function get_test_persistent_object_cache()
    {
    }
    /**
     * Returns a set of tests that belong to the site status page.
     *
     * Each site status test is defined here, they may be `direct` tests, that run on page load, or `async` tests
     * which will run later down the line via JavaScript calls to improve page performance and hopefully also user
     * experiences.
     *
     * @since 5.2.0
     * @since 5.6.0 Added support for `has_rest` and `permissions`.
     *
     * @return array The list of tests to run.
     */
    public static function get_tests()
    {
    }
    /**
     * Adds a class to the body HTML tag.
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
     * Checks if any scheduled tasks have been missed.
     *
     * Returns a boolean value of `true` if a scheduled task has been missed and ends processing.
     *
     * If the list of crons is an instance of WP_Error, returns the instance instead of a boolean value.
     *
     * @since 5.2.0
     *
     * @return bool|WP_Error True if a cron was missed, false if not. WP_Error if the cron is set to that.
     */
    public function has_missed_cron()
    {
    }
    /**
     * Checks if any scheduled tasks are late.
     *
     * Returns a boolean value of `true` if a scheduled task is late and ends processing.
     *
     * If the list of crons is an instance of WP_Error, returns the instance instead of a boolean value.
     *
     * @since 5.3.0
     *
     * @return bool|WP_Error True if a cron is late, false if not. WP_Error if the cron is set to that.
     */
    public function has_late_cron()
    {
    }
    /**
     * Checks for potential issues with plugin and theme auto-updates.
     *
     * Though there is no way to 100% determine if plugin and theme auto-updates are configured
     * correctly, a few educated guesses could be made to flag any conditions that would
     * potentially cause unexpected behaviors.
     *
     * @since 5.5.0
     *
     * @return object The test results.
     */
    public function detect_plugin_theme_auto_update_issues()
    {
    }
    /**
     * Runs a loopback test on the site.
     *
     * Loopbacks are what WordPress uses to communicate with itself to start up WP_Cron, scheduled posts,
     * make sure plugin or theme edits don't cause site failures and similar.
     *
     * @since 5.2.0
     *
     * @return object The test results.
     */
    public function can_perform_loopback()
    {
    }
    /**
     * Creates a weekly cron event, if one does not already exist.
     *
     * @since 5.4.0
     */
    public function maybe_create_scheduled_event()
    {
    }
    /**
     * Runs the scheduled event to check and update the latest site health status for the website.
     *
     * @since 5.4.0
     */
    public function wp_cron_scheduled_check()
    {
    }
    /**
     * Checks if the current environment type is set to 'development' or 'local'.
     *
     * @since 5.6.0
     *
     * @return bool True if it is a development environment, false if not.
     */
    public function is_development_environment()
    {
    }
    /**
     * Returns a list of headers and its verification callback to verify if page cache is enabled or not.
     *
     * Note: key is header name and value could be callable function to verify header value.
     * Empty value mean existence of header detect page cache is enabled.
     *
     * @since 6.1.0
     *
     * @return array List of client caching headers and their (optional) verification callbacks.
     */
    public function get_page_cache_headers()
    {
    }
    /**
     * Determines whether to suggest using a persistent object cache.
     *
     * @since 6.1.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @return bool Whether to suggest using a persistent object cache.
     */
    public function should_suggest_persistent_object_cache()
    {
    }
}