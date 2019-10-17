<?php


class RSSCache
{
    var $BASE_CACHE;
    // where the cache files are stored
    var $MAX_AGE = 43200;
    // when are files stale, default twelve hours
    var $ERROR = '';
    // accumulate error messages
    /**
     * PHP5 constructor.
     */
    function __construct($base = '', $age = '')
    {
    }
    /**
     * PHP4 constructor.
     */
    public function RSSCache($base = '', $age = '')
    {
    }
    /*=======================================================================*\
      	Function:	set
      	Purpose:	add an item to the cache, keyed on url
      	Input:		url from which the rss file was fetched
      	Output:		true on success
      \*=======================================================================*/
    function set($url, $rss)
    {
    }
    /*=======================================================================*\
      	Function:	get
      	Purpose:	fetch an item from the cache
      	Input:		url from which the rss file was fetched
      	Output:		cached object on HIT, false on MISS
      \*=======================================================================*/
    function get($url)
    {
    }
    /*=======================================================================*\
      	Function:	check_cache
      	Purpose:	check a url for membership in the cache
      				and whether the object is older then MAX_AGE (ie. STALE)
      	Input:		url from which the rss file was fetched
      	Output:		cached object on HIT, false on MISS
      \*=======================================================================*/
    function check_cache($url)
    {
    }
    /*=======================================================================*\
      	Function:	serialize
      \*=======================================================================*/
    function serialize($rss)
    {
    }
    /*=======================================================================*\
      	Function:	unserialize
      \*=======================================================================*/
    function unserialize($data)
    {
    }
    /*=======================================================================*\
      	Function:	file_name
      	Purpose:	map url to location in cache
      	Input:		url from which the rss file was fetched
      	Output:		a file name
      \*=======================================================================*/
    function file_name($url)
    {
    }
    /*=======================================================================*\
      	Function:	error
      	Purpose:	register error
      \*=======================================================================*/
    function error($errormsg, $lvl = \E_USER_WARNING)
    {
    }
    function debug($debugmsg, $lvl = \E_USER_NOTICE)
    {
    }
}