<?php


/*************************************************

Snoopy - the PHP net client
Author: Monte Ohrt <monte@ispi.net>
Copyright (c): 1999-2008 New Digital Group, all rights reserved
Version: 1.2.4

 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

You may contact the author of Snoopy by e-mail at:
monte@ohrt.com

The latest version of Snoopy can be obtained from:
http://snoopy.sourceforge.net/

*************************************************/
class Snoopy
{
    /**** Public variables ****/
    /* user definable vars */
    var $host = "www.php.net";
    // host name we are connecting to
    var $port = 80;
    // port we are connecting to
    var $proxy_host = "";
    // proxy host to use
    var $proxy_port = "";
    // proxy port to use
    var $proxy_user = "";
    // proxy user to use
    var $proxy_pass = "";
    // proxy password to use
    var $agent = "Snoopy v1.2.4";
    // agent we masquerade as
    var $referer = "";
    // referer info to pass
    var $cookies = array();
    // array of cookies to pass
    // $cookies["username"]="joe";
    var $rawheaders = array();
    // array of raw headers to send
    // $rawheaders["Content-type"]="text/html";
    var $maxredirs = 5;
    // http redirection depth maximum. 0 = disallow
    var $lastredirectaddr = "";
    // contains address of last redirected address
    var $offsiteok = \true;
    // allows redirection off-site
    var $maxframes = 0;
    // frame content depth maximum. 0 = disallow
    var $expandlinks = \true;
    // expand links to fully qualified URLs.
    // this only applies to fetchlinks()
    // submitlinks(), and submittext()
    var $passcookies = \true;
    // pass set cookies back through redirects
    // NOTE: this currently does not respect
    // dates, domains or paths.
    var $user = "";
    // user for http authentication
    var $pass = "";
    // password for http authentication
    // http accept types
    var $accept = "image/gif, image/x-xbitmap, image/jpeg, image/pjpeg, */*";
    var $results = "";
    // where the content is put
    var $error = "";
    // error messages sent here
    var $response_code = "";
    // response code returned from server
    var $headers = array();
    // headers returned from server sent here
    var $maxlength = 500000;
    // max return data length (body)
    var $read_timeout = 0;
    // timeout on read operations, in seconds
    // supported only since PHP 4 Beta 4
    // set to 0 to disallow timeouts
    var $timed_out = \false;
    // if a read operation timed out
    var $status = 0;
    // http request status
    var $temp_dir = "/tmp";
    // temporary directory that the webserver
    // has permission to write to.
    // under Windows, this should be C:\temp
    var $curl_path = "/usr/local/bin/curl";
    // Snoopy will use cURL for fetching
    // SSL content if a full system path to
    // the cURL binary is supplied here.
    // set to false if you do not have
    // cURL installed. See http://curl.haxx.se
    // for details on installing cURL.
    // Snoopy does *not* use the cURL
    // library functions built into php,
    // as these functions are not stable
    // as of this Snoopy release.
    /**** Private variables ****/
    var $_maxlinelen = 4096;
    // max line length (headers)
    var $_httpmethod = "GET";
    // default http request method
    var $_httpversion = "HTTP/1.0";
    // default http request version
    var $_submit_method = "POST";
    // default submit method
    var $_submit_type = "application/x-www-form-urlencoded";
    // default submit type
    var $_mime_boundary = "";
    // MIME boundary for multipart/form-data submit type
    var $_redirectaddr = \false;
    // will be set if page fetched is a redirect
    var $_redirectdepth = 0;
    // increments on an http redirect
    var $_frameurls = array();
    // frame src urls
    var $_framedepth = 0;
    // increments on frame depth
    var $_isproxy = \false;
    // set if using a proxy server
    var $_fp_timeout = 30;
    // timeout for socket connection
    /*======================================================================*\
      	Function:	fetch
      	Purpose:	fetch the contents of a web page
      				(and possibly other protocols in the
      				future like ftp, nntp, gopher, etc.)
      	Input:		$URI	the location of the page to fetch
      	Output:		$this->results	the output text from the fetch
      \*======================================================================*/
    function fetch($URI)
    {
    }
    /*======================================================================*\
      	Function:	submit
      	Purpose:	submit an http form
      	Input:		$URI	the location to post the data
      				$formvars	the formvars to use.
      					format: $formvars["var"] = "val";
      				$formfiles  an array of files to submit
      					format: $formfiles["var"] = "/dir/filename.ext";
      	Output:		$this->results	the text output from the post
      \*======================================================================*/
    function submit($URI, $formvars = "", $formfiles = "")
    {
    }
    /*======================================================================*\
      	Function:	fetchlinks
      	Purpose:	fetch the links from a web page
      	Input:		$URI	where you are fetching from
      	Output:		$this->results	an array of the URLs
      \*======================================================================*/
    function fetchlinks($URI)
    {
    }
    /*======================================================================*\
      	Function:	fetchform
      	Purpose:	fetch the form elements from a web page
      	Input:		$URI	where you are fetching from
      	Output:		$this->results	the resulting html form
      \*======================================================================*/
    function fetchform($URI)
    {
    }
    /*======================================================================*\
      	Function:	fetchtext
      	Purpose:	fetch the text from a web page, stripping the links
      	Input:		$URI	where you are fetching from
      	Output:		$this->results	the text from the web page
      \*======================================================================*/
    function fetchtext($URI)
    {
    }
    /*======================================================================*\
      	Function:	submitlinks
      	Purpose:	grab links from a form submission
      	Input:		$URI	where you are submitting from
      	Output:		$this->results	an array of the links from the post
      \*======================================================================*/
    function submitlinks($URI, $formvars = "", $formfiles = "")
    {
    }
    /*======================================================================*\
      	Function:	submittext
      	Purpose:	grab text from a form submission
      	Input:		$URI	where you are submitting from
      	Output:		$this->results	the text from the web page
      \*======================================================================*/
    function submittext($URI, $formvars = "", $formfiles = "")
    {
    }
    /*======================================================================*\
      	Function:	set_submit_multipart
      	Purpose:	Set the form submission content type to
      				multipart/form-data
      \*======================================================================*/
    function set_submit_multipart()
    {
    }
    /*======================================================================*\
      	Function:	set_submit_normal
      	Purpose:	Set the form submission content type to
      				application/x-www-form-urlencoded
      \*======================================================================*/
    function set_submit_normal()
    {
    }
    /*======================================================================*\
      	Private functions
      \*======================================================================*/
    /*======================================================================*\
      	Function:	_striplinks
      	Purpose:	strip the hyperlinks from an html document
      	Input:		$document	document to strip.
      	Output:		$match		an array of the links
      \*======================================================================*/
    function _striplinks($document)
    {
    }
    /*======================================================================*\
      	Function:	_stripform
      	Purpose:	strip the form elements from an html document
      	Input:		$document	document to strip.
      	Output:		$match		an array of the links
      \*======================================================================*/
    function _stripform($document)
    {
    }
    /*======================================================================*\
      	Function:	_striptext
      	Purpose:	strip the text from an html document
      	Input:		$document	document to strip.
      	Output:		$text		the resulting text
      \*======================================================================*/
    function _striptext($document)
    {
    }
    /*======================================================================*\
      	Function:	_expandlinks
      	Purpose:	expand each link into a fully qualified URL
      	Input:		$links			the links to qualify
      				$URI			the full URI to get the base from
      	Output:		$expandedLinks	the expanded links
      \*======================================================================*/
    function _expandlinks($links, $URI)
    {
    }
    /*======================================================================*\
      	Function:	_httprequest
      	Purpose:	go get the http data from the server
      	Input:		$url		the url to fetch
      				$fp			the current open file pointer
      				$URI		the full URI
      				$body		body contents to send if any (POST)
      	Output:
      \*======================================================================*/
    function _httprequest($url, $fp, $URI, $http_method, $content_type = "", $body = "")
    {
    }
    /*======================================================================*\
      	Function:	_httpsrequest
      	Purpose:	go get the https data from the server using curl
      	Input:		$url		the url to fetch
      				$URI		the full URI
      				$body		body contents to send if any (POST)
      	Output:
      \*======================================================================*/
    function _httpsrequest($url, $URI, $http_method, $content_type = "", $body = "")
    {
    }
    /*======================================================================*\
      	Function:	setcookies()
      	Purpose:	set cookies for a redirection
      \*======================================================================*/
    function setcookies()
    {
    }
    /*======================================================================*\
      	Function:	_check_timeout
      	Purpose:	checks whether timeout has occurred
      	Input:		$fp	file pointer
      \*======================================================================*/
    function _check_timeout($fp)
    {
    }
    /*======================================================================*\
      	Function:	_connect
      	Purpose:	make a socket connection
      	Input:		$fp	file pointer
      \*======================================================================*/
    function _connect(&$fp)
    {
    }
    /*======================================================================*\
      	Function:	_disconnect
      	Purpose:	disconnect a socket connection
      	Input:		$fp	file pointer
      \*======================================================================*/
    function _disconnect($fp)
    {
    }
    /*======================================================================*\
      	Function:	_prepare_post_body
      	Purpose:	Prepare post body according to encoding type
      	Input:		$formvars  - form variables
      				$formfiles - form upload files
      	Output:		post body
      \*======================================================================*/
    function _prepare_post_body($formvars, $formfiles)
    {
    }
}