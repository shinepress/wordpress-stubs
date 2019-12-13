<?php


/**
 * @package Text_Diff
 * @author  Geoffrey T. Dairiki <dairiki@dairiki.org>
 */
class Text_MappedDiff extends \Text_Diff
{
    /**
     * Computes a diff between sequences of strings.
     *
     * This can be used to compute things like case-insensitve diffs, or diffs
     * which ignore changes in white-space.
     *
     * @param array $from_lines         An array of strings.
     * @param array $to_lines           An array of strings.
     * @param array $mapped_from_lines  This array should have the same size
     *                                  number of elements as $from_lines.  The
     *                                  elements in $mapped_from_lines and
     *                                  $mapped_to_lines are what is actually
     *                                  compared when computing the diff.
     * @param array $mapped_to_lines    This array should have the same number
     *                                  of elements as $to_lines.
     */
    function __construct($from_lines, $to_lines, $mapped_from_lines, $mapped_to_lines)
    {
    }
    /**
     * PHP4 constructor.
     */
    public function Text_MappedDiff($from_lines, $to_lines, $mapped_from_lines, $mapped_to_lines)
    {
    }
}