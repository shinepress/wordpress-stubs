<?php


/**
 * @package Text_Diff
 * @author  Geoffrey T. Dairiki <dairiki@dairiki.org>
 *
 * @access private
 */
class Text_Diff_Op_copy extends \Text_Diff_Op
{
    /**
     * PHP5 constructor.
     */
    function __construct($orig, $final = \false)
    {
    }
    /**
     * PHP4 constructor.
     */
    public function Text_Diff_Op_copy($orig, $final = \false)
    {
    }
    function &reverse()
    {
    }
}