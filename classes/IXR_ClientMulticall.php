<?php


/**
 * IXR_ClientMulticall
 *
 * @package IXR
 * @since 1.5.0
 */
class IXR_ClientMulticall extends \IXR_Client
{
    var $calls = array();
    /**
     * PHP5 constructor.
     */
    function __construct($server, $path = \false, $port = 80)
    {
    }
    /**
     * PHP4 constructor.
     */
    public function IXR_ClientMulticall($server, $path = \false, $port = 80)
    {
    }
    /**
     * @since 1.5.0
     * @since 5.5.0 Formalized the existing `...$args` parameter by adding it
     *              to the function signature.
     */
    function addCall(...$args)
    {
    }
    /**
     * @since 1.5.0
     * @since 5.5.0 Formalized the existing `...$args` parameter by adding it
     *              to the function signature.
     *
     * @return bool
     */
    function query(...$args)
    {
    }
}