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
#[\AllowDynamicProperties]
class WP_Locale_Switcher
{
    /**
     * Locale stack.
     *
     * @since 4.7.0
     * @var string[]
     */
    private $locales = array();
    /**
     * Original locale.
     *
     * @since 4.7.0
     * @var string
     */
    private $original_locale;
    /**
     * Holds all available languages.
     *
     * @since 4.7.0
     * @var string[] An array of language codes (file names without the .mo extension).
     */
    private $available_languages = array();
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
    /**
     * Load translations for a given locale.
     *
     * When switching to a locale, translations for this locale must be loaded from scratch.
     *
     * @since 4.7.0
     *
     * @global Mo[] $l10n An array of all currently loaded text domains.
     *
     * @param string $locale The locale to load translations for.
     */
    private function load_translations($locale)
    {
    }
    /**
     * Changes the site's locale to the given one.
     *
     * Loads the translations, changes the global `$wp_locale` object and updates
     * all post type labels.
     *
     * @since 4.7.0
     *
     * @global WP_Locale $wp_locale WordPress date and time locale object.
     *
     * @param string $locale The locale to change to.
     */
    private function change_locale($locale)
    {
    }
}