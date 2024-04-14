<?php


/**
 * Locale API: WP_Textdomain_Registry class.
 *
 * This file uses rtrim() instead of untrailingslashit() and trailingslashit()
 * to avoid formatting.php dependency.
 *
 * @package WordPress
 * @subpackage i18n
 * @since 6.1.0
 */
/**
 * Core class used for registering text domains.
 *
 * @since 6.1.0
 */
#[\AllowDynamicProperties]
class WP_Textdomain_Registry
{
    /**
     * List of domains and all their language directory paths for each locale.
     *
     * @since 6.1.0
     *
     * @var array
     */
    protected $all = array();
    /**
     * List of domains and their language directory path for the current (most recent) locale.
     *
     * @since 6.1.0
     *
     * @var array
     */
    protected $current = array();
    /**
     * List of domains and their custom language directory paths.
     *
     * @see load_plugin_textdomain()
     * @see load_theme_textdomain()
     *
     * @since 6.1.0
     *
     * @var array
     */
    protected $custom_paths = array();
    /**
     * Holds a cached list of available .mo files to improve performance.
     *
     * @since 6.1.0
     * @since 6.5.0 This property is no longer used.
     *
     * @var array
     *
     * @deprecated
     */
    protected $cached_mo_files = array();
    /**
     * Holds a cached list of domains with translations to improve performance.
     *
     * @since 6.2.0
     *
     * @var string[]
     */
    protected $domains_with_translations = array();
    /**
     * Initializes the registry.
     *
     * Hooks into the {@see 'upgrader_process_complete'} filter
     * to invalidate MO files caches.
     *
     * @since 6.5.0
     */
    public function init()
    {
    }
    /**
     * Returns the languages directory path for a specific domain and locale.
     *
     * @since 6.1.0
     *
     * @param string $domain Text domain.
     * @param string $locale Locale.
     *
     * @return string|false MO file path or false if there is none available.
     */
    public function get($domain, $locale)
    {
    }
    /**
     * Determines whether any MO file paths are available for the domain.
     *
     * This is the case if a path has been set for the current locale,
     * or if there is no information stored yet, in which case
     * {@see _load_textdomain_just_in_time()} will fetch the information first.
     *
     * @since 6.1.0
     *
     * @param string $domain Text domain.
     * @return bool Whether any MO file paths are available for the domain.
     */
    public function has($domain)
    {
    }
    /**
     * Sets the language directory path for a specific domain and locale.
     *
     * Also sets the 'current' property for direct access
     * to the path for the current (most recent) locale.
     *
     * @since 6.1.0
     *
     * @param string       $domain Text domain.
     * @param string       $locale Locale.
     * @param string|false $path   Language directory path or false if there is none available.
     */
    public function set($domain, $locale, $path)
    {
    }
    /**
     * Sets the custom path to the plugin's/theme's languages directory.
     *
     * Used by {@see load_plugin_textdomain()} and {@see load_theme_textdomain()}.
     *
     * @since 6.1.0
     *
     * @param string $domain Text domain.
     * @param string $path   Language directory path.
     */
    public function set_custom_path($domain, $path)
    {
    }
    /**
     * Retrieves translation files from the specified path.
     *
     * Allows early retrieval through the {@see 'pre_get_mo_files_from_path'} filter to optimize
     * performance, especially in directories with many files.
     *
     * @since 6.5.0
     *
     * @param string $path The directory path to search for translation files.
     * @return array Array of translation file paths. Can contain .mo and .l10n.php files.
     */
    public function get_language_files_from_path($path)
    {
    }
    /**
     * Invalidate the cache for .mo files.
     *
     * This function deletes the cache entries related to .mo files when triggered
     * by specific actions, such as the completion of an upgrade process.
     *
     * @since 6.5.0
     *
     * @param WP_Upgrader $upgrader   Unused. WP_Upgrader instance. In other contexts this might be a
     *                                Theme_Upgrader, Plugin_Upgrader, Core_Upgrade, or Language_Pack_Upgrader instance.
     * @param array       $hook_extra {
     *     Array of bulk item update data.
     *
     *     @type string $action       Type of action. Default 'update'.
     *     @type string $type         Type of update process. Accepts 'plugin', 'theme', 'translation', or 'core'.
     *     @type bool   $bulk         Whether the update process is a bulk update. Default true.
     *     @type array  $plugins      Array of the basename paths of the plugins' main files.
     *     @type array  $themes       The theme slugs.
     *     @type array  $translations {
     *         Array of translations update data.
     *
     *         @type string $language The locale the translation is for.
     *         @type string $type     Type of translation. Accepts 'plugin', 'theme', or 'core'.
     *         @type string $slug     Text domain the translation is for. The slug of a theme/plugin or
     *                                'default' for core translations.
     *         @type string $version  The version of a theme, plugin, or core.
     *     }
     * }
     * @phpstan-param array{
     *   action?: string,
     *   type?: string,
     *   bulk?: bool,
     *   plugins?: array,
     *   themes?: array,
     *   translations?: array{
     *     language: string,
     *     type: string,
     *     slug: string,
     *     version: string,
     *   },
     * } $hook_extra
     * @phpstan-return void
     */
    public function invalidate_mo_files_cache($upgrader, $hook_extra)
    {
    }
}