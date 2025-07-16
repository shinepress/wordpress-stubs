<?php


class PO extends \Gettext_Translations
{
    public $comments_before_headers = '';
    /**
     * Exports headers to a PO entry
     *
     * @return string msgid/msgstr PO entry for this PO file headers, doesn't contain newline at the end
     */
    public function export_headers()
    {
    }
    /**
     * Exports all entries to PO format
     *
     * @return string sequence of msgid/msgstr PO strings, doesn't contain a newline at the end
     */
    public function export_entries()
    {
    }
    /**
     * Exports the whole PO file as a string
     *
     * @param bool $include_headers whether to include the headers in the export
     * @return string ready for inclusion in PO file string for headers and all the entries
     */
    public function export($include_headers = \true)
    {
    }
    /**
     * Same as {@link export}, but writes the result to a file
     *
     * @param string $filename        Where to write the PO string.
     * @param bool   $include_headers Whether to include the headers in the export.
     * @return bool true on success, false on error
     */
    public function export_to_file($filename, $include_headers = \true)
    {
    }
    /**
     * Text to include as a comment before the start of the PO contents
     *
     * Doesn't need to include # in the beginning of lines, these are added automatically
     *
     * @param string $text Text to include as a comment.
     */
    public function set_comment_before_headers($text)
    {
    }
    /**
     * Formats a string in PO-style
     *
     * @param string $input_string the string to format
     * @return string the poified string
     */
    public static function poify($input_string)
    {
    }
    /**
     * Gives back the original string from a PO-formatted string
     *
     * @param string $input_string PO-formatted string
     * @return string unescaped string
     */
    public static function unpoify($input_string)
    {
    }
    /**
     * Inserts $with in the beginning of every new line of $input_string and
     * returns the modified string
     *
     * @param string $input_string prepend lines in this string
     * @param string $with         prepend lines with this string
     */
    public static function prepend_each_line($input_string, $with)
    {
    }
    /**
     * Prepare a text as a comment -- wraps the lines and prepends #
     * and a special character to each line
     *
     * @access private
     * @param string $text the comment text
     * @param string $char character to denote a special PO comment,
     *  like :, default is a space
     */
    public static function comment_block($text, $char = ' ')
    {
    }
    /**
     * Builds a string from the entry for inclusion in PO file
     *
     * @param Translation_Entry $entry the entry to convert to po string.
     * @return string|false PO-style formatted string for the entry or
     *  false if the entry is empty
     */
    public static function export_entry($entry)
    {
    }
    public static function match_begin_and_end_newlines($translation, $original)
    {
    }
    /**
     * @param string $filename
     * @return bool
     */
    public function import_from_file($filename)
    {
    }
    /**
     * Helper function for read_entry
     *
     * @param string $context
     * @return bool
     */
    protected static function is_final($context)
    {
    }
    /**
     * @param resource $f
     * @param int      $lineno
     * @return null|false|array
     */
    public function read_entry($f, $lineno = 0)
    {
    }
    /**
     * @param resource $f
     * @param string   $action
     * @return bool
     */
    public function read_line($f, $action = 'read')
    {
    }
    /**
     * @param Translation_Entry $entry
     * @param string            $po_comment_line
     */
    public function add_comment_to_entry(&$entry, $po_comment_line)
    {
    }
    /**
     * @param string $s
     * @return string
     */
    public static function trim_quotes($s)
    {
    }
}