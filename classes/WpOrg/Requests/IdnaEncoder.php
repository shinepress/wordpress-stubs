<?php

namespace WpOrg\Requests;

/**
 * IDNA URL encoder
 *
 * Note: Not fully compliant, as nameprep does nothing yet.
 *
 * @package Requests\Utilities
 *
 * @link https://tools.ietf.org/html/rfc3490 IDNA specification
 * @link https://tools.ietf.org/html/rfc3492 Punycode/Bootstrap specification
 */
class IdnaEncoder
{
    /**
     * ACE prefix used for IDNA
     *
     * @link https://tools.ietf.org/html/rfc3490#section-5
     * @var string
     */
    const ACE_PREFIX = 'xn--';
    /**
     * Maximum length of a IDNA URL in ASCII.
     *
     * @see \WpOrg\Requests\IdnaEncoder::to_ascii()
     *
     * @since 2.0.0
     *
     * @var int
     */
    const MAX_LENGTH = 64;
    /**#@+
     * Bootstrap constant for Punycode
     *
     * @link https://tools.ietf.org/html/rfc3492#section-5
     * @var int
     */
    const BOOTSTRAP_BASE = 36;
    const BOOTSTRAP_TMIN = 1;
    const BOOTSTRAP_TMAX = 26;
    const BOOTSTRAP_SKEW = 38;
    const BOOTSTRAP_DAMP = 700;
    const BOOTSTRAP_INITIAL_BIAS = 72;
    const BOOTSTRAP_INITIAL_N = 128;
    /**#@-*/
    /**
     * Encode a hostname using Punycode
     *
     * @param string|Stringable $hostname Hostname
     * @return string Punycode-encoded hostname
     * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed argument is not a string or a stringable object.
     */
    public static function encode($hostname)
    {
    }
    /**
     * Convert a UTF-8 text string to an ASCII string using Punycode
     *
     * @param string $text ASCII or UTF-8 string (max length 64 characters)
     * @return string ASCII string
     *
     * @throws \WpOrg\Requests\Exception Provided string longer than 64 ASCII characters (`idna.provided_too_long`)
     * @throws \WpOrg\Requests\Exception Prepared string longer than 64 ASCII characters (`idna.prepared_too_long`)
     * @throws \WpOrg\Requests\Exception Provided string already begins with xn-- (`idna.provided_is_prefixed`)
     * @throws \WpOrg\Requests\Exception Encoded string longer than 64 ASCII characters (`idna.encoded_too_long`)
     */
    public static function to_ascii($text)
    {
    }
    /**
     * Check whether a given text string contains only ASCII characters
     *
     * @internal (Testing found regex was the fastest implementation)
     *
     * @param string $text
     * @return bool Is the text string ASCII-only?
     */
    protected static function is_ascii($text)
    {
    }
    /**
     * Prepare a text string for use as an IDNA name
     *
     * @todo Implement this based on RFC 3491 and the newer 5891
     * @param string $text
     * @return string Prepared string
     */
    protected static function nameprep($text)
    {
    }
    /**
     * Convert a UTF-8 string to a UCS-4 codepoint array
     *
     * Based on \WpOrg\Requests\Iri::replace_invalid_with_pct_encoding()
     *
     * @param string $input
     * @return array Unicode code points
     *
     * @throws \WpOrg\Requests\Exception Invalid UTF-8 codepoint (`idna.invalidcodepoint`)
     */
    protected static function utf8_to_codepoints($input)
    {
    }
    /**
     * RFC3492-compliant encoder
     *
     * @internal Pseudo-code from Section 6.3 is commented with "#" next to relevant code
     *
     * @param string $input UTF-8 encoded string to encode
     * @return string Punycode-encoded string
     *
     * @throws \WpOrg\Requests\Exception On character outside of the domain (never happens with Punycode) (`idna.character_outside_domain`)
     */
    public static function punycode_encode($input)
    {
    }
    /**
     * Convert a digit to its respective character
     *
     * @link https://tools.ietf.org/html/rfc3492#section-5
     *
     * @param int $digit Digit in the range 0-35
     * @return string Single character corresponding to digit
     *
     * @throws \WpOrg\Requests\Exception On invalid digit (`idna.invalid_digit`)
     */
    protected static function digit_to_char($digit)
    {
    }
    /**
     * Adapt the bias
     *
     * @link https://tools.ietf.org/html/rfc3492#section-6.1
     * @param int $delta
     * @param int $numpoints
     * @param bool $firsttime
     * @return int New bias
     *
     * function adapt(delta,numpoints,firsttime):
     */
    protected static function adapt($delta, $numpoints, $firsttime)
    {
    }
}