<?php


/**
 * WordPress Filesystem Class for implementing SSH2
 *
 * To use this class you must follow these steps for PHP 5.2.6+
 *
 * @contrib http://kevin.vanzonneveld.net/techblog/article/make_ssh_connections_with_php/ - Installation Notes
 *
 * Complie libssh2 (Note: Only 0.14 is officaly working with PHP 5.2.6+ right now, But many users have found the latest versions work)
 *
 * cd /usr/src
 * wget http://surfnet.dl.sourceforge.net/sourceforge/libssh2/libssh2-0.14.tar.gz
 * tar -zxvf libssh2-0.14.tar.gz
 * cd libssh2-0.14/
 * ./configure
 * make all install
 *
 * Note: Do not leave the directory yet!
 *
 * Enter: pecl install -f ssh2
 *
 * Copy the ssh.so file it creates to your PHP Module Directory.
 * Open up your PHP.INI file and look for where extensions are placed.
 * Add in your PHP.ini file: extension=ssh2.so
 *
 * Restart Apache!
 * Check phpinfo() streams to confirm that: ssh2.shell, ssh2.exec, ssh2.tunnel, ssh2.scp, ssh2.sftp  exist.
 *
 * Note: as of WordPress 2.8, This utilises the PHP5+ function 'stream_get_contents'
 *
 * @since 2.7.0
 *
 * @package WordPress
 * @subpackage Filesystem
 */
class WP_Filesystem_SSH2 extends \WP_Filesystem_Base
{
    /**
     * @access public
     */
    public $link = \false;
    /**
     * @access public
     * @var resource
     */
    public $sftp_link;
    public $keys = \false;
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
     * Gets the ssh2.sftp PHP stream wrapper path to open for the given file.
     *
     * This method also works around a PHP bug where the root directory (/) cannot
     * be opened by PHP functions, causing a false failure. In order to work around
     * this, the path is converted to /./ which is semantically the same as /
     * See https://bugs.php.net/bug.php?id=64169 for more details.
     *
     * @access public
     *
     * @since 4.4.0
     *
     * @param string $path The File/Directory path on the remote server to return
     * @return string The ssh2.sftp:// wrapped path to use.
     */
    public function sftp_path($path)
    {
    }
    /**
     * @access public
     *
     * @param string $command
     * @param bool $returnbool
     * @return bool|string True on success, false on failure. String if the command was executed, `$returnbool`
     *                     is false (default), and data from the resulting stream was retrieved.
     */
    public function run_command($command, $returnbool = \false)
    {
    }
    /**
     * @access public
     *
     * @param string $file
     * @return string|false
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
     * @param string   $file
     * @param string   $contents
     * @param bool|int $mode
     * @return bool
     */
    public function put_contents($file, $contents, $mode = \false)
    {
    }
    /**
     * @access public
     *
     * @return bool
     */
    public function cwd()
    {
    }
    /**
     * @access public
     *
     * @param string $dir
     * @return bool|string
     */
    public function chdir($dir)
    {
    }
    /**
     * @access public
     *
     * @param string $file
     * @param string $group
     * @param bool   $recursive
     *
     * @return bool
     */
    public function chgrp($file, $group, $recursive = \false)
    {
    }
    /**
     * @access public
     *
     * @param string $file
     * @param int    $mode
     * @param bool   $recursive
     * @return bool|string
     */
    public function chmod($file, $mode = \false, $recursive = \false)
    {
    }
    /**
     * Change the ownership of a file / folder.
     *
     * @access public
     *
     * @param string     $file      Path to the file.
     * @param string|int $owner     A user name or number.
     * @param bool       $recursive Optional. If set True changes file owner recursivly. Default False.
     * @return bool True on success or false on failure.
     */
    public function chown($file, $owner, $recursive = \false)
    {
    }
    /**
     * @access public
     *
     * @param string $file
     * @return string|false
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
     * @return string|false
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
     * @param string      $file
     * @param bool        $recursive
     * @param string|bool $type
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
     * @return int
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
     * @access public
     *
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
     * @param int    $time
     * @param int    $atime
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
     * @param bool   $recursive
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
    public function dirlist($path, $include_hidden = \true, $recursive = \false)
    {
    }
}