<?php


class PO extends \Gettext_Translations
{
    var $comments_before_headers = '';
    /**
     * Exports headers to a PO entry
     *
     * @return string msgid/msgstr PO entry for this PO file headers, doesn't contain newline at the end
     */
    function export_headers()
    {
    }
    /**
     * Exports all entries to PO format
     *
     * @return string sequence of mgsgid/msgstr PO strings, doesn't containt newline at the end
     */
    function export_entries()
    {
    }
    /**
     * Exports the whole PO file as a string
     *
     * @param bool $include_headers whether to include the headers in the export
     * @return string ready for inclusion in PO file string for headers and all the enrtries
     */
    function export($include_headers = \true)
    {
    }
    /**
     * Same as {@link export}, but writes the result to a file
     *
     * @param string $filename where to write the PO string
     * @param bool $include_headers whether to include tje headers in the export
     * @return bool true on success, false on error
     */
    function export_to_file($filename, $include_headers = \true)
    {
    }
    /**
     * Text to include as a comment before the start of the PO contents
     *
     * Doesn't need to include # in the beginning of lines, these are added automatically
     */
    function set_comment_before_headers($text)
    {
    }
    /**
     * Formats a string in PO-style
     *
     * @static
     * @param string $string the string to format
     * @return string the poified string
     */
    public static function poify($string)
    {
    }
    /**
     * Gives back the original string from a PO-formatted string
     *
     * @static
     * @param string $string PO-formatted string
     * @return string enascaped string
     */
    public static function unpoify($string)
    {
    }
    /**
     * Inserts $with in the beginning of every new line of $string and
     * returns the modified string
     *
     * @static
     * @param string $string prepend lines in this string
     * @param string $with prepend lines with this string
     */
    public static function prepend_each_line($string, $with)
    {
    }
    /**
     * Prepare a text as a comment -- wraps the lines and prepends #
     * and a special character to each line
     *
     * @access private
     * @param string $text the comment text
     * @param string $char character to denote a special PO comment,
     * 	like :, default is a space
     */
    public static function comment_block($text, $char = ' ')
    {
    }
    /**
     * Builds a string from the entry for inclusion in PO file
     *
     * @static
     * @param Translation_Entry &$entry the entry to convert to po string
     * @return false|string PO-style formatted string for the entry or
     * 	false if the entry is empty
     */
    public static function export_entry(&$entry)
    {
    }
    public static function match_begin_and_end_newlines($translation, $original)
    {
    }
    /**
     * @param string $filename
     * @return boolean
     */
    function import_from_file($filename)
    {
    }
    /**
     * @param resource $f
     * @param int      $lineno
     * @return null|false|array
     */
    function read_entry($f, $lineno = 0)
    {
    }
    /**
     * @staticvar string   $last_line
     * @staticvar boolean  $use_last_line
     *
     * @param     resource $f
     * @param     string   $action
     * @return boolean
     */
    function read_line($f, $action = 'read')
    {
    }
    /**
     * @param Translation_Entry $entry
     * @param string            $po_comment_line
     */
    function add_comment_to_entry(&$entry, $po_comment_line)
    {
    }
    /**
     * @param string $s
     * @return sring
     */
    public static function trim_quotes($s)
    {
    }
}