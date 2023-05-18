<?php


/**
 * WordPress Direct Filesystem.
 *
 * @package WordPress
 * @subpackage Filesystem
 */
/**
 * WordPress Filesystem Class for direct PHP file and folder manipulation.
 *
 * @since 2.5.0
 *
 * @see WP_Filesystem_Base
 */
class WP_Filesystem_Direct extends \WP_Filesystem_Base
{
    /**
     * Constructor.
     *
     * @since 2.5.0
     *
     * @param mixed $arg Not used.
     */
    public function __construct($arg)
    {
    }
    /**
     * Reads entire file into a string.
     *
     * @since 2.5.0
     *
     * @param string $file Name of the file to read.
     * @return string|false Read data on success, false on failure.
     */
    public function get_contents($file)
    {
    }
    /**
     * Reads entire file into an array.
     *
     * @since 2.5.0
     *
     * @param string $file Path to the file.
     * @return array|false File contents in an array on success, false on failure.
     */
    public function get_contents_array($file)
    {
    }
    /**
     * Writes a string to a file.
     *
     * @since 2.5.0
     *
     * @param string    $file     Remote path to the file where to write the data.
     * @param string    $contents The data to write.
     * @param int|false $mode     Optional. The file permissions as octal number, usually 0644.
     *                            Default false.
     * @return bool True on success, false on failure.
     */
    public function put_contents($file, $contents, $mode = \false)
    {
    }
    /**
     * Gets the current working directory.
     *
     * @since 2.5.0
     *
     * @return string|false The current working directory on success, false on failure.
     */
    public function cwd()
    {
    }
    /**
     * Changes current directory.
     *
     * @since 2.5.0
     *
     * @param string $dir The new current directory.
     * @return bool True on success, false on failure.
     */
    public function chdir($dir)
    {
    }
    /**
     * Changes the file group.
     *
     * @since 2.5.0
     *
     * @param string     $file      Path to the file.
     * @param string|int $group     A group name or number.
     * @param bool       $recursive Optional. If set to true, changes file group recursively.
     *                              Default false.
     * @return bool True on success, false on failure.
     */
    public function chgrp($file, $group, $recursive = \false)
    {
    }
    /**
     * Changes filesystem permissions.
     *
     * @since 2.5.0
     *
     * @param string    $file      Path to the file.
     * @param int|false $mode      Optional. The permissions as octal number, usually 0644 for files,
     *                             0755 for directories. Default false.
     * @param bool      $recursive Optional. If set to true, changes file permissions recursively.
     *                             Default false.
     * @return bool True on success, false on failure.
     */
    public function chmod($file, $mode = \false, $recursive = \false)
    {
    }
    /**
     * Changes the owner of a file or directory.
     *
     * @since 2.5.0
     *
     * @param string     $file      Path to the file or directory.
     * @param string|int $owner     A user name or number.
     * @param bool       $recursive Optional. If set to true, changes file owner recursively.
     *                              Default false.
     * @return bool True on success, false on failure.
     */
    public function chown($file, $owner, $recursive = \false)
    {
    }
    /**
     * Gets the file owner.
     *
     * @since 2.5.0
     *
     * @param string $file Path to the file.
     * @return string|false Username of the owner on success, false on failure.
     */
    public function owner($file)
    {
    }
    /**
     * Gets the permissions of the specified file or filepath in their octal format.
     *
     * FIXME does not handle errors in fileperms()
     *
     * @since 2.5.0
     *
     * @param string $file Path to the file.
     * @return string Mode of the file (the last 3 digits).
     */
    public function getchmod($file)
    {
    }
    /**
     * Gets the file's group.
     *
     * @since 2.5.0
     *
     * @param string $file Path to the file.
     * @return string|false The group on success, false on failure.
     */
    public function group($file)
    {
    }
    /**
     * Copies a file.
     *
     * @since 2.5.0
     *
     * @param string    $source      Path to the source file.
     * @param string    $destination Path to the destination file.
     * @param bool      $overwrite   Optional. Whether to overwrite the destination file if it exists.
     *                               Default false.
     * @param int|false $mode        Optional. The permissions as octal number, usually 0644 for files,
     *                               0755 for dirs. Default false.
     * @return bool True on success, false on failure.
     */
    public function copy($source, $destination, $overwrite = \false, $mode = \false)
    {
    }
    /**
     * Moves a file.
     *
     * @since 2.5.0
     *
     * @param string $source      Path to the source file.
     * @param string $destination Path to the destination file.
     * @param bool   $overwrite   Optional. Whether to overwrite the destination file if it exists.
     *                            Default false.
     * @return bool True on success, false on failure.
     */
    public function move($source, $destination, $overwrite = \false)
    {
    }
    /**
     * Deletes a file or directory.
     *
     * @since 2.5.0
     *
     * @param string       $file      Path to the file or directory.
     * @param bool         $recursive Optional. If set to true, deletes files and folders recursively.
     *                                Default false.
     * @param string|false $type      Type of resource. 'f' for file, 'd' for directory.
     *                                Default false.
     * @return bool True on success, false on failure.
     */
    public function delete($file, $recursive = \false, $type = \false)
    {
    }
    /**
     * Checks if a file or directory exists.
     *
     * @since 2.5.0
     *
     * @param string $file Path to file or directory.
     * @return bool Whether $file exists or not.
     */
    public function exists($file)
    {
    }
    /**
     * Checks if resource is a file.
     *
     * @since 2.5.0
     *
     * @param string $file File path.
     * @return bool Whether $file is a file.
     */
    public function is_file($file)
    {
    }
    /**
     * Checks if resource is a directory.
     *
     * @since 2.5.0
     *
     * @param string $path Directory path.
     * @return bool Whether $path is a directory.
     */
    public function is_dir($path)
    {
    }
    /**
     * Checks if a file is readable.
     *
     * @since 2.5.0
     *
     * @param string $file Path to file.
     * @return bool Whether $file is readable.
     */
    public function is_readable($file)
    {
    }
    /**
     * Checks if a file or directory is writable.
     *
     * @since 2.5.0
     *
     * @param string $file Path to file or directory.
     * @return bool Whether $file is writable.
     */
    public function is_writable($file)
    {
    }
    /**
     * Gets the file's last access time.
     *
     * @since 2.5.0
     *
     * @param string $file Path to file.
     * @return int|false Unix timestamp representing last access time, false on failure.
     */
    public function atime($file)
    {
    }
    /**
     * Gets the file modification time.
     *
     * @since 2.5.0
     *
     * @param string $file Path to file.
     * @return int|false Unix timestamp representing modification time, false on failure.
     */
    public function mtime($file)
    {
    }
    /**
     * Gets the file size (in bytes).
     *
     * @since 2.5.0
     *
     * @param string $file Path to file.
     * @return int|false Size of the file in bytes on success, false on failure.
     */
    public function size($file)
    {
    }
    /**
     * Sets the access and modification times of a file.
     *
     * Note: If $file doesn't exist, it will be created.
     *
     * @since 2.5.0
     *
     * @param string $file  Path to file.
     * @param int    $time  Optional. Modified time to set for file.
     *                      Default 0.
     * @param int    $atime Optional. Access time to set for file.
     *                      Default 0.
     * @return bool True on success, false on failure.
     */
    public function touch($file, $time = 0, $atime = 0)
    {
    }
    /**
     * Creates a directory.
     *
     * @since 2.5.0
     *
     * @param string           $path  Path for new directory.
     * @param int|false        $chmod Optional. The permissions as octal number (or false to skip chmod).
     *                                Default false.
     * @param string|int|false $chown Optional. A user name or number (or false to skip chown).
     *                                Default false.
     * @param string|int|false $chgrp Optional. A group name or number (or false to skip chgrp).
     *                                Default false.
     * @return bool True on success, false on failure.
     */
    public function mkdir($path, $chmod = \false, $chown = \false, $chgrp = \false)
    {
    }
    /**
     * Deletes a directory.
     *
     * @since 2.5.0
     *
     * @param string $path      Path to directory.
     * @param bool   $recursive Optional. Whether to recursively remove files/directories.
     *                          Default false.
     * @return bool True on success, false on failure.
     */
    public function rmdir($path, $recursive = \false)
    {
    }
    /**
     * Gets details for files in a directory or a specific file.
     *
     * @since 2.5.0
     *
     * @param string $path           Path to directory or file.
     * @param bool   $include_hidden Optional. Whether to include details of hidden ("." prefixed) files.
     *                               Default true.
     * @param bool   $recursive      Optional. Whether to recursively include file details in nested directories.
     *                               Default false.
     * @return array|false {
     *     Array of files. False if unable to list directory contents.
     *
     *     @type string $name        Name of the file or directory.
     *     @type string $perms       *nix representation of permissions.
     *     @type string $permsn      Octal representation of permissions.
     *     @type string $owner       Owner name or ID.
     *     @type int    $size        Size of file in bytes.
     *     @type int    $lastmodunix Last modified unix timestamp.
     *     @type mixed  $lastmod     Last modified month (3 letter) and day (without leading 0).
     *     @type int    $time        Last modified time.
     *     @type string $type        Type of resource. 'f' for file, 'd' for directory.
     *     @type mixed  $files       If a directory and `$recursive` is true, contains another array of files.
     * }
     * @phpstan-return false|array{
     *   name: string,
     *   perms: string,
     *   permsn: string,
     *   owner: string,
     *   size: int,
     *   lastmodunix: int,
     *   lastmod: mixed,
     *   time: int,
     *   type: string,
     *   files: mixed,
     * }
     * @phpstan-return false|array<string, array{name: string, perms: string, permsn: string, owner: string|false, size: int|string|false, lastmodunix: int|string|false, lastmod: string|false, time: string|false, type: 'f'|'d'|'l', group?: string|false, number?: int|string|false, files?: array|false}>
     */
    public function dirlist($path, $include_hidden = \true, $recursive = \false)
    {
    }
}