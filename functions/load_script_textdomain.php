<?php


/**
 * Load the script translated strings.
 *
 * @see WP_Scripts::set_translations()
 * @link https://core.trac.wordpress.org/ticket/45103
 * @global WP_Scripts $wp_scripts The WP_Scripts object for printing scripts.
 *
 * @since 5.0.0
 *
 * @param string $handle Name of the script to register a translation domain to.
 * @param string $domain The textdomain.
 * @param string $path   Optional. The full file path to the directory containing translation files.
 *
 * @return false|string False if the script textdomain could not be loaded, the translated strings
 *                      in JSON encoding otherwise.
 */
function load_script_textdomain($handle, $domain, $path = \null)
{
}