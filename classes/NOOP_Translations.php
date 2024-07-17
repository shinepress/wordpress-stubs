<?php


/**
 * Provides the same interface as Translations, but doesn't do anything
 */
#[\AllowDynamicProperties]
class NOOP_Translations
{
    public $entries = array();
    public $headers = array();
    public function add_entry($entry)
    {
    }
    /**
     * @param string $header
     * @param string $value
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
     * @return false
     */
    public function get_header($header)
    {
    }
    /**
     * @param Translation_Entry $entry
     * @return false
     */
    public function translate_entry(&$entry)
    {
    }
    /**
     * @param string $singular
     * @param string $context
     */
    public function translate($singular, $context = \null)
    {
    }
    /**
     * @param int $count
     * @return bool
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
     * @param object $other
     */
    public function merge_with(&$other)
    {
    }
}