<?php


/**
 * WP_Privacy_Policy_Content class.
 *
 * @package WordPress
 * @subpackage Administration
 * @since 4.9.6
 */
final class WP_Privacy_Policy_Content
{
    private static $policy_content = array();
    /**
     * Constructor
     *
     * @since 4.9.6
     */
    private function __construct()
    {
    }
    /**
     * Add content to the postbox shown when editing the privacy policy.
     *
     * Plugins and themes should suggest text for inclusion in the site's privacy policy.
     * The suggested text should contain information about any functionality that affects user privacy,
     * and will be shown in the Suggested Privacy Policy Content postbox.
     *
     * Intended for use from `wp_add_privacy_policy_content()`.
     *
     * @since 4.9.6
     *
     * @param string $plugin_name The name of the plugin or theme that is suggesting content for the site's privacy policy.
     * @param string $policy_text The suggested content for inclusion in the policy.
     */
    public static function add($plugin_name, $policy_text)
    {
    }
    /**
     * Quick check if any privacy info has changed.
     *
     * @since 4.9.6
     */
    public static function text_change_check()
    {
    }
    /**
     * Output a warning when some privacy info has changed.
     *
     * @since 4.9.6
     *
     * @global WP_Post $post Global post object.
     */
    public static function policy_text_changed_notice()
    {
    }
    /**
     * Update the cached policy info when the policy page is updated.
     *
     * @since 4.9.6
     * @access private
     *
     * @param int $post_id The ID of the updated post.
     */
    public static function _policy_page_updated($post_id)
    {
    }
    /**
     * Check for updated, added or removed privacy policy information from plugins.
     *
     * Caches the current info in post_meta of the policy page.
     *
     * @since 4.9.6
     *
     * @return array The privacy policy text/information added by core and plugins.
     */
    public static function get_suggested_policy_text()
    {
    }
    /**
     * Add a notice with a link to the guide when editing the privacy policy page.
     *
     * @since 4.9.6
     * @since 5.0.0 The `$post` parameter was made optional.
     *
     * @global WP_Post $post Global post object.
     *
     * @param WP_Post|null $post The currently edited post. Default null.
     */
    public static function notice($post = \null)
    {
    }
    /**
     * Output the privacy policy guide together with content from the theme and plugins.
     *
     * @since 4.9.6
     */
    public static function privacy_policy_guide()
    {
    }
    /**
     * Return the default suggested privacy policy content.
     *
     * @since 4.9.6
     * @since 5.0.0 Added the `$blocks` parameter.
     *
     * @param bool $description Whether to include the descriptions under the section headings. Default false.
     * @param bool $blocks      Whether to format the content for the block editor. Default true.
     * @return string The default policy content.
     */
    public static function get_default_content($description = \false, $blocks = \true)
    {
    }
    /**
     * Add the suggested privacy policy text to the policy postbox.
     *
     * @since 4.9.6
     */
    public static function add_suggested_content()
    {
    }
}