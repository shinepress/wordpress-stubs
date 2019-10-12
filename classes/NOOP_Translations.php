<?php


/**
 * Provides the same interface as Translations, but doesn't do anything
 */
class NOOP_Translations
{
    var $entries = array();
    var $headers = array();
    function add_entry($entry)
    {
    }
    /**
     *
     * @param string $header
     * @param string $value
     */
    function set_header($header, $value)
    {
    }
    /**
     *
     * @param array $headers
     */
    function set_headers($headers)
    {
    }
    /**
     * @param string $header
     * @return false
     */
    function get_header($header)
    {
    }
    /**
     * @param Translation_Entry $entry
     * @return false
     */
    function translate_entry(&$entry)
    {
    }
    /**
     * @param string $singular
     * @param string $context
     */
    function translate($singular, $context = \null)
    {
    }
    /**
     *
     * @param int $count
     * @return bool
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
     * @param object $other
     */
    function merge_with(&$other)
    {
    }
}