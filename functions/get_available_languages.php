<?php


/**
 * Get all available languages based on the presence of *.mo files in a given directory.
 *
 * The default directory is WP_LANG_DIR.
 *
 * @since 3.0.0
 * @since 4.7.0 The results are now filterable with the {@see 'get_available_languages'} filter.
 *
 * @param string $dir A directory to search for language files.
 *                    Default WP_LANG_DIR.
 * @return string[] An array of language codes or an empty array if no languages are present. Language codes are formed by stripping the .mo extension from the language file names.
 */
function get_available_languages($dir = \null)
{
}