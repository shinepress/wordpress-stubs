<?php


/**
 * Class WP_Translation_Controller.
 *
 * @since 6.5.0
 */
final class WP_Translation_Controller
{
    /**
     * Utility method to retrieve the main instance of the class.
     *
     * The instance will be created if it does not exist yet.
     *
     * @since 6.5.0
     *
     * @return WP_Translation_Controller
     */
    public static function get_instance(): \WP_Translation_Controller
    {
    }
    /**
     * Returns the current locale.
     *
     * @since 6.5.0
     *
     * @return string Locale.
     */
    public function get_locale(): string
    {
    }
    /**
     * Sets the current locale.
     *
     * @since 6.5.0
     *
     * @param string $locale Locale.
     */
    public function set_locale(string $locale)
    {
    }
    /**
     * Loads a translation file for a given text domain.
     *
     * @since 6.5.0
     *
     * @param string $translation_file Translation file.
     * @param string $textdomain       Optional. Text domain. Default 'default'.
     * @param string $locale           Optional. Locale. Default current locale.
     * @return bool True on success, false otherwise.
     */
    public function load_file(string $translation_file, string $textdomain = 'default', ?string $locale = \null): bool
    {
    }
    /**
     * Unloads a translation file for a given text domain.
     *
     * @since 6.5.0
     *
     * @param WP_Translation_File|string $file       Translation file instance or file name.
     * @param string                     $textdomain Optional. Text domain. Default 'default'.
     * @param string                     $locale     Optional. Locale. Defaults to all locales.
     * @return bool True on success, false otherwise.
     */
    public function unload_file($file, string $textdomain = 'default', ?string $locale = \null): bool
    {
    }
    /**
     * Unloads all translation files for a given text domain.
     *
     * @since 6.5.0
     *
     * @param string $textdomain Optional. Text domain. Default 'default'.
     * @param string $locale     Optional. Locale. Defaults to all locales.
     * @return bool True on success, false otherwise.
     */
    public function unload_textdomain(string $textdomain = 'default', ?string $locale = \null): bool
    {
    }
    /**
     * Determines whether translations are loaded for a given text domain.
     *
     * @since 6.5.0
     *
     * @param string $textdomain Optional. Text domain. Default 'default'.
     * @param string $locale     Optional. Locale. Default current locale.
     * @return bool True if there are any loaded translations, false otherwise.
     */
    public function is_textdomain_loaded(string $textdomain = 'default', ?string $locale = \null): bool
    {
    }
    /**
     * Translates a singular string.
     *
     * @since 6.5.0
     *
     * @param string $text       Text to translate.
     * @param string $context    Optional. Context for the string. Default empty string.
     * @param string $textdomain Optional. Text domain. Default 'default'.
     * @param string $locale     Optional. Locale. Default current locale.
     * @return string|false Translation on success, false otherwise.
     */
    public function translate(string $text, string $context = '', string $textdomain = 'default', ?string $locale = \null)
    {
    }
    /**
     * Translates plurals.
     *
     * Checks both singular+plural combinations as well as just singulars,
     * in case the translation file does not store the plural.
     *
     * @since 6.5.0
     *
     * @param array       $plurals {
     *     Pair of singular and plural translations.
     *
     *     @type string $0 Singular translation.
     *     @type string $1 Plural translation.
     * }
     * @param int         $number     Number of items.
     * @param string      $context    Optional. Context for the string. Default empty string.
     * @param string      $textdomain Optional. Text domain. Default 'default'.
     * @param string|null $locale     Optional. Locale. Default current locale.
     * @return string|false Translation on success, false otherwise.
     * @phpstan-param array{
     *   0: string,
     *   1: string,
     * } $plurals
     */
    public function translate_plural(array $plurals, int $number, string $context = '', string $textdomain = 'default', ?string $locale = \null)
    {
    }
    /**
     * Returns all existing headers for a given text domain.
     *
     * @since 6.5.0
     *
     * @param string $textdomain Optional. Text domain. Default 'default'.
     * @return array<string, string> Headers.
     */
    public function get_headers(string $textdomain = 'default'): array
    {
    }
    /**
     * Returns all entries for a given text domain.
     *
     * @since 6.5.0
     *
     * @param string $textdomain Optional. Text domain. Default 'default'.
     * @return array<string, string> Entries.
     */
    public function get_entries(string $textdomain = 'default'): array
    {
    }
    /**
     * Returns a boolean to indicate whether a translation exists for a given string with optional text domain and locale.
     *
     * @since 6.7.0
     *
     * @param string  $singular   Singular translation to check.
     * @param string  $textdomain Optional. Text domain. Default 'default'.
     * @param ?string $locale     Optional. Locale. Default current locale.
     * @return bool  True if the translation exists, false otherwise.
     */
    public function has_translation(string $singular, string $textdomain = 'default', ?string $locale = \null): bool
    {
    }
}