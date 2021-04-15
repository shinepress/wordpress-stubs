<?php


/**
 * IXR_IntrospectionServer
 *
 * @package IXR
 * @since 1.5.0
 */
class IXR_IntrospectionServer extends \IXR_Server
{
    var $signatures;
    var $help;
    /**
     * PHP5 constructor.
     */
    function __construct()
    {
    }
    /**
     * PHP4 constructor.
     */
    public function IXR_IntrospectionServer()
    {
    }
    function addCallback($method, $callback, $args, $help)
    {
    }
    function call($methodname, $args)
    {
    }
    function methodSignature($method)
    {
    }
    function methodHelp($method)
    {
    }
}