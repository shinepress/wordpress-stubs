<?php


/**
 * Locale API: WP_Locale_Switcher class
 *
 * @package WordPress
 * @subpackage i18n
 * @since 4.7.0
 */
/**
 * Core class used for switching locales.
 *
 * @since 4.7.0
 */
class WP_Locale_Switcher
{
    /**
     * Constructor.
     *
     * Stores the original locale as well as a list of all available languages.
     *
     * @since 4.7.0
     */
    public function __construct()
    {
    }
    /**
     * Initializes the locale switcher.
     *
     * Hooks into the {@see 'locale'} filter to change the locale on the fly.
     *
     * @since 4.7.0
     */
    public function init()
    {
    }
    /**
     * Switches the translations according to the given locale.
     *
     * @since 4.7.0
     *
     * @param string $locale The locale to switch to.
     * @return bool True on success, false on failure.
     */
    public function switch_to_locale($locale)
    {
    }
    /**
     * Restores the translations according to the previous locale.
     *
     * @since 4.7.0
     *
     * @return string|false Locale on success, false on failure.
     */
    public function restore_previous_locale()
    {
    }
    /**
     * Restores the translations according to the original locale.
     *
     * @since 4.7.0
     *
     * @return string|false Locale on success, false on failure.
     */
    public function restore_current_locale()
    {
    }
    /**
     * Whether switch_to_locale() is in effect.
     *
     * @since 4.7.0
     *
     * @return bool True if the locale has been switched, false otherwise.
     */
    public function is_switched()
    {
    }
    /**
     * Filters the locale of the WordPress installation.
     *
     * @since 4.7.0
     *
     * @param string $locale The locale of the WordPress installation.
     * @return string The locale currently being switched to.
     */
    public function filter_locale($locale)
    {
    }
}