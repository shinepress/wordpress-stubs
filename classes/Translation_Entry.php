<?php


/**
 * Translation_Entry class encapsulates a translatable string.
 */
class Translation_Entry
{
    /**
     * Whether the entry contains a string and its plural form, default is false.
     *
     * @var bool
     */
    public $is_plural = \false;
    public $context = \null;
    public $singular = \null;
    public $plural = \null;
    public $translations = array();
    public $translator_comments = '';
    public $extracted_comments = '';
    public $references = array();
    public $flags = array();
    /**
     * @param array $args {
     *     Arguments array, supports the following keys:
     *
     *     @type string $singular            The string to translate, if omitted an
     *                                       empty entry will be created.
     *     @type string $plural              The plural form of the string, setting
     *                                       this will set `$is_plural` to true.
     *     @type array  $translations        Translations of the string and possibly
     *                                       its plural forms.
     *     @type string $context             A string differentiating two equal strings
     *                                       used in different contexts.
     *     @type string $translator_comments Comments left by translators.
     *     @type string $extracted_comments  Comments left by developers.
     *     @type array  $references          Places in the code this string is used, in
     *                                       relative_to_root_path/file.php:linenum form.
     *     @type array  $flags               Flags like php-format.
     * }
     * @phpstan-param array{
     *   singular?: string,
     *   plural?: string,
     *   translations?: array,
     *   context?: string,
     *   translator_comments?: string,
     *   extracted_comments?: string,
     *   references?: array,
     *   flags?: array,
     * } $args
     * @phpstan-return void
     */
    public function __construct($args = array())
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
     * Generates a unique key for this entry.
     *
     * @return string|false The key or false if the entry is empty.
     */
    public function key()
    {
    }
    /**
     * @param object $other
     */
    public function merge_with(&$other)
    {
    }
}