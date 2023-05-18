<?php


/**
 * WordPress FTP Sockets Filesystem.
 *
 * @package WordPress
 * @subpackage Filesystem
 */
/**
 * WordPress Filesystem Class for implementing FTP Sockets.
 *
 * @since 2.5.0
 *
 * @see WP_Filesystem_Base
 */
class WP_Filesystem_ftpsockets extends \WP_Filesystem_Base
{
    /**
     * @var ftp
     */
    public $ftp;
    /**
     * @param array $opt
     */
    public function __construct($opt = '')
    {
    }
    /**
     * @return bool
     */
    public function connect()
    {
    }
    /**
     * Retrieves the file contents.
     *
     * @since 2.5.0
     *
     * @param string $file Filename.
     * @return string|false File contents on success, false if no temp file could be opened,
     *                      or if the file doesn't exist.
     */
    public function get_contents($file)
    {
    }
    /**
     * @param string $file
     * @return array
     */
    public function get_contents_array($file)
    {
    }
    /**
     * @param string $file
     * @param string $contents
     * @param int|bool $mode
     * @return bool
     */
    public function put_contents($file, $contents, $mode = \false)
    {
    }
    /**
     * @return string
     */
    public function cwd()
    {
    }
    /**
     * @param string $file
     * @return bool
     */
    public function chdir($file)
    {
    }
    /**
     * @param string $file
     * @param int|bool $mode
     * @param bool $recursive
     * @return bool
     */
    public function chmod($file, $mode = \false, $recursive = \false)
    {
    }
    /**
     * @param string $file
     * @return string
     */
    public function owner($file)
    {
    }
    /**
     * @param string $file
     * @return string
     */
    public function getchmod($file)
    {
    }
    /**
     * @param string $file
     * @return string
     */
    public function group($file)
    {
    }
    /**
     * @param string   $source
     * @param string   $destination
     * @param bool     $overwrite
     * @param int|bool $mode
     * @return bool
     */
    public function copy($source, $destination, $overwrite = \false, $mode = \false)
    {
    }
    /**
     * @param string $source
     * @param string $destination
     * @param bool   $overwrite
     * @return bool
     */
    public function move($source, $destination, $overwrite = \false)
    {
    }
    /**
     * @param string $file
     * @param bool   $recursive
     * @param string $type
     * @return bool
     */
    public function delete($file, $recursive = \false, $type = \false)
    {
    }
    /**
     * @param string $file
     * @return bool
     */
    public function exists($file)
    {
    }
    /**
     * @param string $file
     * @return bool
     */
    public function is_file($file)
    {
    }
    /**
     * @param string $path
     * @return bool
     */
    public function is_dir($path)
    {
    }
    /**
     * @param string $file
     * @return bool
     */
    public function is_readable($file)
    {
    }
    /**
     * @param string $file
     * @return bool
     */
    public function is_writable($file)
    {
    }
    /**
     * @param string $file
     * @return bool
     */
    public function atime($file)
    {
    }
    /**
     * @param string $file
     * @return int
     */
    public function mtime($file)
    {
    }
    /**
     * @param string $file
     * @return int
     */
    public function size($file)
    {
    }
    /**
     * @param string $file
     * @param int $time
     * @param int $atime
     * @return bool
     */
    public function touch($file, $time = 0, $atime = 0)
    {
    }
    /**
     * @param string $path
     * @param mixed  $chmod
     * @param mixed  $chown
     * @param mixed  $chgrp
     * @return bool
     */
    public function mkdir($path, $chmod = \false, $chown = \false, $chgrp = \false)
    {
    }
    /**
     * @param string $path
     * @param bool $recursive
     * @return bool
     */
    public function rmdir($path, $recursive = \false)
    {
    }
    /**
     * @param string $path
     * @param bool   $include_hidden
     * @param bool   $recursive
     * @return bool|array
     * @phpstan-return false|array<string, array{name: string, perms: string, permsn: string, owner: string|false, size: int|string|false, lastmodunix: int|string|false, lastmod: string|false, time: string|false, type: 'f'|'d'|'l', group?: string|false, number?: int|string|false, files?: array|false}>
     */
    public function dirlist($path = '.', $include_hidden = \true, $recursive = \false)
    {
    }
    /**
     */
    public function __destruct()
    {
    }
}