<?php


/**
 * IXR_Server
 *
 * @package IXR
 * @since 1.5.0
 */
class IXR_Server
{
    var $data;
    var $callbacks = array();
    var $message;
    var $capabilities;
    /**
     * PHP5 constructor.
     */
    function __construct($callbacks = \false, $data = \false, $wait = \false)
    {
    }
    /**
     * PHP4 constructor.
     */
    public function IXR_Server($callbacks = \false, $data = \false, $wait = \false)
    {
    }
    function serve($data = \false)
    {
    }
    function call($methodname, $args)
    {
    }
    function error($error, $message = \false)
    {
    }
    function output($xml)
    {
    }
    function hasMethod($method)
    {
    }
    function setCapabilities()
    {
    }
    function getCapabilities($args)
    {
    }
    function setCallbacks()
    {
    }
    function listMethods($args)
    {
    }
    function multiCall($methodcalls)
    {
    }
}