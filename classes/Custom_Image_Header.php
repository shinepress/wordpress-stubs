<?php


/**
 * The custom header image class.
 *
 * @since 2.1.0
 */
#[\AllowDynamicProperties]
class Custom_Image_Header
{
    /**
     * Callback for administration header.
     *
     * @since 2.1.0
     * @var callable
     */
    public $admin_header_callback;
    /**
     * Callback for header div.
     *
     * @since 3.0.0
     * @var callable
     */
    public $admin_image_div_callback;
    /**
     * Holds default headers.
     *
     * @since 3.0.0
     * @var array
     */
    public $default_headers = array();
    /**
     * Constructor - Registers administration header callback.
     *
     * @since 2.1.0
     *
     * @param callable $admin_header_callback    Administration header callback.
     * @param callable $admin_image_div_callback Optional. Custom image div output callback.
     *                                           Default empty string.
     */
    public function __construct($admin_header_callback, $admin_image_div_callback = '')
    {
    }
    /**
     * Sets up the hooks for the Custom Header admin page.
     *
     * @since 2.1.0
     * @phpstan-return void
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
     * Gets the current step.
     *
     * @since 2.6.0
     *
     * @return int Current step.
     */
    public function step()
    {
    }
    /**
     * Sets up the enqueue for the JavaScript files.
     *
     * @since 2.1.0
     */
    public function js_includes()
    {
    }
    /**
     * Sets up the enqueue for the CSS files.
     *
     * @since 2.7.0
     */
    public function css_includes()
    {
    }
    /**
     * Executes custom header modification.
     *
     * @since 2.6.0
     * @phpstan-return void
     */
    public function take_action()
    {
    }
    /**
     * Processes the default headers.
     *
     * @since 3.0.0
     *
     * @global array $_wp_default_headers
     * @phpstan-return void
     */
    public function process_default_headers()
    {
    }
    /**
     * Displays UI for selecting one of several default headers.
     *
     * Shows the random image option if this theme has multiple header images.
     * Random image option is on by default if no header has been set.
     *
     * @since 3.0.0
     *
     * @param string $type The header type. One of 'default' (for the Uploaded Images control)
     *                     or 'uploaded' (for the Uploaded Images control).
     * @phpstan-param 'default'|'uploaded' $type
     */
    public function show_header_selector($type = 'default')
    {
    }
    /**
     * Executes JavaScript depending on step.
     *
     * @since 2.1.0
     */
    public function js()
    {
    }
    /**
     * Displays JavaScript based on Step 1 and 3.
     *
     * @since 2.6.0
     */
    public function js_1()
    {
    }
    /**
     * Displays JavaScript based on Step 2.
     *
     * @since 2.6.0
     */
    public function js_2()
    {
    }
    /**
     * Displays first step of custom header image page.
     *
     * @since 2.1.0
     */
    public function step_1()
    {
    }
    /**
     * Displays second step of custom header image page.
     *
     * @since 2.1.0
     */
    public function step_2()
    {
    }
    /**
     * Uploads the file to be cropped in the second step.
     *
     * @since 3.4.0
     */
    public function step_2_manage_upload()
    {
    }
    /**
     * Displays third step of custom header image page.
     *
     * @since 2.1.0
     * @since 4.4.0 Switched to using wp_get_attachment_url() instead of the guid
     *              for retrieving the header image URL.
     */
    public function step_3()
    {
    }
    /**
     * Displays last step of custom header image page.
     *
     * @since 2.1.0
     */
    public function finished()
    {
    }
    /**
     * Displays the page based on the current step.
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
     * Chooses a header image, selected from existing uploaded and default headers,
     * or provides an array of uploaded header data (either new, or from media library).
     *
     * @since 3.4.0
     *
     * @param mixed $choice Which header image to select. Allows for values of 'random-default-image',
     *                      for randomly cycling among the default images; 'random-uploaded-image',
     *                      for randomly cycling among the uploaded images; the key of a default image
     *                      registered for that theme; and the key of an image uploaded for that theme
     *                      (the attachment ID of the image). Or an array of arguments: attachment_id,
     *                      url, width, height. All are required.
     * @phpstan-param string|array{attachment_id: int<1, max>, url: string, width: int<0, max>, height: int<0, max>} $choice
     * @phpstan-return void
     */
    final public function set_header_image($choice)
    {
    }
    /**
     * Removes a header image.
     *
     * @since 3.4.0
     */
    final public function remove_header_image()
    {
    }
    /**
     * Resets a header image to the default image for the theme.
     *
     * This method does not do anything if the theme does not have a default header image.
     *
     * @since 3.4.0
     * @phpstan-return void
     */
    final public function reset_header_image()
    {
    }
    /**
     * Calculates width and height based on what the currently selected theme supports.
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
     * Creates an attachment 'object'.
     *
     * @since 3.9.0
     * @deprecated 6.5.0
     *
     * @param string $cropped              Cropped image URL.
     * @param int    $parent_attachment_id Attachment ID of parent image.
     * @return array An array with attachment object data.
     */
    final public function create_attachment_object($cropped, $parent_attachment_id)
    {
    }
    /**
     * Inserts an attachment and its metadata.
     *
     * @since 3.9.0
     *
     * @param array  $attachment An array with attachment object data.
     * @param string $cropped    File path to cropped image.
     * @return int Attachment ID.
     */
    final public function insert_attachment($attachment, $cropped)
    {
    }
    /**
     * Gets attachment uploaded by Media Manager, crops it, then saves it as a
     * new object. Returns JSON-encoded object details.
     *
     * @since 3.9.0
     * @phpstan-return never
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
     * @phpstan-return never
     */
    public function ajax_header_add()
    {
    }
    /**
     * Given an attachment ID for a header image, unsets it as a user-uploaded
     * header image for the active theme.
     *
     * Triggered when the user clicks the overlay "X" button next to each image
     * choice in the Customizer's Header tool.
     *
     * @since 3.9.0
     * @phpstan-return never
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
     * @phpstan-return void
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
     * Gets the ID of a previous crop from the same base image.
     *
     * @since 4.9.0
     *
     * @param array $attachment An array with a cropped attachment object data.
     * @return int|false An attachment ID if one exists. False if none.
     */
    public function get_previous_crop($attachment)
    {
    }
}