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
 * @license https://opensource.org/licenses/gpl-license.php GNU Public License
 * @package plugins
 * @subpackage mail_fetch
 */
class POP3
{
    var $ERROR = '';
    var $TIMEOUT = 60;
    var $COUNT = -1;
    var $BUFFER = 512;
    var $FP = '';
    var $MAILSERVER = '';
    var $DEBUG = \FALSE;
    var $BANNER = '';
    var $ALLOWAPOP = \FALSE;
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