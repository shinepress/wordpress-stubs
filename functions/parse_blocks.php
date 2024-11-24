<?php


/**
 * Parses blocks out of a content string.
 *
 * @since 5.0.0
 *
 * @param string $content Post content.
 * @return array[] {
 *     Array of block structures.
 *
 *     @type array ...$0 {
 *         An associative array of a single parsed block object. See WP_Block_Parser_Block.
 *
 *         @type string   $blockName    Name of block.
 *         @type array    $attrs        Attributes from block comment delimiters.
 *         @type array[]  $innerBlocks  List of inner blocks. An array of arrays that
 *                                      have the same structure as this one.
 *         @type string   $innerHTML    HTML from inside block comment delimiters.
 *         @type array    $innerContent List of string fragments and null markers where
 *                                      inner blocks were found.
 *     }
 * }
 * @phpstan-return array<int|string, array{
 *   blockName: string,
 *   attrs: array,
 *   innerBlocks: array[],
 *   innerHTML: string,
 *   innerContent: array,
 * }>
 */
function parse_blocks($content)
{
}