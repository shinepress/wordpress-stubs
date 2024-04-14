<?php


/**
 * Loads the script translated strings.
 *
 * @since 5.0.0
 * @since 5.0.2 Uses load_script_translations() to load translation data.
 *
 * @see WP_Scripts::set_translations()
 *
 * @param string $handle Name of the script to register a translation domain to.
 * @param string $domain The text domain.
 * @param string $path   Optional. The full file path to the directory containing translation files.
 *
 * @return false|string False if the script textdomain could not be loaded, the translated strings
 *                      in JSON encoding otherwise.
 */
function load_script_textdomain($handle, $domain, $path = \null)
{
}