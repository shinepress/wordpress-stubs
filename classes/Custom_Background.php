<?php


/**
 * Generated stub declarations for WordPress.
 * @see https://wordpress.org
 * @see https://github.com/szepeviktor/wordpress-stubs
 */
/**
 * The custom background script.
 *
 * @package WordPress
 * @subpackage Administration
 */
/**
 * The custom background class.
 *
 * @since 3.0.0
 */
class Custom_Background
{
    /**
     * Callback for administration header.
     *
     * @var callable
     * @since 3.0.0
     */
    public $admin_header_callback;
    /**
     * Callback for header div.
     *
     * @var callable
     * @since 3.0.0
     */
    public $admin_image_div_callback;
    /**
     * Used to trigger a success message when settings updated and set to true.
     *
     * @since 3.0.0
     * @var bool
     */
    private $updated;
    /**
     * Constructor - Register administration header callback.
     *
     * @since 3.0.0
     * @param callable $admin_header_callback
     * @param callable $admin_image_div_callback Optional custom image div output callback.
     */
    public function __construct($admin_header_callback = '', $admin_image_div_callback = '')
    {
    }
    /**
     * Set up the hooks for the Custom Background admin page.
     *
     * @since 3.0.0
     */
    public function init()
    {
    }
    /**
     * Set up the enqueue for the CSS & JavaScript files.
     *
     * @since 3.0.0
     */
    public function admin_load()
    {
    }
    /**
     * Execute custom background modification.
     *
     * @since 3.0.0
     */
    public function take_action()
    {
    }
    /**
     * Display the custom background page.
     *
     * @since 3.0.0
     */
    public function admin_page()
    {
    }
    /**
     * Handle an Image upload for the background image.
     *
     * @since 3.0.0
     */
    public function handle_upload()
    {
    }
    /**
     * Ajax handler for adding custom background context to an attachment.
     *
     * Triggered when the user adds a new background image from the
     * Media Manager.
     *
     * @since 4.1.0
     */
    public function ajax_background_add()
    {
    }
    /**
     *
     * @since 3.4.0
     * @deprecated 3.5.0
     *
     * @param array $form_fields
     * @return array $form_fields
     */
    public function attachment_fields_to_edit($form_fields)
    {
    }
    /**
     *
     * @since 3.4.0
     * @deprecated 3.5.0
     *
     * @param array $tabs
     * @return array $tabs
     */
    public function filter_upload_tabs($tabs)
    {
    }
    /**
     *
     * @since 3.4.0
     * @deprecated 3.5.0
     */
    public function wp_set_background_image()
    {
    }
}