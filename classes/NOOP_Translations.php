<?php


/**
 * Provides the same interface as Translations, but doesn't do anything.
 *
 * @since 2.8.0
 */
#[\AllowDynamicProperties]
class NOOP_Translations
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
    public function add_entry($entry)
    {
    }
    /**
     * Sets a translation header.
     *
     * @since 2.8.0
     *
     * @param string $header
     * @param string $value
     */
    public function set_header($header, $value)
    {
    }
    /**
     * Sets translation headers.
     *
     * @since 2.8.0
     *
     * @param array $headers
     */
    public function set_headers($headers)
    {
    }
    /**
     * Returns a translation header.
     *
     * @since 2.8.0
     *
     * @param string $header
     * @return false
     */
    public function get_header($header)
    {
    }
    /**
     * Returns a given translation entry.
     *
     * @since 2.8.0
     *
     * @param Translation_Entry $entry
     * @return false
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
     */
    public function translate($singular, $context = \null)
    {
    }
    /**
     * Returns the plural form to use.
     *
     * @since 2.8.0
     *
     * @param int $count
     * @return int
     */
    public function select_plural_form($count)
    {
    }
    /**
     * Returns the plural forms count.
     *
     * @since 2.8.0
     *
     * @return int
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
     * @param Translations $other
     */
    public function merge_with(&$other)
    {
    }
}