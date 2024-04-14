<?php


/**
 * Loads sidebar template.
 *
 * Includes the sidebar template for a theme or if a name is specified then a
 * specialised sidebar will be included.
 *
 * For the parameter, if the file is called "sidebar-special.php" then specify
 * "special".
 *
 * @since 1.5.0
 * @since 5.5.0 A return value was added.
 * @since 5.5.0 The `$args` parameter was added.
 *
 * @param string $name The name of the specialised sidebar.
 * @param array  $args Optional. Additional arguments passed to the sidebar template.
 *                     Default empty array.
 * @return void|false Void on success, false if the template does not exist.
 */
function get_sidebar($name = \null, $args = array())
{
}