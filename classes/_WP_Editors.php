<?php


/**
 * Facilitates adding of the WordPress editor as used on the Write and Edit screens.
 *
 * @package WordPress
 * @since 3.3.0
 *
 * Private, not included by default. See wp_editor() in wp-includes/general-template.php.
 */
final class _WP_Editors
{
    public static $mce_locale;
    private static $mce_settings = array();
    private static $qt_settings = array();
    private static $plugins = array();
    private static $qt_buttons = array();
    private static $ext_plugins;
    private static $baseurl;
    private static $first_init;
    private static $this_tinymce = \false;
    private static $this_quicktags = \false;
    private static $has_tinymce = \false;
    private static $has_quicktags = \false;
    private static $has_medialib = \false;
    private static $editor_buttons_css = \true;
    private static $drag_drop_upload = \false;
    private static $old_dfw_compat = \false;
    private static $translation;
    private static $tinymce_scripts_printed = \false;
    private static $link_dialog_printed = \false;
    private function __construct()
    {
    }
    /**
     * Parse default arguments for the editor instance.
     *
     * @static
     * @param string $editor_id ID for the current editor instance.
     * @param array  $settings {
     *     Array of editor arguments.
     *
     *     @type bool       $wpautop           Whether to use wpautop(). Default true.
     *     @type bool       $media_buttons     Whether to show the Add Media/other media buttons.
     *     @type string     $default_editor    When both TinyMCE and Quicktags are used, set which
     *                                         editor is shown on page load. Default empty.
     *     @type bool       $drag_drop_upload  Whether to enable drag & drop on the editor uploading. Default false.
     *                                         Requires the media modal.
     *     @type string     $textarea_name     Give the textarea a unique name here. Square brackets
     *                                         can be used here. Default $editor_id.
     *     @type int        $textarea_rows     Number rows in the editor textarea. Default 20.
     *     @type string|int $tabindex          Tabindex value to use. Default empty.
     *     @type string     $tabfocus_elements The previous and next element ID to move the focus to
     *                                         when pressing the Tab key in TinyMCE. Default ':prev,:next'.
     *     @type string     $editor_css        Intended for extra styles for both Visual and Text editors.
     *                                         Should include `<style>` tags, and can use "scoped". Default empty.
     *     @type string     $editor_class      Extra classes to add to the editor textarea element. Default empty.
     *     @type bool       $teeny             Whether to output the minimal editor config. Examples include
     *                                         Press This and the Comment editor. Default false.
     *     @type bool       $dfw               Deprecated in 4.1. Since 4.3 used only to enqueue wp-fullscreen-stub.js
     *                                         for backward compatibility.
     *     @type bool|array $tinymce           Whether to load TinyMCE. Can be used to pass settings directly to
     *                                         TinyMCE using an array. Default true.
     *     @type bool|array $quicktags         Whether to load Quicktags. Can be used to pass settings directly to
     *                                         Quicktags using an array. Default true.
     * }
     * @return array Parsed arguments array.
     * @phpstan-param array{
     *   wpautop?: bool,
     *   media_buttons?: bool,
     *   default_editor?: string,
     *   drag_drop_upload?: bool,
     *   textarea_name?: string,
     *   textarea_rows?: int,
     *   tabindex?: string|int,
     *   tabfocus_elements?: string,
     *   editor_css?: string,
     *   editor_class?: string,
     *   teeny?: bool,
     *   dfw?: bool,
     *   tinymce?: bool|array,
     *   quicktags?: bool|array,
     * } $settings
     */
    public static function parse_settings($editor_id, $settings)
    {
    }
    /**
     * Outputs the HTML for a single instance of the editor.
     *
     * @static
     * @param string $content The initial content of the editor.
     * @param string $editor_id ID for the textarea and TinyMCE and Quicktags instances (can contain only ASCII letters and numbers).
     * @param array $settings See the _parse_settings() method for description.
     */
    public static function editor($content, $editor_id, $settings = array())
    {
    }
    /**
     * @static
     *
     * @global string $tinymce_version
     *
     * @param string $editor_id
     * @param array  $set
     */
    public static function editor_settings($editor_id, $set)
    {
    }
    /**
     *
     * @static
     * @param array $init
     * @return string
     */
    private static function _parse_init($init)
    {
    }
    /**
     *
     * @static
     */
    public static function enqueue_scripts($default_scripts = \false)
    {
    }
    /**
     * Enqueue all editor scripts.
     * For use when the editor is going to be initialized after page load.
     *
     * @since 4.8.0
     */
    public static function enqueue_default_editor()
    {
    }
    /**
     * Print (output) all editor scripts and default settings.
     * For use when the editor is going to be initialized after page load.
     *
     * @since 4.8.0
     *
     */
    public static function print_default_editor_scripts()
    {
    }
    public static function get_mce_locale()
    {
    }
    public static function get_baseurl()
    {
    }
    /**
     * Returns the default TinyMCE settings.
     * Doesn't include plugins, buttons, editor selector.
     *
     * @return array
     */
    private static function default_settings()
    {
    }
    private static function get_translation()
    {
    }
    /**
     * Translates the default TinyMCE strings and returns them as JSON encoded object ready to be loaded with tinymce.addI18n(),
     * or as JS snippet that should run after tinymce.js is loaded.
     *
     * @static
     * @param string $mce_locale The locale used for the editor.
     * @param bool $json_only optional Whether to include the JavaScript calls to tinymce.addI18n() and tinymce.ScriptLoader.markDone().
     * @return string Translation object, JSON encoded.
     */
    public static function wp_mce_translation($mce_locale = '', $json_only = \false)
    {
    }
    /**
     * Print (output) the main TinyMCE scripts.
     *
     * @since 4.8
     *
     * @static
     * @global string $tinymce_version
     * @global bool   $concatenate_scripts
     * @global bool   $compress_scripts
     */
    public static function print_tinymce_scripts()
    {
    }
    /**
     * Print (output) the TinyMCE configuration and initialization scripts.
     *
     * @static
     */
    public static function editor_js()
    {
    }
    /**
     *
     * @static
     * @global int $content_width
     */
    public static function wp_fullscreen_html()
    {
    }
    /**
     * Performs post queries for internal linking.
     *
     * @since 3.1.0
     *
     * @static
     * @param array $args Optional. Accepts 'pagenum' and 's' (search) arguments.
     * @return false|array Results.
     */
    public static function wp_link_query($args = array())
    {
    }
    /**
     * Dialog for internal linking.
     *
     * @since 3.1.0
     *
     * @static
     */
    public static function wp_link_dialog()
    {
    }
}