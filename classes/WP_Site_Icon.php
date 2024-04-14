<?php


/**
 * Administration API: WP_Site_Icon class
 *
 * @package WordPress
 * @subpackage Administration
 * @since 4.3.0
 */
/**
 * Core class used to implement site icon functionality.
 *
 * @since 4.3.0
 */
class WP_Site_Icon
{
    /**
     * The minimum size of the site icon.
     *
     * @since 4.3.0
     * @var int
     */
    public $min_size = 512;
    /**
     * The size to which to crop the image so that we can display it in the UI nicely.
     *
     * @since 4.3.0
     * @var int
     */
    public $page_crop = 512;
    /**
     * List of site icon sizes.
     *
     * @since 4.3.0
     * @var int[]
     */
    public $site_icon_sizes = array(
        /*
         * Square, medium sized tiles for IE11+.
         *
         * See https://msdn.microsoft.com/library/dn455106(v=vs.85).aspx
         */
        270,
        /*
         * App icon for Android/Chrome.
         *
         * @link https://developers.google.com/web/updates/2014/11/Support-for-theme-color-in-Chrome-39-for-Android
         * @link https://developer.chrome.com/multidevice/android/installtohomescreen
         */
        192,
        /*
         * App icons up to iPhone 6 Plus.
         *
         * See https://developer.apple.com/library/prerelease/ios/documentation/UserExperience/Conceptual/MobileHIG/IconMatrix.html
         */
        180,
        // Our regular Favicon.
        32,
    );
    /**
     * Registers actions and filters.
     *
     * @since 4.3.0
     */
    public function __construct()
    {
    }
    /**
     * Creates an attachment 'object'.
     *
     * @since 4.3.0
     *
     * @param string $cropped              Cropped image URL.
     * @param int    $parent_attachment_id Attachment ID of parent image.
     * @return array Attachment object.
     */
    public function create_attachment_object($cropped, $parent_attachment_id)
    {
    }
    /**
     * Inserts an attachment.
     *
     * @since 4.3.0
     *
     * @param array  $object Attachment object.
     * @param string $file   File path of the attached image.
     * @return int           Attachment ID
     */
    public function insert_attachment($object, $file)
    {
    }
    /**
     * Adds additional sizes to be made when creating the site icon images.
     *
     * @since 4.3.0
     *
     * @param array[] $sizes Array of arrays containing information for additional sizes.
     * @return array[] Array of arrays containing additional image sizes.
     */
    public function additional_sizes($sizes = array())
    {
    }
    /**
     * Adds Site Icon sizes to the array of image sizes on demand.
     *
     * @since 4.3.0
     *
     * @param string[] $sizes Array of image size names.
     * @return string[] Array of image size names.
     */
    public function intermediate_image_sizes($sizes = array())
    {
    }
    /**
     * Deletes the Site Icon when the image file is deleted.
     *
     * @since 4.3.0
     *
     * @param int $post_id Attachment ID.
     */
    public function delete_attachment_data($post_id)
    {
    }
    /**
     * Adds custom image sizes when meta data for an image is requested, that happens to be used as Site Icon.
     *
     * @since 4.3.0
     *
     * @param null|array|string $value    The value get_metadata() should return a single metadata value, or an
     *                                    array of values.
     * @param int               $post_id  Post ID.
     * @param string            $meta_key Meta key.
     * @param string|array      $single   Meta value, or an array of values.
     * @return array|null|string The attachment metadata value, array of values, or null.
     */
    public function get_post_metadata($value, $post_id, $meta_key, $single)
    {
    }
}