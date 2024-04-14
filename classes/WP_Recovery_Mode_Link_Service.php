<?php


/**
 * Error Protection API: WP_Recovery_Mode_Link_Handler class
 *
 * @package WordPress
 * @since 5.2.0
 */
/**
 * Core class used to generate and handle recovery mode links.
 *
 * @since 5.2.0
 */
class WP_Recovery_Mode_Link_Service
{
    const LOGIN_ACTION_ENTER = 'enter_recovery_mode';
    const LOGIN_ACTION_ENTERED = 'entered_recovery_mode';
    /**
     * WP_Recovery_Mode_Link_Service constructor.
     *
     * @since 5.2.0
     *
     * @param WP_Recovery_Mode_Cookie_Service $cookie_service Service to handle setting the recovery mode cookie.
     * @param WP_Recovery_Mode_Key_Service    $key_service    Service to handle generating recovery mode keys.
     */
    public function __construct(\WP_Recovery_Mode_Cookie_Service $cookie_service, \WP_Recovery_Mode_Key_Service $key_service)
    {
    }
    /**
     * Generates a URL to begin recovery mode.
     *
     * Only one recovery mode URL can may be valid at the same time.
     *
     * @since 5.2.0
     *
     * @return string Generated URL.
     */
    public function generate_url()
    {
    }
    /**
     * Enters recovery mode when the user hits wp-login.php with a valid recovery mode link.
     *
     * @since 5.2.0
     *
     * @param int $ttl Number of seconds the link should be valid for.
     * @phpstan-return void
     */
    public function handle_begin_link($ttl)
    {
    }
}