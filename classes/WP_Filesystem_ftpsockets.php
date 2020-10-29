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
 * @package WordPress
 * @subpackage Filesystem
 * @uses WP_Filesystem_Base Extends class
 */
class WP_Filesystem_ftpsockets extends \WP_Filesystem_Base
{
    /**
     * @access public
     * @var ftp
     */
    public $ftp;
    /**
     * @access public
     *
     * @param array $opt
     */
    public function __construct($opt = '')
    {
    }
    /**
     * @access public
     *
     * @return bool
     */
    public function connect()
    {
    }
    /**
     * Retrieves the file contents.
     *
     * @since 2.5.0
     * @access public
     *
     * @param string $file Filename.
     * @return string|false File contents on success, false if no temp file could be opened,
     *                      or if the file doesn't exist.
     */
    public function get_contents($file)
    {
    }
    /**
     * @access public
     *
     * @param string $file
     * @return array
     */
    public function get_contents_array($file)
    {
    }
    /**
     * @access public
     *
     * @param string $file
     * @param string $contents
     * @param int|bool $mode
     * @return bool
     */
    public function put_contents($file, $contents, $mode = \false)
    {
    }
    /**
     * @access public
     *
     * @return string
     */
    public function cwd()
    {
    }
    /**
     * @access public
     *
     * @param string $file
     * @return bool
     */
    public function chdir($file)
    {
    }
    /**
     * @access public
     *
     * @param string $file
     * @param int|bool $mode
     * @param bool $recursive
     * @return bool
     */
    public function chmod($file, $mode = \false, $recursive = \false)
    {
    }
    /**
     * @access public
     *
     * @param string $file
     * @return string
     */
    public function owner($file)
    {
    }
    /**
     * @access public
     *
     * @param string $file
     * @return string
     */
    public function getchmod($file)
    {
    }
    /**
     * @access public
     *
     * @param string $file
     * @return string
     */
    public function group($file)
    {
    }
    /**
     * @access public
     *
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
     * @access public
     *
     * @param string $source
     * @param string $destination
     * @param bool   $overwrite
     * @return bool
     */
    public function move($source, $destination, $overwrite = \false)
    {
    }
    /**
     * @access public
     *
     * @param string $file
     * @param bool   $recursive
     * @param string $type
     * @return bool
     */
    public function delete($file, $recursive = \false, $type = \false)
    {
    }
    /**
     * @access public
     *
     * @param string $file
     * @return bool
     */
    public function exists($file)
    {
    }
    /**
     * @access public
     *
     * @param string $file
     * @return bool
     */
    public function is_file($file)
    {
    }
    /**
     * @access public
     *
     * @param string $path
     * @return bool
     */
    public function is_dir($path)
    {
    }
    /**
     * @access public
     *
     * @param string $file
     * @return bool
     */
    public function is_readable($file)
    {
    }
    /**
     * @access public
     *
     * @param string $file
     * @return bool
     */
    public function is_writable($file)
    {
    }
    /**
     * @access public
     *
     * @param string $file
     * @return bool
     */
    public function atime($file)
    {
    }
    /**
     * @access public
     *
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
     * @access public
     *
     * @param string $file
     * @param int $time
     * @param int $atime
     * @return bool
     */
    public function touch($file, $time = 0, $atime = 0)
    {
    }
    /**
     * @access public
     *
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
     * @access public
     *
     * @param string $path
     * @param bool $recursive
     * @return bool
     */
    public function rmdir($path, $recursive = \false)
    {
    }
    /**
     * @access public
     *
     * @param string $path
     * @param bool   $include_hidden
     * @param bool   $recursive
     * @return bool|array
     */
    public function dirlist($path = '.', $include_hidden = \true, $recursive = \false)
    {
    }
    /**
     * @access public
     */
    public function __destruct()
    {
    }
}