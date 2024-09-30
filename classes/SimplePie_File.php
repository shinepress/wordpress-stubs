<?php


/**
 * Used for fetching remote files and reading local files
 *
 * Supports HTTP 1.0 via cURL or fsockopen, with spotty HTTP 1.1 support
 *
 * This class can be overloaded with {@see SimplePie::set_file_class()}
 *
 * @package SimplePie
 * @subpackage HTTP
 * @todo Move to properly supporting RFC2616 (HTTP/1.1)
 */
class SimplePie_File
{
    var $url;
    var $useragent;
    var $success = \true;
    var $headers = array();
    var $body;
    var $status_code;
    var $redirects = 0;
    var $error;
    var $method = \SIMPLEPIE_FILE_SOURCE_NONE;
    var $permanent_url;
    public function __construct($url, $timeout = 10, $redirects = 5, $headers = \null, $useragent = \null, $force_fsockopen = \false, $curl_options = array())
    {
    }
}