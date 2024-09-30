<?php


/**
 * A class of utilities for working with the Font Library.
 *
 * These utilities may change or be removed in the future and are intended for internal use only.
 *
 * @since 6.5.0
 * @access private
 */
class WP_Font_Utils
{
    /**
     * Sanitizes and formats font family names.
     *
     * - Applies `sanitize_text_field`.
     * - Adds surrounding quotes to names containing any characters that are not alphabetic or dashes.
     *
     * It follows the recommendations from the CSS Fonts Module Level 4.
     * @link https://www.w3.org/TR/css-fonts-4/#font-family-prop
     *
     * @since 6.5.0
     * @access private
     *
     * @see sanitize_text_field()
     *
     * @param string $font_family Font family name(s), comma-separated.
     * @return string Sanitized and formatted font family name(s).
     */
    public static function sanitize_font_family($font_family)
    {
    }
    /**
     * Generates a slug from font face properties, e.g. `open sans;normal;400;100%;U+0-10FFFF`
     *
     * Used for comparison with other font faces in the same family, to prevent duplicates
     * that would both match according the CSS font matching spec. Uses only simple case-insensitive
     * matching for fontFamily and unicodeRange, so does not handle overlapping font-family lists or
     * unicode ranges.
     *
     * @since 6.5.0
     * @access private
     *
     * @link https://drafts.csswg.org/css-fonts/#font-style-matching
     *
     * @param array $settings {
     *     Font face settings.
     *
     *     @type string $fontFamily   Font family name.
     *     @type string $fontStyle    Optional font style, defaults to 'normal'.
     *     @type string $fontWeight   Optional font weight, defaults to 400.
     *     @type string $fontStretch  Optional font stretch, defaults to '100%'.
     *     @type string $unicodeRange Optional unicode range, defaults to 'U+0-10FFFF'.
     * }
     * @return string Font face slug.
     * @phpstan-param array{
     *   fontFamily?: string,
     *   fontStyle?: string,
     *   fontWeight?: string,
     *   fontStretch?: string,
     *   unicodeRange?: string,
     * } $settings
     */
    public static function get_font_face_slug($settings)
    {
    }
    /**
     * Sanitizes a tree of data using a schema.
     *
     * The schema structure should mirror the data tree. Each value provided in the
     * schema should be a callable that will be applied to sanitize the corresponding
     * value in the data tree. Keys that are in the data tree, but not present in the
     * schema, will be removed in the sanitized data. Nested arrays are traversed recursively.
     *
     * @since 6.5.0
     *
     * @access private
     *
     * @param array $tree   The data to sanitize.
     * @param array $schema The schema used for sanitization.
     * @return array The sanitized data.
     */
    public static function sanitize_from_schema($tree, $schema)
    {
    }
    /**
     * Returns the expected mime-type values for font files, depending on PHP version.
     *
     * This is needed because font mime types vary by PHP version, so checking the PHP version
     * is necessary until a list of valid mime-types for each file extension can be provided to
     * the 'upload_mimes' filter.
     *
     * @since 6.5.0
     *
     * @access private
     *
     * @return string[] A collection of mime types keyed by file extension.
     */
    public static function get_allowed_font_mime_types()
    {
    }
}