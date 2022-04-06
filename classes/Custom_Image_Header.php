<?php


/**
 * The custom header image script.
 *
 * @package WordPress
 * @subpackage Administration
 */
/**
 * The custom header image class.
 *
 * @since 2.1.0
 */
class Custom_Image_Header
{
    /**
     * Callback for administration header.
     *
     * @var callable
     * @since 2.1.0
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
     * Holds default headers.
     *
     * @var array
     * @since 3.0.0
     */
    public $default_headers = array();
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
     * @since 2.1.0
     * @param callable $admin_header_callback
     * @param callable $admin_image_div_callback Optional custom image div output callback.
     */
    public function __construct($admin_header_callback, $admin_image_div_callback = '')
    {
    }
    /**
     * Set up the hooks for the Custom Header admin page.
     *
     * @since 2.1.0
     */
    public function init()
    {
    }
    /**
     * Adds contextual help.
     *
     * @since 3.0.0
     */
    public function help()
    {
    }
    /**
     * Get the current step.
     *
     * @since 2.6.0
     *
     * @return int Current step.
     */
    public function step()
    {
    }
    /**
     * Set up the enqueue for the JavaScript files.
     *
     * @since 2.1.0
     */
    public function js_includes()
    {
    }
    /**
     * Set up the enqueue for the CSS files
     *
     * @since 2.7.0
     */
    public function css_includes()
    {
    }
    /**
     * Execute custom header modification.
     *
     * @since 2.6.0
     */
    public function take_action()
    {
    }
    /**
     * Process the default headers
     *
     * @since 3.0.0
     *
     * @global array $_wp_default_headers
     */
    public function process_default_headers()
    {
    }
    /**
     * Display UI for selecting one of several default headers.
     *
     * Show the random image option if this theme has multiple header images.
     * Random image option is on by default if no header has been set.
     *
     * @since 3.0.0
     *
     * @param string $type The header type. One of 'default' (for the Uploaded Images control)
     *                     or 'uploaded' (for the Uploaded Images control).
     */
    public function show_header_selector($type = 'default')
    {
    }
    /**
     * Execute JavaScript depending on step.
     *
     * @since 2.1.0
     */
    public function js()
    {
    }
    /**
     * Display JavaScript based on Step 1 and 3.
     *
     * @since 2.6.0
     */
    public function js_1()
    {
    }
    /**
     * Display JavaScript based on Step 2.
     *
     * @since 2.6.0
     */
    public function js_2()
    {
    }
    /**
     * Display first step of custom header image page.
     *
     * @since 2.1.0
     */
    public function step_1()
    {
    }
    /**
     * Display second step of custom header image page.
     *
     * @since 2.1.0
     */
    public function step_2()
    {
    }
    /**
     * Upload the file to be cropped in the second step.
     *
     * @since 3.4.0
     */
    public function step_2_manage_upload()
    {
    }
    /**
     * Display third step of custom header image page.
     *
     * @since 2.1.0
     * @since 4.4.0 Switched to using wp_get_attachment_url() instead of the guid
     *              for retrieving the header image URL.
     */
    public function step_3()
    {
    }
    /**
     * Display last step of custom header image page.
     *
     * @since 2.1.0
     */
    public function finished()
    {
    }
    /**
     * Display the page based on the current step.
     *
     * @since 2.1.0
     */
    public function admin_page()
    {
    }
    /**
     * Unused since 3.5.0.
     *
     * @since 3.4.0
     *
     * @param array $form_fields
     * @return array $form_fields
     */
    public function attachment_fields_to_edit($form_fields)
    {
    }
    /**
     * Unused since 3.5.0.
     *
     * @since 3.4.0
     *
     * @param array $tabs
     * @return array $tabs
     */
    public function filter_upload_tabs($tabs)
    {
    }
    /**
     * Choose a header image, selected from existing uploaded and default headers,
     * or provide an array of uploaded header data (either new, or from media library).
     *
     * @since 3.4.0
     *
     * @param mixed $choice Which header image to select. Allows for values of 'random-default-image',
     *  for randomly cycling among the default images; 'random-uploaded-image', for randomly cycling
     *  among the uploaded images; the key of a default image registered for that theme; and
     *  the key of an image uploaded for that theme (the attachment ID of the image).
     *  Or an array of arguments: attachment_id, url, width, height. All are required.
     */
    final public function set_header_image($choice)
    {
    }
    /**
     * Remove a header image.
     *
     * @since 3.4.0
     */
    final public function remove_header_image()
    {
    }
    /**
     * Reset a header image to the default image for the theme.
     *
     * This method does not do anything if the theme does not have a default header image.
     *
     * @since 3.4.0
     */
    final public function reset_header_image()
    {
    }
    /**
     * Calculate width and height based on what the currently selected theme supports.
     *
     * @since 3.9.0
     *
     * @param array $dimensions
     * @return array dst_height and dst_width of header image.
     */
    final public function get_header_dimensions($dimensions)
    {
    }
    /**
     * Create an attachment 'object'.
     *
     * @since 3.9.0
     *
     * @param string $cropped              Cropped image URL.
     * @param int    $parent_attachment_id Attachment ID of parent image.
     * @return array Attachment object.
     */
    final public function create_attachment_object($cropped, $parent_attachment_id)
    {
    }
    /**
     * Insert an attachment and its metadata.
     *
     * @since 3.9.0
     *
     * @param array  $object  Attachment object.
     * @param string $cropped File path to cropped image.
     * @return int Attachment ID.
     */
    final public function insert_attachment($object, $cropped)
    {
    }
    /**
     * Gets attachment uploaded by Media Manager, crops it, then saves it as a
     * new object. Returns JSON-encoded object details.
     *
     * @since 3.9.0
     */
    public function ajax_header_crop()
    {
    }
    /**
     * Given an attachment ID for a header image, updates its "last used"
     * timestamp to now.
     *
     * Triggered when the user tries adds a new header image from the
     * Media Manager, even if s/he doesn't save that change.
     *
     * @since 3.9.0
     */
    public function ajax_header_add()
    {
    }
    /**
     * Given an attachment ID for a header image, unsets it as a user-uploaded
     * header image for the current theme.
     *
     * Triggered when the user clicks the overlay "X" button next to each image
     * choice in the Customizer's Header tool.
     *
     * @since 3.9.0
     */
    public function ajax_header_remove()
    {
    }
    /**
     * Updates the last-used postmeta on a header image attachment after saving a new header image via the Customizer.
     *
     * @since 3.9.0
     *
     * @param WP_Customize_Manager $wp_customize Customize manager.
     */
    public function customize_set_last_used($wp_customize)
    {
    }
    /**
     * Gets the details of default header images if defined.
     *
     * @since 3.9.0
     *
     * @return array Default header images.
     */
    public function get_default_header_images()
    {
    }
    /**
     * Gets the previously uploaded header images.
     *
     * @since 3.9.0
     *
     * @return array Uploaded header images.
     */
    public function get_uploaded_header_images()
    {
    }
    /**
     * Get the ID of a previous crop from the same base image.
     *
     * @since 4.9.0
     *
     * @param array $object A crop attachment object.
     * @return int|false An attachment ID if one exists. False if none.
     */
    public function get_previous_crop($object)
    {
    }
}