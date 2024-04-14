<?php


/**
 * A class to render Diffs in different formats.
 *
 * This class renders the diff in classic diff format. It is intended that
 * this class be customized via inheritance, to obtain fancier outputs.
 *
 * Copyright 2004-2010 The Horde Project (http://www.horde.org/)
 *
 * See the enclosed file COPYING for license information (LGPL). If you did
 * not receive this file, see http://opensource.org/licenses/lgpl-license.php.
 *
 * @package Text_Diff
 */
class Text_Diff_Renderer
{
    /**
     * Number of leading context "lines" to preserve.
     *
     * This should be left at zero for this class, but subclasses may want to
     * set this to other values.
     */
    var $_leading_context_lines = 0;
    /**
     * Number of trailing context "lines" to preserve.
     *
     * This should be left at zero for this class, but subclasses may want to
     * set this to other values.
     */
    var $_trailing_context_lines = 0;
    /**
     * Constructor.
     */
    function __construct($params = array())
    {
    }
    /**
     * PHP4 constructor.
     */
    public function Text_Diff_Renderer($params = array())
    {
    }
    /**
     * Get any renderer parameters.
     *
     * @return array  All parameters of this renderer object.
     */
    function getParams()
    {
    }
    /**
     * Renders a diff.
     *
     * @param Text_Diff $diff  A Text_Diff object.
     *
     * @return string  The formatted output.
     */
    function render($diff)
    {
    }
    function _block($xbeg, $xlen, $ybeg, $ylen, &$edits)
    {
    }
    function _startDiff()
    {
    }
    function _endDiff()
    {
    }
    function _blockHeader($xbeg, $xlen, $ybeg, $ylen)
    {
    }
    function _startBlock($header)
    {
    }
    function _endBlock()
    {
    }
    function _lines($lines, $prefix = ' ')
    {
    }
    function _context($lines)
    {
    }
    function _added($lines)
    {
    }
    function _deleted($lines)
    {
    }
    function _changed($orig, $final)
    {
    }
}