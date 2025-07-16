<?php


/**
 * For themes without theme.json file, make sure
 * to restore the inner div for the group block
 * to avoid breaking styles relying on that div.
 *
 * @since 5.8.0
 * @since 6.6.1 Removed inner container from Grid variations.
 * @access private
 *
 * @param string $block_content Rendered block content.
 * @param array  $block         Block object.
 * @return string Filtered block content.
 */
function wp_restore_group_inner_container($block_content, $block)
{
}