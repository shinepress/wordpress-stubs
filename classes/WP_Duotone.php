<?php


/**
 * WP_Duotone class
 *
 * Parts of this source were derived and modified from colord,
 * released under the MIT license.
 *
 * https://github.com/omgovich/colord
 *
 * Copyright (c) 2020 Vlad Shilov omgovich@ya.ru
 *
 * Permission is hereby granted, free of charge, to any person obtaining
 * a copy of this software and associated documentation files (the
 * "Software"), to deal in the Software without restriction, including
 * without limitation the rights to use, copy, modify, merge, publish,
 * distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to
 * the following conditions:
 *
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
 * LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
 * OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
 * WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * @package WordPress
 * @since 6.3.0
 */
/**
 * Manages duotone block supports and global styles.
 *
 * @access private
 */
class WP_Duotone
{
    /**
     * Returns the prefixed id for the duotone filter for use as a CSS id.
     *
     * Exported for the deprecated function wp_get_duotone_filter_id().
     *
     * @internal
     *
     * @since 6.3.0
     * @deprecated 6.3.0
     *
     * @param  array $preset Duotone preset value as seen in theme.json.
     * @return string        Duotone filter CSS id.
     */
    public static function get_filter_id_from_preset($preset)
    {
    }
    /**
     * Gets the SVG for the duotone filter definition from a preset.
     *
     * Exported for the deprecated function wp_get_duotone_filter_property().
     *
     * @internal
     *
     * @since 6.3.0
     * @deprecated 6.3.0
     *
     * @param array $preset The duotone preset.
     * @return string The SVG for the filter definition.
     */
    public static function get_filter_svg_from_preset($preset)
    {
    }
    /**
     * Registers the style and colors block attributes for block types that support it.
     *
     * Block support is added with `supports.filter.duotone` in block.json.
     *
     * @since 6.3.0
     *
     * @param WP_Block_Type $block_type Block Type.
     */
    public static function register_duotone_support($block_type)
    {
    }
    /**
     * Render out the duotone CSS styles and SVG.
     *
     * The hooks self::set_global_style_block_names and self::set_global_styles_presets
     * must be called before this function.
     *
     * @since 6.3.0
     *
     * @param  string   $block_content Rendered block content.
     * @param  array    $block         Block object.
     * @param  WP_Block $wp_block      The block instance.
     * @return string Filtered block content.
     */
    public static function render_duotone_support($block_content, $block, $wp_block)
    {
    }
    /**
     * Appends the used block duotone filter declarations to the inline block supports CSS.
     *
     * Uses the declarations saved in earlier calls to self::enqueue_block_css.
     *
     * @since 6.3.0
     */
    public static function output_block_styles()
    {
    }
    /**
     * Appends the used global style duotone filter presets (CSS custom
     * properties) to the inline global styles CSS.
     *
     * Uses the declarations saved in earlier calls to self::enqueue_global_styles_preset.
     *
     * @since 6.3.0
     */
    public static function output_global_styles()
    {
    }
    /**
     * Outputs all necessary SVG for duotone filters, CSS for classic themes.
     *
     * Uses the declarations saved in earlier calls to self::enqueue_global_styles_preset
     * and self::enqueue_custom_filter.
     *
     * @since 6.3.0
     */
    public static function output_footer_assets()
    {
    }
    /**
     * Adds the duotone SVGs and CSS custom properties to the editor settings.
     *
     * This allows the properties to be pulled in by the EditorStyles component
     * in JS and rendered in the post editor.
     *
     * @since 6.3.0
     *
     * @param array $settings The block editor settings from the `block_editor_settings_all` filter.
     * @return array The editor settings with duotone SVGs and CSS custom properties.
     */
    public static function add_editor_settings($settings)
    {
    }
    /**
     * Migrates the experimental duotone support flag to the stabilized location.
     *
     * This moves `supports.color.__experimentalDuotone` to `supports.filter.duotone`.
     *
     * @since 6.3.0
     *
     * @param array $settings Current block type settings.
     * @param array $metadata Block metadata as read in via block.json.
     * @return array Filtered block type settings.
     */
    public static function migrate_experimental_duotone_support_flag($settings, $metadata)
    {
    }
    /**
     * Gets the CSS filter property value from a preset.
     *
     * Exported for the deprecated function wp_get_duotone_filter_id().
     *
     * @internal
     *
     * @since 6.3.0
     * @deprecated 6.3.0
     *
     * @param array $preset The duotone preset.
     * @return string The CSS filter property value.
     */
    public static function get_filter_css_property_value_from_preset($preset)
    {
    }
}