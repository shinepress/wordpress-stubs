<?php


/**
 * Gettext_Translations class.
 *
 * @since 2.8.0
 */
class Gettext_Translations extends \Translations
{
    /**
     * Number of plural forms.
     *
     * @var int
     *
     * @since 2.8.0
     */
    public $_nplurals;
    /**
     * Callback to retrieve the plural form.
     *
     * @var callable
     *
     * @since 2.8.0
     */
    public $_gettext_select_plural_form;
    /**
     * The gettext implementation of select_plural_form.
     *
     * It lives in this class, because there are more than one descendant, which will use it and
     * they can't share it effectively.
     *
     * @since 2.8.0
     *
     * @param int $count Plural forms count.
     * @return int Plural form to use.
     */
    public function gettext_select_plural_form($count)
    {
    }
    /**
     * Returns the nplurals and plural forms expression from the Plural-Forms header.
     *
     * @since 2.8.0
     *
     * @param string $header
     * @return array{0: int, 1: string}
     */
    public function nplurals_and_expression_from_header($header)
    {
    }
    /**
     * Makes a function, which will return the right translation index, according to the
     * plural forms header.
     *
     * @since 2.8.0
     *
     * @param int    $nplurals
     * @param string $expression
     * @return callable
     */
    public function make_plural_form_function($nplurals, $expression)
    {
    }
    /**
     * Adds parentheses to the inner parts of ternary operators in
     * plural expressions, because PHP evaluates ternary operators from left to right
     *
     * @since 2.8.0
     * @deprecated 6.5.0 Use the Plural_Forms class instead.
     *
     * @see Plural_Forms
     *
     * @param string $expression the expression without parentheses
     * @return string the expression with parentheses added
     */
    public function parenthesize_plural_exression($expression)
    {
    }
    /**
     * Prepare translation headers.
     *
     * @since 2.8.0
     *
     * @param string $translation
     * @return array<string, string> Translation headers
     */
    public function make_headers($translation)
    {
    }
    /**
     * Sets translation headers.
     *
     * @since 2.8.0
     *
     * @param string $header
     * @param string $value
     */
    public function set_header($header, $value)
    {
    }
}