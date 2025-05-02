<?php


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
function has_translation(string $singular, string $textdomain = 'default', ?string $locale = \null): bool
{
}