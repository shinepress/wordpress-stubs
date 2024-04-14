<?php


/**
 * Retrieves the template file from the theme for a given slug.
 *
 * @since 5.9.0
 * @access private
 *
 * @param string $template_type Template type. Either 'wp_template' or 'wp_template_part'.
 * @param string $slug          Template slug.
 * @return array|null {
 *    Array with template metadata if $template_type is one of 'wp_template' or 'wp_template_part',
 *    null otherwise.
 *
 *    @type string   $slug      Template slug.
 *    @type string   $path      Template file path.
 *    @type string   $theme     Theme slug.
 *    @type string   $type      Template type.
 *    @type string   $area      Template area. Only for 'wp_template_part'.
 *    @type string   $title     Optional. Template title.
 *    @type string[] $postTypes Optional. List of post types that the template supports. Only for 'wp_template'.
 * }
 * @phpstan-param 'wp_template'|'wp_template_part' $template_type
 */
function _get_block_template_file($template_type, $slug)
{
}