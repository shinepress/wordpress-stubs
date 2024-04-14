<?php


class MO extends \Gettext_Translations
{
    /**
     * Number of plural forms.
     *
     * @var int
     */
    public $_nplurals = 2;
    /**
     * Returns the loaded MO file.
     *
     * @return string The loaded MO file.
     */
    public function get_filename()
    {
    }
    /**
     * Fills up with the entries from MO file $filename
     *
     * @param string $filename MO file to load
     * @return bool True if the import from file was successful, otherwise false.
     */
    public function import_from_file($filename)
    {
    }
    /**
     * @param string $filename
     * @return bool
     */
    public function export_to_file($filename)
    {
    }
    /**
     * @return string|false
     */
    public function export()
    {
    }
    /**
     * @param Translation_Entry $entry
     * @return bool
     */
    public function is_entry_good_for_export($entry)
    {
    }
    /**
     * @param resource $fh
     * @return true
     */
    public function export_to_file_handle($fh)
    {
    }
    /**
     * @param Translation_Entry $entry
     * @return string
     */
    public function export_original($entry)
    {
    }
    /**
     * @param Translation_Entry $entry
     * @return string
     */
    public function export_translations($entry)
    {
    }
    /**
     * @return string
     */
    public function export_headers()
    {
    }
    /**
     * @param int $magic
     * @return string|false
     */
    public function get_byteorder($magic)
    {
    }
    /**
     * @param POMO_FileReader $reader
     * @return bool True if the import was successful, otherwise false.
     */
    public function import_from_reader($reader)
    {
    }
    /**
     * Build a Translation_Entry from original string and translation strings,
     * found in a MO file
     *
     * @static
     * @param string $original original string to translate from MO file. Might contain
     *  0x04 as context separator or 0x00 as singular/plural separator
     * @param string $translation translation string from MO file. Might contain
     *  0x00 as a plural translations separator
     * @return Translation_Entry Entry instance.
     */
    public function &make_entry($original, $translation)
    {
    }
    /**
     * @param int $count
     * @return string
     */
    public function select_plural_form($count)
    {
    }
    /**
     * @return int
     */
    public function get_plural_forms_count()
    {
    }
}