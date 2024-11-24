<?php


/**
 * Translations class.
 *
 * @since 2.8.0
 */
#[\AllowDynamicProperties]
class Translations
{
    /**
     * List of translation entries.
     *
     * @since 2.8.0
     *
     * @var Translation_Entry[]
     */
    public $entries = array();
    /**
     * List of translation headers.
     *
     * @since 2.8.0
     *
     * @var array<string, string>
     */
    public $headers = array();
    /**
     * Adds an entry to the PO structure.
     *
     * @since 2.8.0
     *
     * @param array|Translation_Entry $entry
     * @return bool True on success, false if the entry doesn't have a key.
     */
    public function add_entry($entry)
    {
    }
    /**
     * Adds or merges an entry to the PO structure.
     *
     * @since 2.8.0
     *
     * @param array|Translation_Entry $entry
     * @return bool True on success, false if the entry doesn't have a key.
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
     * @since 2.8.0
     *
     * @param string $header header name, without trailing :
     * @param string $value header value, without trailing \n
     */
    public function set_header($header, $value)
    {
    }
    /**
     * Sets translation headers.
     *
     * @since 2.8.0
     *
     * @param array $headers Associative array of headers.
     */
    public function set_headers($headers)
    {
    }
    /**
     * Returns a given translation header.
     *
     * @since 2.8.0
     *
     * @param string $header
     * @return string|false Header if it exists, false otherwise.
     */
    public function get_header($header)
    {
    }
    /**
     * Returns a given translation entry.
     *
     * @since 2.8.0
     *
     * @param Translation_Entry $entry Translation entry.
     * @return Translation_Entry|false Translation entry if it exists, false otherwise.
     */
    public function translate_entry(&$entry)
    {
    }
    /**
     * Translates a singular string.
     *
     * @since 2.8.0
     *
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
     * @since 2.8.0
     *
     * @param int $count Number of items.
     * @return int Plural form to use.
     */
    public function select_plural_form($count)
    {
    }
    /**
     * Returns the plural forms count.
     *
     * @since 2.8.0
     *
     * @return int Plural forms count.
     */
    public function get_plural_forms_count()
    {
    }
    /**
     * Translates a plural string.
     *
     * @since 2.8.0
     *
     * @param string $singular
     * @param string $plural
     * @param int    $count
     * @param string $context
     * @return string
     */
    public function translate_plural($singular, $plural, $count, $context = \null)
    {
    }
    /**
     * Merges other translations into the current one.
     *
     * @since 2.8.0
     *
     * @param Translations $other Another Translation object, whose translations will be merged in this one (passed by reference).
     */
    public function merge_with(&$other)
    {
    }
    /**
     * Merges originals with existing entries.
     *
     * @since 2.8.0
     *
     * @param Translations $other
     */
    public function merge_originals_with(&$other)
    {
    }
}