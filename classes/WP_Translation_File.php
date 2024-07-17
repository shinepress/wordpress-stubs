<?php


/**
 * I18N: WP_Translation_File class.
 *
 * @package WordPress
 * @subpackage I18N
 * @since 6.5.0
 */
/**
 * Class WP_Translation_File.
 *
 * @since 6.5.0
 */
abstract class WP_Translation_File
{
    /**
     * List of headers.
     *
     * @since 6.5.0
     * @var array<string, string>
     */
    protected $headers = array();
    /**
     * Whether file has been parsed.
     *
     * @since 6.5.0
     * @var bool
     */
    protected $parsed = \false;
    /**
     * Error information.
     *
     * @since 6.5.0
     * @var string|null Error message or null if no error.
     */
    protected $error;
    /**
     * File name.
     *
     * @since 6.5.0
     * @var string
     */
    protected $file = '';
    /**
     * Translation entries.
     *
     * @since 6.5.0
     * @var array<string, string>
     */
    protected $entries = array();
    /**
     * Plural forms function.
     *
     * @since 6.5.0
     * @var callable|null Plural forms.
     */
    protected $plural_forms = \null;
    /**
     * Constructor.
     *
     * @since 6.5.0
     *
     * @param string $file File to load.
     */
    protected function __construct(string $file)
    {
    }
    /**
     * Creates a new WP_Translation_File instance for a given file.
     *
     * @since 6.5.0
     *
     * @param string      $file     File name.
     * @param string|null $filetype Optional. File type. Default inferred from file name.
     * @return false|WP_Translation_File
     */
    public static function create(string $file, ?string $filetype = \null)
    {
    }
    /**
     * Creates a new WP_Translation_File instance for a given file.
     *
     * @since 6.5.0
     *
     * @param string $file     Source file name.
     * @param string $filetype Desired target file type.
     * @return string|false Transformed translation file contents on success, false otherwise.
     */
    public static function transform(string $file, string $filetype)
    {
    }
    /**
     * Returns all headers.
     *
     * @since 6.5.0
     *
     * @return array<string, string> Headers.
     */
    public function headers(): array
    {
    }
    /**
     * Returns all entries.
     *
     * @since 6.5.0
     *
     * @return array<string, string[]> Entries.
     */
    public function entries(): array
    {
    }
    /**
     * Returns the current error information.
     *
     * @since 6.5.0
     *
     * @return string|null Error message or null if no error.
     */
    public function error()
    {
    }
    /**
     * Returns the file name.
     *
     * @since 6.5.0
     *
     * @return string File name.
     */
    public function get_file(): string
    {
    }
    /**
     * Translates a given string.
     *
     * @since 6.5.0
     *
     * @param string $text String to translate.
     * @return false|string Translation(s) on success, false otherwise.
     */
    public function translate(string $text)
    {
    }
    /**
     * Returns the plural form for a given number.
     *
     * @since 6.5.0
     *
     * @param int $number Count.
     * @return int Plural form.
     */
    public function get_plural_form(int $number): int
    {
    }
    /**
     * Returns the plural forms expression as a tuple.
     *
     * @since 6.5.0
     *
     * @param string $header Plural-Forms header string.
     * @return string Plural forms expression.
     */
    protected function get_plural_expression_from_header(string $header): string
    {
    }
    /**
     * Makes a function, which will return the right translation index, according to the
     * plural forms header.
     *
     * @since 6.5.0
     *
     * @param string $expression Plural form expression.
     * @return callable(int $num): int Plural forms function.
     */
    protected function make_plural_form_function(string $expression): callable
    {
    }
    /**
     * Imports translations from another file.
     *
     * @since 6.5.0
     *
     * @param WP_Translation_File $source Source file.
     * @return bool True on success, false otherwise.
     */
    protected function import(\WP_Translation_File $source): bool
    {
    }
    /**
     * Parses the file.
     *
     * @since 6.5.0
     */
    abstract protected function parse_file();
    /**
     * Exports translation contents as a string.
     *
     * @since 6.5.0
     *
     * @return string Translation file contents.
     */
    abstract public function export();
}