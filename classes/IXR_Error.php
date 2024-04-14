<?php


/**
 * IXR_Error
 *
 * @package IXR
 * @since 1.5.0
 */
class IXR_Error
{
    var $code;
    var $message;
    /**
     * PHP5 constructor.
     */
    function __construct($code, $message)
    {
    }
    /**
     * PHP4 constructor.
     */
    public function IXR_Error($code, $message)
    {
    }
    function getXml()
    {
    }
}