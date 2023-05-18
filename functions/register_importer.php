<?php


/**
 * Register importer for WordPress.
 *
 * @since 2.0.0
 *
 * @global array $wp_importers
 *
 * @param string   $id          Importer tag. Used to uniquely identify importer.
 * @param string   $name        Importer name and title.
 * @param string   $description Importer description.
 * @param callable $callback    Callback to run.
 * @return WP_Error Returns WP_Error when $callback is WP_Error.
 */
function register_importer($id, $name, $description, $callback)
{
}