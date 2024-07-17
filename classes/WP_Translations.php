<?php


/**
 * I18N: WP_Translations class.
 *
 * @package WordPress
 * @subpackage I18N
 * @since 6.5.0
 */
/**
 * Class WP_Translations.
 *
 * @since 6.5.0
 *
 * @property-read array<string, string> $headers
 * @property-read array<string, string[]> $entries
 */
class WP_Translations
{
    /**
     * Text domain.
     *
     * @since 6.5.0
     * @var string
     */
    protected $textdomain = 'default';
    /**
     * Translation controller instance.
     *
     * @since 6.5.0
     * @var WP_Translation_Controller
     */
    protected $controller;
    /**
     * Constructor.
     *
     * @since 6.5.0
     *
     * @param WP_Translation_Controller $controller I18N controller.
     * @param string                    $textdomain Optional. Text domain. Default 'default'.
     */
    public function __construct(\WP_Translation_Controller $controller, string $textdomain = 'default')
    {
    }
    /**
     * Magic getter for backward compatibility.
     *
     * @since 6.5.0
     *
     * @param string $name Property name.
     * @return mixed
     */
    public function __get(string $name)
    {
    }
    /**
     * Translates a plural string.
     *
     * @since 6.5.0
     *
     * @param string|null $singular Singular string.
     * @param string|null $plural   Plural string.
     * @param int|float   $count    Count. Should be an integer, but some plugins pass floats.
     * @param string|null $context  Context.
     * @return string|null Translation if it exists, or the unchanged singular string.
     */
    public function translate_plural($singular, $plural, $count = 1, $context = '')
    {
    }
    /**
     * Translates a singular string.
     *
     * @since 6.5.0
     *
     * @param string|null $singular Singular string.
     * @param string|null $context  Context.
     * @return string|null Translation if it exists, or the unchanged singular string
     */
    public function translate($singular, $context = '')
    {
    }
}