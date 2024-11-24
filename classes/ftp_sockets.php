<?php


/**
 * Socket Based FTP implementation
 *
 * @package PemFTP
 * @subpackage Socket
 * @since 2.5.0
 *
 * @version 1.0
 * @copyright Alexey Dotsenko
 * @author Alexey Dotsenko
 * @link https://www.phpclasses.org/package/1743-PHP-FTP-client-in-pure-PHP.html
 * @license LGPL https://opensource.org/licenses/lgpl-license.html
 */
class ftp_sockets extends \ftp_base
{
    function __construct($verb = \FALSE, $le = \FALSE)
    {
    }
    function _settimeout($sock)
    {
    }
    function _connect($host, $port)
    {
    }
    function _readmsg($fnction = "_readmsg")
    {
    }
    function _exec($cmd, $fnction = "_exec")
    {
    }
    function _data_prepare($mode = \FTP_ASCII)
    {
    }
    function _data_read($mode = \FTP_ASCII, $fp = \NULL)
    {
    }
    function _data_write($mode = \FTP_ASCII, $fp = \NULL)
    {
    }
    function _data_write_block($mode, $block)
    {
    }
    function _data_close()
    {
    }
    function _quit()
    {
    }
}