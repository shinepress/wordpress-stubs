<?php


/**
 * Diff API: WP_Text_Diff_Renderer_inline class
 *
 * @package WordPress
 * @subpackage Diff
 * @since 4.7.0
 */
/**
 * Better word splitting than the PEAR package provides.
 *
 * @since 2.6.0
 * @uses Text_Diff_Renderer_inline Extends
 */
class WP_Text_Diff_Renderer_inline extends \Text_Diff_Renderer_inline
{
    /**
     * @ignore
     * @since 2.6.0
     *
     * @param string $string
     * @param string $newlineEscape
     * @return string
     */
    public function _splitOnWords($string, $newlineEscape = "\n")
    {
    }
}