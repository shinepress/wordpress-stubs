<?php


/**
 * Retrieve the date in localized format, based on a sum of Unix timestamp and
 * timezone offset in seconds.
 *
 * If the locale specifies the locale month and weekday, then the locale will
 * take over the format for the date. If it isn't, then the date format string
 * will be used instead.
 *
 * @since 0.71
 *
 * @global WP_Locale $wp_locale
 *
 * @param string   $dateformatstring      Format to display the date.
 * @param int|bool $timestamp_with_offset Optional. A sum of Unix timestamp and timezone offset in seconds.
 *                                        Default false.
 * @param bool     $gmt                   Optional. Whether to use GMT timezone. Only applies if timestamp is
 *                                        not provided. Default false.
 *
 * @return string The date, translated if locale specifies it.
 */
function date_i18n($dateformatstring, $timestamp_with_offset = \false, $gmt = \false)
{
}