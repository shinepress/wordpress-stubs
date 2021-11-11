<?php


/**
 * PemFTP base class
 *
 */
class ftp_base
{
    /* Public variables */
    var $LocalEcho;
    var $Verbose;
    var $OS_local;
    var $OS_remote;
    /* Private variables */
    var $_lastaction;
    var $_errors;
    var $_type;
    var $_umask;
    var $_timeout;
    var $_passive;
    var $_host;
    var $_fullhost;
    var $_port;
    var $_datahost;
    var $_dataport;
    var $_ftp_control_sock;
    var $_ftp_data_sock;
    var $_ftp_temp_sock;
    var $_ftp_buff_size;
    var $_login;
    var $_password;
    var $_connected;
    var $_ready;
    var $_code;
    var $_message;
    var $_can_restore;
    var $_port_available;
    var $_curtype;
    var $_features;
    var $_error_array;
    var $AuthorizedTransferMode;
    var $OS_FullName;
    var $_eol_code;
    var $AutoAsciiExt;
    /* Constructor */
    function __construct($port_mode = \FALSE, $verb = \FALSE, $le = \FALSE)
    {
    }
    function ftp_base($port_mode = \FALSE)
    {
    }
    // <!-- --------------------------------------------------------------------------------------- -->
    // <!--       Public functions                                                                  -->
    // <!-- --------------------------------------------------------------------------------------- -->
    function parselisting($line)
    {
    }
    function SendMSG($message = "", $crlf = \true)
    {
    }
    function SetType($mode = \FTP_AUTOASCII)
    {
    }
    function _settype($mode = \FTP_ASCII)
    {
    }
    function Passive($pasv = \NULL)
    {
    }
    function SetServer($host, $port = 21, $reconnect = \true)
    {
    }
    function SetUmask($umask = 022)
    {
    }
    function SetTimeout($timeout = 30)
    {
    }
    function connect($server = \NULL)
    {
    }
    function quit($force = \false)
    {
    }
    function login($user = \NULL, $pass = \NULL)
    {
    }
    function pwd()
    {
    }
    function cdup()
    {
    }
    function chdir($pathname)
    {
    }
    function rmdir($pathname)
    {
    }
    function mkdir($pathname)
    {
    }
    function rename($from, $to)
    {
    }
    function filesize($pathname)
    {
    }
    function abort()
    {
    }
    function mdtm($pathname)
    {
    }
    function systype()
    {
    }
    function delete($pathname)
    {
    }
    function site($command, $fnction = "site")
    {
    }
    function chmod($pathname, $mode)
    {
    }
    function restore($from)
    {
    }
    function features()
    {
    }
    function rawlist($pathname = "", $arg = "")
    {
    }
    function nlist($pathname = "", $arg = "")
    {
    }
    function is_exists($pathname)
    {
    }
    function file_exists($pathname)
    {
    }
    function fget($fp, $remotefile, $rest = 0)
    {
    }
    function get($remotefile, $localfile = \NULL, $rest = 0)
    {
    }
    function fput($remotefile, $fp, $rest = 0)
    {
    }
    function put($localfile, $remotefile = \NULL, $rest = 0)
    {
    }
    function mput($local = ".", $remote = \NULL, $continious = \false)
    {
    }
    function mget($remote, $local = ".", $continious = \false)
    {
    }
    function mdel($remote, $continious = \false)
    {
    }
    function mmkdir($dir, $mode = 0777)
    {
    }
    function glob($pattern, $handle = \NULL)
    {
    }
    function glob_pattern_match($pattern, $string)
    {
    }
    function glob_regexp($pattern, $probe)
    {
    }
    function dirlist($remote)
    {
    }
    // <!-- --------------------------------------------------------------------------------------- -->
    // <!--       Private functions                                                                 -->
    // <!-- --------------------------------------------------------------------------------------- -->
    function _checkCode()
    {
    }
    function _list($arg = "", $cmd = "LIST", $fnction = "_list")
    {
    }
    // <!-- --------------------------------------------------------------------------------------- -->
    // <!-- Partie : gestion des erreurs                                                            -->
    // <!-- --------------------------------------------------------------------------------------- -->
    // Gnre une erreur pour traitement externe  la classe
    function PushError($fctname, $msg, $desc = \false)
    {
    }
    // Rcupre une erreur externe
    function PopError()
    {
    }
}