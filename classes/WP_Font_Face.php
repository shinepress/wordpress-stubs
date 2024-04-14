<?php


/**
 * WP_Font_Face class.
 *
 * @package    WordPress
 * @subpackage Fonts
 * @since      6.4.0
 */
/**
 * Font Face generates and prints `@font-face` styles for given fonts.
 *
 * @since 6.4.0
 */
class WP_Font_Face
{
    /**
     * Creates and initializes an instance of WP_Font_Face.
     *
     * @since 6.4.0
     */
    public function __construct()
    {
    }
    /**
     * Generates and prints the `@font-face` styles for the given fonts.
     *
     * @since 6.4.0
     *
     * @param array[][] $fonts Optional. The font-families and their font variations.
     *                         See {@see wp_print_font_faces()} for the supported fields.
     *                         Default empty array.
     * @phpstan-param array[]{
     *   font-family?: string{
     *     font_variation?: array{
     *       font-family: string,
     *       src: string|string[],
     *       font_style?: string,
     *       font-weight?: string,
     *       font-display?: string,
     *       ascent-override?: string,
     *       descent-override?: string,
     *       font-stretch?: string,
     *       font-variant?: string,
     *       font-feature-settings?: string,
     *       font-variation-settings?: string,
     *       line-gap-override?: string,
     *       size-adjust?: string,
     *       unicode-range?: string,
     *     },
     *   },
     * } $fonts See wp_print_font_faces()
     * @phpstan-return void
     */
    public function generate_and_print(array $fonts)
    {
    }
}