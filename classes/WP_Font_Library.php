<?php


/**
 * Font Library class.
 *
 * @since 6.5.0
 */
class WP_Font_Library
{
    /**
     * Register a new font collection.
     *
     * @since 6.5.0
     *
     * @param string $slug Font collection slug. May only contain alphanumeric characters, dashes,
     *                     and underscores. See sanitize_title().
     * @param array  $args Font collection data. See wp_register_font_collection() for information on accepted arguments.
     * @return WP_Font_Collection|WP_Error A font collection if it was registered successfully,
     *                                     or WP_Error object on failure.
     * @phpstan-param array{
     *   name?: string,
     *   description?: string,
     *   font_families?: array|string,
     *   categories?: array,
     * } $args See wp_register_font_collection()
     */
    public function register_font_collection(string $slug, array $args)
    {
    }
    /**
     * Unregisters a previously registered font collection.
     *
     * @since 6.5.0
     *
     * @param string $slug Font collection slug.
     * @return bool True if the font collection was unregistered successfully and false otherwise.
     */
    public function unregister_font_collection(string $slug)
    {
    }
    /**
     * Gets all the font collections available.
     *
     * @since 6.5.0
     *
     * @return array List of font collections.
     */
    public function get_font_collections()
    {
    }
    /**
     * Gets a font collection.
     *
     * @since 6.5.0
     *
     * @param string $slug Font collection slug.
     * @return WP_Font_Collection|null Font collection object, or null if the font collection doesn't exist.
     */
    public function get_font_collection(string $slug)
    {
    }
    /**
     * Utility method to retrieve the main instance of the class.
     *
     * The instance will be created if it does not exist yet.
     *
     * @since 6.5.0
     *
     * @return WP_Font_Library The main instance.
     */
    public static function get_instance()
    {
    }
}