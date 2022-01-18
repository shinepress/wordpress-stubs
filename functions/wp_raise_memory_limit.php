<?php


/**
 * Attempts to raise the PHP memory limit for memory intensive processes.
 *
 * Only allows raising the existing limit and prevents lowering it.
 *
 * @since 4.6.0
 *
 * @param string $context Optional. Context in which the function is called. Accepts either 'admin',
 *                        'image', or an arbitrary other context. If an arbitrary context is passed,
 *                        the similarly arbitrary {@see '$context_memory_limit'} filter will be
 *                        invoked. Default 'admin'.
 * @return bool|int|string The limit that was set or false on failure.
 */
function wp_raise_memory_limit($context = 'admin')
{
}