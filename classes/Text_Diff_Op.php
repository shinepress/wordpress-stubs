<?php


/**
 * @package Text_Diff
 * @author  Geoffrey T. Dairiki <dairiki@dairiki.org>
 *
 * @access private
 */
abstract class Text_Diff_Op
{
    var $orig;
    var $final;
    abstract function &reverse();
    function norig()
    {
    }
    function nfinal()
    {
    }
}