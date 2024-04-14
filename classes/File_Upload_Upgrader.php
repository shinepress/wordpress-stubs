<?php


/**
 * Upgrade API: File_Upload_Upgrader class
 *
 * @package WordPress
 * @subpackage Upgrader
 * @since 4.6.0
 */
/**
 * Core class used for handling file uploads.
 *
 * This class handles the upload process and passes it as if it's a local file
 * to the Upgrade/Installer functions.
 *
 * @since 2.8.0
 * @since 4.6.0 Moved to its own file from wp-admin/includes/class-wp-upgrader.php.
 */
#[\AllowDynamicProperties]
class File_Upload_Upgrader
{
    /**
     * The full path to the file package.
     *
     * @since 2.8.0
     * @var string $package
     */
    public $package;
    /**
     * The name of the file.
     *
     * @since 2.8.0
     * @var string $filename
     */
    public $filename;
    /**
     * The ID of the attachment post for this file.
     *
     * @since 3.3.0
     * @var int $id
     */
    public $id = 0;
    /**
     * Construct the upgrader for a form.
     *
     * @since 2.8.0
     *
     * @param string $form      The name of the form the file was uploaded from.
     * @param string $urlholder The name of the `GET` parameter that holds the filename.
     */
    public function __construct($form, $urlholder)
    {
    }
    /**
     * Delete the attachment/uploaded file.
     *
     * @since 3.2.2
     *
     * @return bool Whether the cleanup was successful.
     */
    public function cleanup()
    {
    }
}