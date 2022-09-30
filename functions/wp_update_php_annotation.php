<?php


/**
 * Prints the default annotation for the web host altering the "Update PHP" page URL.
 *
 * This function is to be used after {@see wp_get_update_php_url()} to display a consistent
 * annotation if the web host has altered the default "Update PHP" page URL.
 *
 * @since 5.1.0
 * @since 5.2.0 Added the `$before` and `$after` parameters.
 *
 * @param string $before Markup to output before the annotation. Default `<p class="description">`.
 * @param string $after  Markup to output after the annotation. Default `</p>`.
 */
function wp_update_php_annotation($before = '<p class="description">', $after = '</p>')
{
}