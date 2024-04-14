<?php


/**
 * Checks whether the current block type supports the feature requested.
 *
 * @since 5.8.0
 *
 * @param WP_Block_Type $block_type Block type to check for support.
 * @param string        $feature    Name of the feature to check support for.
 * @param mixed         $default    Optional. Fallback value for feature support. Default false.
 * @return bool Whether the feature is supported.
 */
function block_has_support($block_type, $feature, $default = \false)
{
}