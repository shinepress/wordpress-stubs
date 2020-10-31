<?php


/**
 * Add a new section to a settings page.
 *
 * Part of the Settings API. Use this to define new settings sections for an admin page.
 * Show settings sections in your admin page callback function with do_settings_sections().
 * Add settings fields to your section with add_settings_field().
 *
 * The $callback argument should be the name of a function that echoes out any
 * content you want to show at the top of the settings section before the actual
 * fields. It can output nothing if you want.
 *
 * @since 2.7.0
 *
 * @global array $wp_settings_sections Storage array of all settings sections added to admin pages.
 *
 * @param string   $id       Slug-name to identify the section. Used in the 'id' attribute of tags.
 * @param string   $title    Formatted title of the section. Shown as the heading for the section.
 * @param callable $callback Function that echos out any content at the top of the section (between heading and fields).
 * @param string   $page     The slug-name of the settings page on which to show the section. Built-in pages include
 *                           'general', 'reading', 'writing', 'discussion', 'media', etc. Create your own using
 *                           add_options_page();
 */
function add_settings_section($id, $title, $callback, $page)
{
}