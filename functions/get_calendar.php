<?php


/**
 * Display calendar with days that have posts as links.
 *
 * The calendar is cached, which will be retrieved, if it exists. If there are
 * no posts for the month, then it will not be displayed.
 *
 * @since 1.0.0
 *
 * @global wpdb      $wpdb      WordPress database abstraction object.
 * @global int       $m
 * @global int       $monthnum
 * @global int       $year
 * @global WP_Locale $wp_locale WordPress date and time locale object.
 * @global array     $posts
 *
 * @param bool $initial Optional, default is true. Use initial calendar names.
 * @param bool $echo    Optional, default is true. Set to false for return.
 * @return string|void String when retrieving.
 * @phpstan-return ($display is true ? void : string)
 */
function get_calendar($initial = \true, $echo = \true)
{
}