<?php


class Gettext_Translations extends \Translations
{
    /**
     * Number of plural forms.
     *
     * @var int
     */
    public $_nplurals;
    /**
     * Callback to retrieve the plural form.
     *
     * @var callable
     */
    public $_gettext_select_plural_form;
    /**
     * The gettext implementation of select_plural_form.
     *
     * It lives in this class, because there are more than one descendand, which will use it and
     * they can't share it effectively.
     *
     * @param int $count
     */
    public function gettext_select_plural_form($count)
    {
    }
    /**
     * @param string $header
     * @return array
     */
    public function nplurals_and_expression_from_header($header)
    {
    }
    /**
     * Makes a function, which will return the right translation index, according to the
     * plural forms header
     *
     * @param int    $nplurals
     * @param string $expression
     */
    public function make_plural_form_function($nplurals, $expression)
    {
    }
    /**
     * Adds parentheses to the inner parts of ternary operators in
     * plural expressions, because PHP evaluates ternary oerators from left to right
     *
     * @param string $expression the expression without parentheses
     * @return string the expression with parentheses added
     */
    public function parenthesize_plural_exression($expression)
    {
    }
    /**
     * @param string $translation
     * @return array
     */
    public function make_headers($translation)
    {
    }
    /**
     * @param string $header
     * @param string $value
     */
    public function set_header($header, $value)
    {
    }
}