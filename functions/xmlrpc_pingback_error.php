<?php


/**
 * Default filter attached to xmlrpc_pingback_error.
 *
 * Returns a generic pingback error code unless the error code is 48,
 * which reports that the pingback is already registered.
 *
 * @since 3.5.1
 * @link https://www.hixie.ch/specs/pingback/pingback#TOC3
 *
 * @param IXR_Error $ixr_error
 * @return IXR_Error
 */
function xmlrpc_pingback_error($ixr_error)
{
}