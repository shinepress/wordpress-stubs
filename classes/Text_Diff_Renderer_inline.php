<?php


/**
 * "Inline" diff renderer.
 *
 * This class renders diffs in the Wiki-style "inline" format.
 *
 * @author  Ciprian Popovici
 * @package Text_Diff
 */
class Text_Diff_Renderer_inline extends \Text_Diff_Renderer
{
    /**
     * Number of leading context "lines" to preserve.
     *
     * @var integer
     */
    var $_leading_context_lines = 10000;
    /**
     * Number of trailing context "lines" to preserve.
     *
     * @var integer
     */
    var $_trailing_context_lines = 10000;
    /**
     * Prefix for inserted text.
     *
     * @var string
     */
    var $_ins_prefix = '<ins>';
    /**
     * Suffix for inserted text.
     *
     * @var string
     */
    var $_ins_suffix = '</ins>';
    /**
     * Prefix for deleted text.
     *
     * @var string
     */
    var $_del_prefix = '<del>';
    /**
     * Suffix for deleted text.
     *
     * @var string
     */
    var $_del_suffix = '</del>';
    /**
     * Header for each change block.
     *
     * @var string
     */
    var $_block_header = '';
    /**
     * Whether to split down to character-level.
     *
     * @var boolean
     */
    var $_split_characters = \false;
    /**
     * What are we currently splitting on? Used to recurse to show word-level
     * or character-level changes.
     *
     * @var string
     */
    var $_split_level = 'lines';
    function _blockHeader($xbeg, $xlen, $ybeg, $ylen)
    {
    }
    function _startBlock($header)
    {
    }
    function _lines($lines, $prefix = ' ', $encode = \true)
    {
    }
    function _added($lines)
    {
    }
    function _deleted($lines, $words = \false)
    {
    }
    function _changed($orig, $final)
    {
    }
    function _splitOnWords($string, $newlineEscape = "\n")
    {
    }
    function _encode(&$string)
    {
    }
}