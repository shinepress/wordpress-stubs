<?php


#[\AllowDynamicProperties]
class Translations
{
    public $entries = array();
    public $headers = array();
    /**
     * Add entry to the PO structure
     *
     * @param array|Translation_Entry $entry
     * @return bool true on success, false if the entry doesn't have a key
     */
    public function add_entry($entry)
    {
    }
    /**
     * @param array|Translation_Entry $entry
     * @return bool
     */
    public function add_entry_or_merge($entry)
    {
    }
    /**
     * Sets $header PO header to $value
     *
     * If the header already exists, it will be overwritten
     *
     * TODO: this should be out of this class, it is gettext specific
     *
     * @param string $header header name, without trailing :
     * @param string $value header value, without trailing \n
     */
    public function set_header($header, $value)
    {
    }
    /**
     * @param array $headers
     */
    public function set_headers($headers)
    {
    }
    /**
     * @param string $header
     */
    public function get_header($header)
    {
    }
    /**
     * @param Translation_Entry $entry
     */
    public function translate_entry(&$entry)
    {
    }
    /**
     * @param string $singular
     * @param string $context
     * @return string
     */
    public function translate($singular, $context = \null)
    {
    }
    /**
     * Given the number of items, returns the 0-based index of the plural form to use
     *
     * Here, in the base Translations class, the common logic for English is implemented:
     *  0 if there is one element, 1 otherwise
     *
     * This function should be overridden by the subclasses. For example MO/PO can derive the logic
     * from their headers.
     *
     * @param int $count number of items
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
    /**
     * @param string $singular
     * @param string $plural
     * @param int    $count
     * @param string $context
     */
    public function translate_plural($singular, $plural, $count, $context = \null)
    {
    }
    /**
     * Merge $other in the current object.
     *
     * @param Object $other Another Translation object, whose translations will be merged in this one (passed by reference).
     */
    public function merge_with(&$other)
    {
    }
    /**
     * @param object $other
     */
    public function merge_originals_with(&$other)
    {
    }
}