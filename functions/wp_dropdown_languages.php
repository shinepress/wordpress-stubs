<?php


/**
 * Language selector.
 *
 * @since 4.0.0
 * @since 4.3.0 Introduced the `echo` argument.
 * @since 4.7.0 Introduced the `show_option_site_default` argument.
 * @since 5.1.0 Introduced the `show_option_en_us` argument.
 *
 * @see get_available_languages()
 * @see wp_get_available_translations()
 *
 * @param string|array $args {
 *     Optional. Array or string of arguments for outputting the language selector.
 *
 *     @type string   $id                           ID attribute of the select element. Default 'locale'.
 *     @type string   $name                         Name attribute of the select element. Default 'locale'.
 *     @type array    $languages                    List of installed languages, contain only the locales.
 *                                                  Default empty array.
 *     @type array    $translations                 List of available translations. Default result of
 *                                                  wp_get_available_translations().
 *     @type string   $selected                     Language which should be selected. Default empty.
 *     @type bool|int $echo                         Whether to echo the generated markup. Accepts 0, 1, or their
 *                                                  boolean equivalents. Default 1.
 *     @type bool     $show_available_translations  Whether to show available translations. Default true.
 *     @type bool     $show_option_site_default     Whether to show an option to fall back to the site's locale. Default false.
 *     @type bool     $show_option_en_us            Whether to show an option for English (United States). Default true.
 * }
 * @return string HTML dropdown list of languages.
 * @phpstan-param array{
 *   id?: string,
 *   name?: string,
 *   languages?: array,
 *   translations?: array,
 *   selected?: string,
 *   echo?: bool|int,
 *   show_available_translations?: bool,
 *   show_option_site_default?: bool,
 *   show_option_en_us?: bool,
 * } $args
 */
function wp_dropdown_languages($args = array())
{
}