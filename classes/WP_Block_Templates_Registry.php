<?php


/**
 * Core class used for interacting with templates.
 *
 * @since 6.7.0
 */
final class WP_Block_Templates_Registry
{
    /**
     * Registers a template.
     *
     * @since 6.7.0
     *
     * @param string $template_name Template name including namespace.
     * @param array  $args          Optional. Array of template arguments.
     * @return WP_Block_Template|WP_Error The registered template on success, or WP_Error on failure.
     */
    public function register($template_name, $args = array())
    {
    }
    /**
     * Retrieves all registered templates.
     *
     * @since 6.7.0
     *
     * @return WP_Block_Template[] Associative array of `$template_name => $template` pairs.
     */
    public function get_all_registered()
    {
    }
    /**
     * Retrieves a registered template by its name.
     *
     * @since 6.7.0
     *
     * @param string $template_name Template name including namespace.
     * @return WP_Block_Template|null The registered template, or null if it is not registered.
     */
    public function get_registered($template_name)
    {
    }
    /**
     * Retrieves a registered template by its slug.
     *
     * @since 6.7.0
     *
     * @param string $template_slug Slug of the template.
     * @return WP_Block_Template|null The registered template, or null if it is not registered.
     */
    public function get_by_slug($template_slug)
    {
    }
    /**
     * Retrieves registered templates matching a query.
     *
     * @since 6.7.0
     *
     * @param array  $query {
     *     Arguments to retrieve templates. Optional, empty by default.
     *
     *     @type string[] $slug__in     List of slugs to include.
     *     @type string[] $slug__not_in List of slugs to skip.
     *     @type string   $post_type    Post type to get the templates for.
     * }
     * @return WP_Block_Template[] Associative array of `$template_name => $template` pairs.
     * @phpstan-param array{
     *   slug__in?: string[],
     *   slug__not_in?: string[],
     *   post_type?: string,
     * } $query
     */
    public function get_by_query($query = array())
    {
    }
    /**
     * Checks if a template is registered.
     *
     * @since 6.7.0
     *
     * @param string $template_name Template name.
     * @return bool True if the template is registered, false otherwise.
     */
    public function is_registered($template_name)
    {
    }
    /**
     * Unregisters a template.
     *
     * @since 6.7.0
     *
     * @param string $template_name Template name including namespace.
     * @return WP_Block_Template|WP_Error The unregistered template on success, or WP_Error on failure.
     */
    public function unregister($template_name)
    {
    }
    /**
     * Utility method to retrieve the main instance of the class.
     *
     * The instance will be created if it does not exist yet.
     *
     * @since 6.7.0
     *
     * @return WP_Block_Templates_Registry The main instance.
     */
    public static function get_instance()
    {
    }
}