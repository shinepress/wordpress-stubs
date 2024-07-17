<?php


/**
 * Interactivity API: Functions and hooks
 *
 * @package WordPress
 * @subpackage Interactivity API
 * @since 6.5.0
 */
/**
 * Processes the directives on the rendered HTML of the interactive blocks.
 *
 * This processes only one root interactive block at a time because the
 * rendered HTML of that block contains the rendered HTML of all its inner
 * blocks, including any interactive block. It does so by ignoring all the
 * interactive inner blocks until the root interactive block is processed.
 *
 * @since 6.5.0
 *
 * @param array $parsed_block The parsed block.
 * @return array The same parsed block.
 */
function wp_interactivity_process_directives_of_interactive_blocks(array $parsed_block): array
{
}