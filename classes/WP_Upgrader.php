<?php


/**
 * Core class used for upgrading/installing a local set of files via
 * the Filesystem Abstraction classes from a Zip file.
 *
 * @since 2.8.0
 */
class WP_Upgrader
{
    /**
     * The error/notification strings used to update the user on the progress.
     *
     * @since 2.8.0
     * @var array $strings
     */
    public $strings = array();
    /**
     * The upgrader skin being used.
     *
     * @since 2.8.0
     * @var Automatic_Upgrader_Skin|WP_Upgrader_Skin $skin
     */
    public $skin = \null;
    /**
     * The result of the installation.
     *
     * This is set by WP_Upgrader::install_package(), only when the package is installed
     * successfully. It will then be an array, unless a WP_Error is returned by the
     * {@see 'upgrader_post_install'} filter. In that case, the WP_Error will be assigned to
     * it.
     *
     * @since 2.8.0
     *
     * @var WP_Error|array $result {
     *      @type string $source             The full path to the source the files were installed from.
     *      @type string $source_files       List of all the files in the source directory.
     *      @type string $destination        The full path to the installation destination folder.
     *      @type string $destination_name   The name of the destination folder, or empty if `$destination`
     *                                       and `$local_destination` are the same.
     *      @type string $local_destination  The full local path to the destination folder. This is usually
     *                                       the same as `$destination`.
     *      @type string $remote_destination The full remote path to the destination folder
     *                                       (i.e., from `$wp_filesystem`).
     *      @type bool   $clear_destination  Whether the destination folder was cleared.
     * }
     */
    public $result = array();
    /**
     * The total number of updates being performed.
     *
     * Set by the bulk update methods.
     *
     * @since 3.0.0
     * @var int $update_count
     */
    public $update_count = 0;
    /**
     * The current update if multiple updates are being performed.
     *
     * Used by the bulk update methods, and incremented for each update.
     *
     * @since 3.0.0
     * @var int
     */
    public $update_current = 0;
    /**
     * Construct the upgrader with a skin.
     *
     * @since 2.8.0
     *
     * @param WP_Upgrader_Skin $skin The upgrader skin to use. Default is a WP_Upgrader_Skin.
     *                               instance.
     */
    public function __construct($skin = \null)
    {
    }
    /**
     * Initialize the upgrader.
     *
     * This will set the relationship between the skin being used and this upgrader,
     * and also add the generic strings to `WP_Upgrader::$strings`.
     *
     * @since 2.8.0
     */
    public function init()
    {
    }
    /**
     * Add the generic strings to WP_Upgrader::$strings.
     *
     * @since 2.8.0
     */
    public function generic_strings()
    {
    }
    /**
     * Connect to the filesystem.
     *
     * @since 2.8.0
     *
     * @global WP_Filesystem_Base $wp_filesystem Subclass
     *
     * @param array $directories                  Optional. A list of directories. If any of these do
     *                                            not exist, a WP_Error object will be returned.
     *                                            Default empty array.
     * @param bool  $allow_relaxed_file_ownership Whether to allow relaxed file ownership.
     *                                            Default false.
     * @return bool|WP_Error True if able to connect, false or a WP_Error otherwise.
     */
    public function fs_connect($directories = array(), $allow_relaxed_file_ownership = \false)
    {
    }
    //end fs_connect();
    /**
     * Download a package.
     *
     * @since 2.8.0
     *
     * @param string $package The URI of the package. If this is the full path to an
     *                        existing local file, it will be returned untouched.
     * @return string|WP_Error The full path to the downloaded package file, or a WP_Error object.
     */
    public function download_package($package)
    {
    }
    /**
     * Unpack a compressed package file.
     *
     * @since 2.8.0
     *
     * @global WP_Filesystem_Base $wp_filesystem Subclass
     *
     * @param string $package        Full path to the package file.
     * @param bool   $delete_package Optional. Whether to delete the package file after attempting
     *                               to unpack it. Default true.
     * @return string|WP_Error The path to the unpacked contents, or a WP_Error on failure.
     */
    public function unpack_package($package, $delete_package = \true)
    {
    }
    /**
     * Flatten the results of WP_Filesystem::dirlist() for iterating over.
     *
     * @since 4.9.0
     * @access protected
     *
     * @param  array  $nested_files  Array of files as returned by WP_Filesystem::dirlist()
     * @param  string $path          Relative path to prepend to child nodes. Optional.
     * @return array $files A flattened array of the $nested_files specified.
     */
    protected function flatten_dirlist($nested_files, $path = '')
    {
    }
    /**
     * Clears the directory where this item is going to be installed into.
     *
     * @since 4.3.0
     *
     * @global WP_Filesystem_Base $wp_filesystem Subclass
     *
     * @param string $remote_destination The location on the remote filesystem to be cleared
     * @return bool|WP_Error True upon success, WP_Error on failure.
     */
    public function clear_destination($remote_destination)
    {
    }
    /**
     * Install a package.
     *
     * Copies the contents of a package form a source directory, and installs them in
     * a destination directory. Optionally removes the source. It can also optionally
     * clear out the destination folder if it already exists.
     *
     * @since 2.8.0
     *
     * @global WP_Filesystem_Base $wp_filesystem Subclass
     * @global array              $wp_theme_directories
     *
     * @param array|string $args {
     *     Optional. Array or string of arguments for installing a package. Default empty array.
     *
     *     @type string $source                      Required path to the package source. Default empty.
     *     @type string $destination                 Required path to a folder to install the package in.
     *                                               Default empty.
     *     @type bool   $clear_destination           Whether to delete any files already in the destination
     *                                               folder. Default false.
     *     @type bool   $clear_working               Whether to delete the files form the working directory
     *                                               after copying to the destination. Default false.
     *     @type bool   $abort_if_destination_exists Whether to abort the installation if
     *                                               the destination folder already exists. Default true.
     *     @type array  $hook_extra                  Extra arguments to pass to the filter hooks called by
     *                                               WP_Upgrader::install_package(). Default empty array.
     * }
     *
     * @return array|WP_Error The result (also stored in `WP_Upgrader::$result`), or a WP_Error on failure.
     * @phpstan-param array{
     *   source?: string,
     *   destination?: string,
     *   clear_destination?: bool,
     *   clear_working?: bool,
     *   abort_if_destination_exists?: bool,
     *   hook_extra?: array,
     * } $args
     */
    public function install_package($args = array())
    {
    }
    /**
     * Run an upgrade/installation.
     *
     * Attempts to download the package (if it is not a local file), unpack it, and
     * install it in the destination folder.
     *
     * @since 2.8.0
     *
     * @param array $options {
     *     Array or string of arguments for upgrading/installing a package.
     *
     *     @type string $package                     The full path or URI of the package to install.
     *                                               Default empty.
     *     @type string $destination                 The full path to the destination folder.
     *                                               Default empty.
     *     @type bool   $clear_destination           Whether to delete any files already in the
     *                                               destination folder. Default false.
     *     @type bool   $clear_working               Whether to delete the files form the working
     *                                               directory after copying to the destination.
     *                                               Default false.
     *     @type bool   $abort_if_destination_exists Whether to abort the installation if the destination
     *                                               folder already exists. When true, `$clear_destination`
     *                                               should be false. Default true.
     *     @type bool   $is_multi                    Whether this run is one of multiple upgrade/installation
     *                                               actions being performed in bulk. When true, the skin
     *                                               WP_Upgrader::header() and WP_Upgrader::footer()
     *                                               aren't called. Default false.
     *     @type array  $hook_extra                  Extra arguments to pass to the filter hooks called by
     *                                               WP_Upgrader::run().
     * }
     * @return array|false|WP_error The result from self::install_package() on success, otherwise a WP_Error,
     *                              or false if unable to connect to the filesystem.
     * @phpstan-param array{
     *   package?: string,
     *   destination?: string,
     *   clear_destination?: bool,
     *   clear_working?: bool,
     *   abort_if_destination_exists?: bool,
     *   is_multi?: bool,
     *   hook_extra?: array,
     * } $options
     */
    public function run($options)
    {
    }
    /**
     * Toggle maintenance mode for the site.
     *
     * Creates/deletes the maintenance file to enable/disable maintenance mode.
     *
     * @since 2.8.0
     *
     * @global WP_Filesystem_Base $wp_filesystem Subclass
     *
     * @param bool $enable True to enable maintenance mode, false to disable.
     */
    public function maintenance_mode($enable = \false)
    {
    }
    /**
     * Creates a lock using WordPress options.
     *
     * @since 4.5.0
     * @static
     *
     * @param string $lock_name       The name of this unique lock.
     * @param int    $release_timeout Optional. The duration in seconds to respect an existing lock.
     *                                Default: 1 hour.
     * @return bool False if a lock couldn't be created or if the lock is still valid. True otherwise.
     */
    public static function create_lock($lock_name, $release_timeout = \null)
    {
    }
    /**
     * Releases an upgrader lock.
     *
     * @since 4.5.0
     * @static
     *
     * @see WP_Upgrader::create_lock()
     *
     * @param string $lock_name The name of this unique lock.
     * @return bool True if the lock was successfully released. False on failure.
     */
    public static function release_lock($lock_name)
    {
    }
}