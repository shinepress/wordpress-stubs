<?php


/**
 * Class used internally by Diff to actually compute the diffs.
 *
 * This class uses the xdiff PECL package (http://pecl.php.net/package/xdiff)
 * to compute the differences between the two input arrays.
 *
 * Copyright 2004-2010 The Horde Project (http://www.horde.org/)
 *
 * See the enclosed file COPYING for license information (LGPL). If you did
 * not receive this file, see http://opensource.org/licenses/lgpl-license.php.
 *
 * @author  Jon Parise <jon@horde.org>
 * @package Text_Diff
 */
class Text_Diff_Engine_xdiff
{
    /**
     */
    function diff($from_lines, $to_lines)
    {
    }
}