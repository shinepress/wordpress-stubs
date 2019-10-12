<?php


/**
 * Class used internally by Text_Diff to actually compute the diffs.
 *
 * This class is implemented using native PHP code.
 *
 * The algorithm used here is mostly lifted from the perl module
 * Algorithm::Diff (version 1.06) by Ned Konz, which is available at:
 * http://www.perl.com/CPAN/authors/id/N/NE/NEDKONZ/Algorithm-Diff-1.06.zip
 *
 * More ideas are taken from: http://www.ics.uci.edu/~eppstein/161/960229.html
 *
 * Some ideas (and a bit of code) are taken from analyze.c, of GNU
 * diffutils-2.7, which can be found at:
 * ftp://gnudist.gnu.org/pub/gnu/diffutils/diffutils-2.7.tar.gz
 *
 * Some ideas (subdivision by NCHUNKS > 2, and some optimizations) are from
 * Geoffrey T. Dairiki <dairiki@dairiki.org>. The original PHP version of this
 * code was written by him, and is used/adapted with his permission.
 *
 * Copyright 2004-2010 The Horde Project (http://www.horde.org/)
 *
 * See the enclosed file COPYING for license information (LGPL). If you did
 * not receive this file, see http://opensource.org/licenses/lgpl-license.php.
 *
 * @author  Geoffrey T. Dairiki <dairiki@dairiki.org>
 * @package Text_Diff
 */
class Text_Diff_Engine_native
{
    function diff($from_lines, $to_lines)
    {
    }
    /**
     * Divides the Largest Common Subsequence (LCS) of the sequences (XOFF,
     * XLIM) and (YOFF, YLIM) into NCHUNKS approximately equally sized
     * segments.
     *
     * Returns (LCS, PTS).  LCS is the length of the LCS. PTS is an array of
     * NCHUNKS+1 (X, Y) indexes giving the diving points between sub
     * sequences.  The first sub-sequence is contained in (X0, X1), (Y0, Y1),
     * the second in (X1, X2), (Y1, Y2) and so on.  Note that (X0, Y0) ==
     * (XOFF, YOFF) and (X[NCHUNKS], Y[NCHUNKS]) == (XLIM, YLIM).
     *
     * This function assumes that the first lines of the specified portions of
     * the two files do not match, and likewise that the last lines do not
     * match.  The caller must trim matching lines from the beginning and end
     * of the portions it is going to specify.
     */
    function _diag($xoff, $xlim, $yoff, $ylim, $nchunks)
    {
    }
    function _lcsPos($ypos)
    {
    }
    /**
     * Finds LCS of two sequences.
     *
     * The results are recorded in the vectors $this->{x,y}changed[], by
     * storing a 1 in the element for each line that is an insertion or
     * deletion (ie. is not in the LCS).
     *
     * The subsequence of file 0 is (XOFF, XLIM) and likewise for file 1.
     *
     * Note that XLIM, YLIM are exclusive bounds.  All line numbers are
     * origin-0 and discarded lines are not counted.
     */
    function _compareseq($xoff, $xlim, $yoff, $ylim)
    {
    }
    /**
     * Adjusts inserts/deletes of identical lines to join changes as much as
     * possible.
     *
     * We do something when a run of changed lines include a line at one end
     * and has an excluded, identical line at the other.  We are free to
     * choose which identical line is included.  `compareseq' usually chooses
     * the one at the beginning, but usually it is cleaner to consider the
     * following identical line to be the "change".
     *
     * This is extracted verbatim from analyze.c (GNU diffutils-2.7).
     */
    function _shiftBoundaries($lines, &$changed, $other_changed)
    {
    }
}