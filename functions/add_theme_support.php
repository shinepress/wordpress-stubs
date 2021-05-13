<?php


/**
 * Registers theme support for a given feature.
 *
 * Must be called in the theme's functions.php file to work.
 * If attached to a hook, it must be {@see 'after_setup_theme'}.
 * The {@see 'init'} hook may be too late for some features.
 *
 * Example usage:
 *
 *     add_theme_support( 'title-tag' );
 *     add_theme_support( 'custom-logo', array(
 *         'height' => 480,
 *         'width'  => 720,
 *     ) );
 *
 * @since 2.9.0
 * @since 3.4.0 The `custom-header-uploads` feature was deprecated.
 * @since 3.6.0 The `html5` feature was added.
 * @since 3.9.0 The `html5` feature now also accepts 'gallery' and 'caption'.
 * @since 4.1.0 The `title-tag` feature was added.
 * @since 4.5.0 The `customize-selective-refresh-widgets` feature was added.
 * @since 4.7.0 The `starter-content` feature was added.
 * @since 5.0.0 The `responsive-embeds`, `align-wide`, `dark-editor-style`, `disable-custom-colors`,
 *              `disable-custom-font-sizes`, `editor-color-palette`, `editor-font-sizes`,
 *              `editor-styles`, and `wp-block-styles` features were added.
 * @since 5.3.0 The `html5` feature now also accepts 'script' and 'style'.
 * @since 5.3.0 Formalized the existing and already documented `...$args` parameter
 *              by adding it to the function signature.
 * @since 5.5.0 The `core-block-patterns` feature was added and is enabled by default.
 * @since 5.5.0 The `custom-logo` feature now also accepts 'unlink-homepage-logo'.
 *
 * @global array $_wp_theme_features
 *
 * @param string $feature The feature being added. Likely core values include 'post-formats', 'post-thumbnails',
 *                        'custom-header', 'custom-background', 'custom-logo', 'menus', 'automatic-feed-links',
 *                        'html5', 'title-tag', 'customize-selective-refresh-widgets', 'starter-content',
 *                        'responsive-embeds', 'align-wide', 'dark-editor-style', 'disable-custom-colors',
 *                        'disable-custom-font-sizes', 'editor-color-palette', 'editor-font-sizes',
 *                        'editor-styles', 'wp-block-styles', and 'core-block-patterns'.
 * @param mixed  ...$args Optional extra arguments to pass along with certain features.
 * @return void|bool False on failure, void otherwise.
 */
function add_theme_support($feature, ...$args)
{
}