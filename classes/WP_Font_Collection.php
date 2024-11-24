<?php


/**
 * Font Collection class.
 *
 * @since 6.5.0
 *
 * @see wp_register_font_collection()
 */
final class WP_Font_Collection
{
    /**
     * The unique slug for the font collection.
     *
     * @since 6.5.0
     * @var string
     */
    public $slug;
    /**
     * WP_Font_Collection constructor.
     *
     * @since 6.5.0
     *
     * @param string $slug Font collection slug. May only contain alphanumeric characters, dashes,
     *                     and underscores. See sanitize_title().
     * @param array  $args Font collection data. See wp_register_font_collection() for information on accepted arguments.
     * @phpstan-param array{
     *   name?: string,
     *   description?: string,
     *   font_families?: array|string,
     *   categories?: array,
     * } $args See wp_register_font_collection()
     */
    public function __construct(string $slug, array $args)
    {
    }
    /**
     * Retrieves the font collection data.
     *
     * @since 6.5.0
     *
     * @return array|WP_Error An array containing the font collection data, or a WP_Error on failure.
     */
    public function get_data()
    {
    }
}