<?php


/**
 * Translation_Entry class encapsulates a translatable string
 */
class Translation_Entry
{
    /**
     * Whether the entry contains a string and its plural form, default is false
     *
     * @var boolean
     */
    var $is_plural = \false;
    var $context = \null;
    var $singular = \null;
    var $plural = \null;
    var $translations = array();
    var $translator_comments = '';
    var $extracted_comments = '';
    var $references = array();
    var $flags = array();
    /**
     * @param array $args associative array, support following keys:
     *  - singular (string) -- the string to translate, if omitted and empty entry will be created
     *  - plural (string) -- the plural form of the string, setting this will set {@link $is_plural} to true
     *  - translations (array) -- translations of the string and possibly -- its plural forms
     *  - context (string) -- a string differentiating two equal strings used in different contexts
     *  - translator_comments (string) -- comments left by translators
     *  - extracted_comments (string) -- comments left by developers
     *  - references (array) -- places in the code this strings is used, in relative_to_root_path/file.php:linenum form
     *  - flags (array) -- flags like php-format
     */
    function __construct($args = array())
    {
    }
    /**
     * PHP4 constructor.
     *
     * @deprecated 5.4.0 Use __construct() instead.
     *
     * @see Translation_Entry::__construct()
     */
    public function Translation_Entry($args = array())
    {
    }
    /**
     * Generates a unique key for this entry
     *
     * @return string|bool the key or false if the entry is empty
     */
    function key()
    {
    }
    /**
     * @param object $other
     */
    function merge_with(&$other)
    {
    }
}