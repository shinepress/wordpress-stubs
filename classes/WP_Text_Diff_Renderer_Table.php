<?php


/**
 * Diff API: WP_Text_Diff_Renderer_Table class
 *
 * @package WordPress
 * @subpackage Diff
 * @since 4.7.0
 */
/**
 * Table renderer to display the diff lines.
 *
 * @since 2.6.0
 * @uses Text_Diff_Renderer Extends
 */
class WP_Text_Diff_Renderer_Table extends \Text_Diff_Renderer
{
    /**
     * @see Text_Diff_Renderer::_leading_context_lines
     * @var int
     * @access public
     * @since 2.6.0
     */
    public $_leading_context_lines = 10000;
    /**
     * @see Text_Diff_Renderer::_trailing_context_lines
     * @var int
     * @access public
     * @since 2.6.0
     */
    public $_trailing_context_lines = 10000;
    /**
     * Threshold for when a diff should be saved or omitted.
     *
     * @var float
     * @access protected
     * @since 2.6.0
     */
    protected $_diff_threshold = 0.6;
    /**
     * Inline display helper object name.
     *
     * @var string
     * @access protected
     * @since 2.6.0
     */
    protected $inline_diff_renderer = 'WP_Text_Diff_Renderer_inline';
    /**
     * Should we show the split view or not
     *
     * @var string
     * @access protected
     * @since 3.6.0
     */
    protected $_show_split_view = \true;
    protected $compat_fields = array('_show_split_view', 'inline_diff_renderer', '_diff_threshold');
    /**
     * Constructor - Call parent constructor with params array.
     *
     * This will set class properties based on the key value pairs in the array.
     *
     * @since 2.6.0
     *
     * @param array $params
     */
    public function __construct($params = array())
    {
    }
    /**
     * @ignore
     *
     * @param string $header
     * @return string
     */
    public function _startBlock($header)
    {
    }
    /**
     * @ignore
     *
     * @param array $lines
     * @param string $prefix
     */
    public function _lines($lines, $prefix = ' ')
    {
    }
    /**
     * @ignore
     *
     * @param string $line HTML-escape the value.
     * @return string
     */
    public function addedLine($line)
    {
    }
    /**
     * @ignore
     *
     * @param string $line HTML-escape the value.
     * @return string
     */
    public function deletedLine($line)
    {
    }
    /**
     * @ignore
     *
     * @param string $line HTML-escape the value.
     * @return string
     */
    public function contextLine($line)
    {
    }
    /**
     * @ignore
     *
     * @return string
     */
    public function emptyLine()
    {
    }
    /**
     * @ignore
     * @access public
     *
     * @param array $lines
     * @param bool $encode
     * @return string
     */
    public function _added($lines, $encode = \true)
    {
    }
    /**
     * @ignore
     * @access public
     *
     * @param array $lines
     * @param bool $encode
     * @return string
     */
    public function _deleted($lines, $encode = \true)
    {
    }
    /**
     * @ignore
     * @access public
     *
     * @param array $lines
     * @param bool $encode
     * @return string
     */
    public function _context($lines, $encode = \true)
    {
    }
    /**
     * Process changed lines to do word-by-word diffs for extra highlighting.
     *
     * (TRAC style) sometimes these lines can actually be deleted or added rows.
     * We do additional processing to figure that out
     *
     * @access public
     * @since 2.6.0
     *
     * @param array $orig
     * @param array $final
     * @return string
     */
    public function _changed($orig, $final)
    {
    }
    /**
     * Takes changed blocks and matches which rows in orig turned into which rows in final.
     *
     * Returns
     *	*_matches ( which rows match with which )
     *	*_rows ( order of rows in each column interleaved with blank rows as
     *		necessary )
     *
     * @since 2.6.0
     *
     * @param array $orig
     * @param array $final
     * @return array
     */
    public function interleave_changed_lines($orig, $final)
    {
    }
    /**
     * Computes a number that is intended to reflect the "distance" between two strings.
     *
     * @since 2.6.0
     *
     * @param string $string1
     * @param string $string2
     * @return int
     */
    public function compute_string_distance($string1, $string2)
    {
    }
    /**
     * @ignore
     * @since 2.6.0
     *
     * @param int $a
     * @param int $b
     * @return int
     */
    public function difference($a, $b)
    {
    }
    /**
     * Make private properties readable for backward compatibility.
     *
     * @since 4.0.0
     * @access public
     *
     * @param string $name Property to get.
     * @return mixed Property.
     */
    public function __get($name)
    {
    }
    /**
     * Make private properties settable for backward compatibility.
     *
     * @since 4.0.0
     * @access public
     *
     * @param string $name  Property to check if set.
     * @param mixed  $value Property value.
     * @return mixed Newly-set property.
     */
    public function __set($name, $value)
    {
    }
    /**
     * Make private properties checkable for backward compatibility.
     *
     * @since 4.0.0
     * @access public
     *
     * @param string $name Property to check if set.
     * @return bool Whether the property is set.
     */
    public function __isset($name)
    {
    }
    /**
     * Make private properties un-settable for backward compatibility.
     *
     * @since 4.0.0
     * @access public
     *
     * @param string $name Property to unset.
     */
    public function __unset($name)
    {
    }
}