<?php

namespace SimplePie;

/**
 * Used for fetching remote files and reading local files
 *
 * Supports HTTP 1.0 via cURL or fsockopen, with spotty HTTP 1.1 support
 *
 * This class can be overloaded with {@see \SimplePie\SimplePie::set_file_class()}
 *
 * @package SimplePie
 * @subpackage HTTP
 * @todo Move to properly supporting RFC2616 (HTTP/1.1)
 */
class File
{
    public $url;
    public $useragent;
    public $success = true;
    public $headers = [];
    public $body;
    public $status_code = 0;
    public $redirects = 0;
    public $error;
    public $method = \SimplePie\SimplePie::FILE_SOURCE_NONE;
    public $permanent_url;
    public function __construct($url, $timeout = 10, $redirects = 5, $headers = null, $useragent = null, $force_fsockopen = false, $curl_options = [])
    {
    }
}