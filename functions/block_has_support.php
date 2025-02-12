<?php


/**
 * Checks whether the current block type supports the feature requested.
 *
 * @since 5.8.0
 * @since 6.4.0 The `$feature` parameter now supports a string.
 *
 * @param WP_Block_Type $block_type    Block type to check for support.
 * @param string|array  $feature       Feature slug, or path to a specific feature to check support for.
 * @param mixed         $default_value Optional. Fallback value for feature support. Default false.
 * @return bool Whether the feature is supported.
 */
function block_has_support($block_type, $feature, $default_value = \false)
{
}