<?php


/**
 * Administration API: WP_Internal_Pointers class
 *
 * @package WordPress
 * @subpackage Administration
 * @since 4.4.0
 */
/**
 * Core class used to implement an internal admin pointers API.
 *
 * @since 3.3.0
 */
final class WP_Internal_Pointers
{
    /**
     * Initializes the new feature pointers.
     *
     * @since 3.3.0
     *
     * All pointers can be disabled using the following:
     *     remove_action( 'admin_enqueue_scripts', array( 'WP_Internal_Pointers', 'enqueue_scripts' ) );
     *
     * Individual pointers (e.g. wp390_widgets) can be disabled using the following:
     *     remove_action( 'admin_print_footer_scripts', array( 'WP_Internal_Pointers', 'pointer_wp390_widgets' ) );
     *
     * @static
     *
     * @param string $hook_suffix The current admin page.
     */
    public static function enqueue_scripts($hook_suffix)
    {
    }
    public static function pointer_wp330_toolbar()
    {
    }
    public static function pointer_wp330_media_uploader()
    {
    }
    public static function pointer_wp330_saving_widgets()
    {
    }
    public static function pointer_wp340_customize_current_theme_link()
    {
    }
    public static function pointer_wp340_choose_image_from_library()
    {
    }
    public static function pointer_wp350_media()
    {
    }
    public static function pointer_wp360_revisions()
    {
    }
    public static function pointer_wp360_locks()
    {
    }
    public static function pointer_wp390_widgets()
    {
    }
    public static function pointer_wp410_dfw()
    {
    }
    /**
     * Display a pointer for the new privacy tools.
     *
     * @since 4.9.6
     */
    public static function pointer_wp496_privacy()
    {
    }
    /**
     * Prevents new users from seeing existing 'new feature' pointers.
     *
     * @since 3.3.0
     *
     * @static
     *
     * @param int $user_id User ID.
     */
    public static function dismiss_pointers_for_new_users($user_id)
    {
    }
}