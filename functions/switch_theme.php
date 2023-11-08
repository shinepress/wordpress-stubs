<?php


/**
 * Switches the theme.
 *
 * Accepts one argument: $stylesheet of the theme. It also accepts an additional function signature
 * of two arguments: $template then $stylesheet. This is for backward compatibility.
 *
 * @since 2.5.0
 *
 * @global array                $wp_theme_directories
 * @global WP_Customize_Manager $wp_customize
 * @global array                $sidebars_widgets
 * @global array                $wp_registered_sidebars
 * @global string               $wp_stylesheet_path
 * @global string               $wp_template_path
 *
 * @param string $stylesheet Stylesheet name.
 */
function switch_theme($stylesheet)
{
}