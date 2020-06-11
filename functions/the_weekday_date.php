<?php


/**
 * Display the weekday on which the post was written.
 *
 * Will only output the weekday if the current post's weekday is different from
 * the previous one output.
 *
 * @since 0.71
 *
 * @global WP_Locale       $wp_locale
 * @global string|int|bool $currentday
 * @global string|int|bool $previousweekday
 *
 * @param string $before Optional Output before the date.
 * @param string $after Optional Output after the date.
 */
function the_weekday_date($before = '', $after = '')
{
}