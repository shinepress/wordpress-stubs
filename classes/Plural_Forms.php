<?php


class Plural_Forms
{
    /**
     * Operator characters.
     *
     * @since 4.9.0
     * @var string OP_CHARS Operator characters.
     */
    const OP_CHARS = '|&><!=%?:';
    /**
     * Valid number characters.
     *
     * @since 4.9.0
     * @var string NUM_CHARS Valid number characters.
     */
    const NUM_CHARS = '0123456789';
    /**
     * Operator precedence.
     *
     * Operator precedence from highest to lowest. Higher numbers indicate
     * higher precedence, and are executed first.
     *
     * @see https://en.wikipedia.org/wiki/Operators_in_C_and_C%2B%2B#Operator_precedence
     *
     * @since 4.9.0
     * @var array $op_precedence Operator precedence from highest to lowest.
     */
    protected static $op_precedence = array('%' => 6, '<' => 5, '<=' => 5, '>' => 5, '>=' => 5, '==' => 4, '!=' => 4, '&&' => 3, '||' => 2, '?:' => 1, '?' => 1, '(' => 0, ')' => 0);
    /**
     * Tokens generated from the string.
     *
     * @since 4.9.0
     * @var array $tokens List of tokens.
     */
    protected $tokens = array();
    /**
     * Cache for repeated calls to the function.
     *
     * @since 4.9.0
     * @var array $cache Map of $n => $result
     */
    protected $cache = array();
    /**
     * Constructor.
     *
     * @since 4.9.0
     *
     * @param string $str Plural function (just the bit after `plural=` from Plural-Forms)
     */
    public function __construct($str)
    {
    }
    /**
     * Parse a Plural-Forms string into tokens.
     *
     * Uses the shunting-yard algorithm to convert the string to Reverse Polish
     * Notation tokens.
     *
     * @since 4.9.0
     *
     * @param string $str String to parse.
     */
    protected function parse($str)
    {
    }
    /**
     * Get the plural form for a number.
     *
     * Caches the value for repeated calls.
     *
     * @since 4.9.0
     *
     * @param int $num Number to get plural form for.
     * @return int Plural form value.
     */
    public function get($num)
    {
    }
    /**
     * Execute the plural form function.
     *
     * @since 4.9.0
     *
     * @param int $n Variable "n" to substitute.
     * @return int Plural form value.
     */
    public function execute($n)
    {
    }
}