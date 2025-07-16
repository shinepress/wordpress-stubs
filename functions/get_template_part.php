<?php


/**
 * Loads a template part into a template.
 *
 * Provides a simple mechanism for child themes to overload reusable sections of code
 * in the theme.
 *
 * Includes the named template part for a theme or if a name is specified then a
 * specialized part will be included. If the theme contains no {slug}.php file
 * then no template will be included.
 *
 * The template is included using require, not require_once, so you may include the
 * same template part multiple times.
 *
 * For the $name parameter, if the file is called "{slug}-special.php" then specify
 * "special".
 *
 * @since 3.0.0
 * @since 5.5.0 A return value was added.
 * @since 5.5.0 The `$args` parameter was added.
 *
 * @param string      $slug The slug name for the generic template.
 * @param string|null $name Optional. The name of the specialized template. Default null.
 * @param array       $args Optional. Additional arguments passed to the template.
 *                          Default empty array.
 * @return void|false Void on success, false if the template does not exist.
 */
function get_template_part($slug, $name = \null, $args = array())
{
}