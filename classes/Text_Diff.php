<?php


/**
 * General API for generating and formatting diffs - the differences between
 * two sequences of strings.
 *
 * The original PHP version of this code was written by Geoffrey T. Dairiki
 * <dairiki@dairiki.org>, and is used/adapted with his permission.
 *
 * Copyright 2004 Geoffrey T. Dairiki <dairiki@dairiki.org>
 * Copyright 2004-2010 The Horde Project (http://www.horde.org/)
 *
 * See the enclosed file COPYING for license information (LGPL). If you did
 * not receive this file, see https://opensource.org/license/lgpl-2-1/.
 *
 * @package Text_Diff
 * @author  Geoffrey T. Dairiki <dairiki@dairiki.org>
 */
class Text_Diff
{
    /**
     * Array of changes.
     *
     * @var array
     */
    var $_edits;
    /**
     * Computes diffs between sequences of strings.
     *
     * @param string $engine     Name of the diffing engine to use.  'auto'
     *                           will automatically select the best.
     * @param array $params      Parameters to pass to the diffing engine.
     *                           Normally an array of two arrays, each
     *                           containing the lines from a file.
     */
    function __construct($engine, $params)
    {
    }
    /**
     * PHP4 constructor.
     */
    public function Text_Diff($engine, $params)
    {
    }
    /**
     * Returns the array of differences.
     */
    function getDiff()
    {
    }
    /**
     * returns the number of new (added) lines in a given diff.
     *
     * @since Text_Diff 1.1.0
     *
     * @return int The number of new lines
     */
    function countAddedLines()
    {
    }
    /**
     * Returns the number of deleted (removed) lines in a given diff.
     *
     * @since Text_Diff 1.1.0
     *
     * @return int The number of deleted lines
     */
    function countDeletedLines()
    {
    }
    /**
     * Computes a reversed diff.
     *
     * Example:
     * <code>
     * $diff = new Text_Diff($lines1, $lines2);
     * $rev = $diff->reverse();
     * </code>
     *
     * @return Text_Diff  A Diff object representing the inverse of the
     *                    original diff.  Note that we purposely don't return a
     *                    reference here, since this essentially is a clone()
     *                    method.
     */
    function reverse()
    {
    }
    /**
     * Checks for an empty diff.
     *
     * @return bool True if two sequences were identical.
     */
    function isEmpty()
    {
    }
    /**
     * Computes the length of the Longest Common Subsequence (LCS).
     *
     * This is mostly for diagnostic purposes.
     *
     * @return int The length of the LCS.
     */
    function lcs()
    {
    }
    /**
     * Gets the original set of lines.
     *
     * This reconstructs the $from_lines parameter passed to the constructor.
     *
     * @return array  The original sequence of strings.
     */
    function getOriginal()
    {
    }
    /**
     * Gets the final set of lines.
     *
     * This reconstructs the $to_lines parameter passed to the constructor.
     *
     * @return array  The sequence of strings.
     */
    function getFinal()
    {
    }
    /**
     * Removes trailing newlines from a line of text. This is meant to be used
     * with array_walk().
     *
     * @param string $line  The line to trim.
     * @param int    $key   The index of the line in the array. Not used.
     */
    static function trimNewlines(&$line, $key)
    {
    }
    /**
     * Determines the location of the system temporary directory.
     *
     * @access protected
     *
     * @return string  A directory name which can be used for temp files.
     *                 Returns false if one could not be found.
     */
    static function _getTempDir()
    {
    }
    /**
     * Checks a diff for validity.
     *
     * This is here only for debugging purposes.
     */
    function _check($from_lines, $to_lines)
    {
    }
}