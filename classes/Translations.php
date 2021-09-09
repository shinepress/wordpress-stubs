<?php


class Translations
{
    var $entries = array();
    var $headers = array();
    /**
     * Add entry to the PO structure
     *
     * @param array|Translation_Entry $entry
     * @return bool true on success, false if the entry doesn't have a key
     */
    function add_entry($entry)
    {
    }
    /**
     * @param array|Translation_Entry $entry
     * @return bool
     */
    function add_entry_or_merge($entry)
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
    function set_header($header, $value)
    {
    }
    /**
     * @param array $headers
     */
    function set_headers($headers)
    {
    }
    /**
     * @param string $header
     */
    function get_header($header)
    {
    }
    /**
     * @param Translation_Entry $entry
     */
    function translate_entry(&$entry)
    {
    }
    /**
     * @param string $singular
     * @param string $context
     * @return string
     */
    function translate($singular, $context = \null)
    {
    }
    /**
     * Given the number of items, returns the 0-based index of the plural form to use
     *
     * Here, in the base Translations class, the common logic for English is implemented:
     *  0 if there is one element, 1 otherwise
     *
     * This function should be overridden by the sub-classes. For example MO/PO can derive the logic
     * from their headers.
     *
     * @param integer $count number of items
     */
    function select_plural_form($count)
    {
    }
    /**
     * @return int
     */
    function get_plural_forms_count()
    {
    }
    /**
     * @param string $singular
     * @param string $plural
     * @param int    $count
     * @param string $context
     */
    function translate_plural($singular, $plural, $count, $context = \null)
    {
    }
    /**
     * Merge $other in the current object.
     *
     * @param Object $other Another Translation object, whose translations will be merged in this one (passed by reference).
     * @return void
     */
    function merge_with(&$other)
    {
    }
    /**
     * @param object $other
     */
    function merge_originals_with(&$other)
    {
    }
}