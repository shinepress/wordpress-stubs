<?php


/**
 * mail_fetch/setup.php
 *
 * Copyright (c) 1999-2011 CDI (cdi@thewebmasters.net) All Rights Reserved
 * Modified by Philippe Mingo 2001-2009 mingo@rotedic.com
 * An RFC 1939 compliant wrapper class for the POP3 protocol.
 *
 * Licensed under the GNU GPL. For full terms see the file COPYING.
 *
 * POP3 class
 *
 * @copyright 1999-2011 The SquirrelMail Project Team
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @package plugins
 * @subpackage mail_fetch
 */
class POP3
{
    var $ERROR = '';
    //  Error string.
    var $TIMEOUT = 60;
    //  Default timeout before giving up on a
    //  network operation.
    var $COUNT = -1;
    //  Mailbox msg count
    var $BUFFER = 512;
    //  Socket buffer for socket fgets() calls.
    //  Per RFC 1939 the returned line a POP3
    //  server can send is 512 bytes.
    var $FP = '';
    //  The connection to the server's
    //  file descriptor
    var $MAILSERVER = '';
    // Set this to hard code the server name
    var $DEBUG = \FALSE;
    // set to true to echo pop3
    // commands and responses to error_log
    // this WILL log passwords!
    var $BANNER = '';
    //  Holds the banner returned by the
    //  pop server - used for apop()
    var $ALLOWAPOP = \FALSE;
    //  Allow or disallow apop()
    //  This must be set to true
    //  manually
    /**
     * PHP5 constructor.
     */
    function __construct($server = '', $timeout = '')
    {
    }
    /**
     * PHP4 constructor.
     */
    public function POP3($server = '', $timeout = '')
    {
    }
    function update_timer()
    {
    }
    function connect($server, $port = 110)
    {
    }
    function user($user = "")
    {
    }
    function pass($pass = "")
    {
    }
    function apop($login, $pass)
    {
    }
    function login($login = "", $pass = "")
    {
    }
    function top($msgNum, $numLines = "0")
    {
    }
    function pop_list($msgNum = "")
    {
    }
    function get($msgNum)
    {
    }
    function last($type = "count")
    {
    }
    function reset()
    {
    }
    function send_cmd($cmd = "")
    {
    }
    function quit()
    {
    }
    function popstat()
    {
    }
    function uidl($msgNum = "")
    {
    }
    function delete($msgNum = "")
    {
    }
    //  *********************************************************
    //  The following methods are internal to the class.
    function is_ok($cmd = "")
    {
    }
    function strip_clf($text = "")
    {
    }
    function parse_banner($server_text)
    {
    }
}