<?php


/**
 * logIO() - Writes logging info to a file.
 *
 * @since 1.2.0
 * @deprecated 3.4.0 Use error_log()
 * @see error_log()
 *
 * @global int|bool $xmlrpc_logging Whether to enable XML-RPC logging.
 *
 * @param string $io  Whether input or output.
 * @param string $msg Information describing logging reason.
 */
function logIO($io, $msg)
{
}