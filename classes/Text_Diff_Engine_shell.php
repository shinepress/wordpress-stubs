<?php


/**
 * Class used internally by Diff to actually compute the diffs.
 *
 * This class uses the Unix `diff` program via shell_exec to compute the
 * differences between the two input arrays.
 *
 * Copyright 2007-2010 The Horde Project (http://www.horde.org/)
 *
 * See the enclosed file COPYING for license information (LGPL). If you did
 * not receive this file, see http://opensource.org/licenses/lgpl-license.php.
 *
 * @author  Milian Wolff <mail@milianw.de>
 * @package Text_Diff
 * @since   0.3.0
 */
class Text_Diff_Engine_shell
{
    /**
     * Path to the diff executable
     *
     * @var string
     */
    var $_diffCommand = 'diff';
    /**
     * Returns the array of differences.
     *
     * @param array $from_lines lines of text from old file
     * @param array $to_lines   lines of text from new file
     *
     * @return array all changes made (array with Text_Diff_Op_* objects)
     */
    function diff($from_lines, $to_lines)
    {
    }
    /**
     * Get lines from either the old or new text
     *
     * @access private
     *
     * @param array &$text_lines Either $from_lines or $to_lines
     * @param int   &$line_no    Current line number
     * @param int   $end         Optional end line, when we want to chop more
     *                           than one line.
     *
     * @return array The chopped lines
     */
    function _getLines(&$text_lines, &$line_no, $end = \false)
    {
    }
}