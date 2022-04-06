<?php


/**
 * Fires functions attached to a deprecated filter hook.
 *
 * When a filter hook is deprecated, the apply_filters() call is replaced with
 * apply_filters_deprecated(), which triggers a deprecation notice and then fires
 * the original filter hook.
 *
 * @since 4.6.0
 *
 * @see _deprecated_hook()
 *
 * @param string $tag         The name of the filter hook.
 * @param array  $args        Array of additional function arguments to be passed to apply_filters().
 * @param string $version     The version of WordPress that deprecated the hook.
 * @param string $replacement Optional. The hook that should have been used. Default false.
 * @param string $message     Optional. A message regarding the change. Default null.
 */
function apply_filters_deprecated($tag, $args, $version, $replacement = \false, $message = \null)
{
}