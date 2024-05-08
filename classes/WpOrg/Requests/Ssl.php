<?php

namespace WpOrg\Requests;

/**
 * SSL utilities for Requests
 *
 * Collection of utilities for working with and verifying SSL certificates.
 *
 * @package Requests\Utilities
 */
final class Ssl
{
    /**
     * Verify the certificate against common name and subject alternative names
     *
     * Unfortunately, PHP doesn't check the certificate against the alternative
     * names, leading things like 'https://www.github.com/' to be invalid.
     *
     * @link https://tools.ietf.org/html/rfc2818#section-3.1 RFC2818, Section 3.1
     *
     * @param string|Stringable $host Host name to verify against
     * @param array $cert Certificate data from openssl_x509_parse()
     * @return bool
     * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $host argument is not a string or a stringable object.
     * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $cert argument is not an array or array accessible.
     */
    public static function verify_certificate($host, $cert)
    {
    }
    /**
     * Verify that a reference name is valid
     *
     * Verifies a dNSName for HTTPS usage, (almost) as per Firefox's rules:
     * - Wildcards can only occur in a name with more than 3 components
     * - Wildcards can only occur as the last character in the first
     *   component
     * - Wildcards may be preceded by additional characters
     *
     * We modify these rules to be a bit stricter and only allow the wildcard
     * character to be the full first component; that is, with the exclusion of
     * the third rule.
     *
     * @param string|Stringable $reference Reference dNSName
     * @return boolean Is the name valid?
     * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed argument is not a string or a stringable object.
     */
    public static function verify_reference_name($reference)
    {
    }
    /**
     * Match a hostname against a dNSName reference
     *
     * @param string|Stringable $host Requested host
     * @param string|Stringable $reference dNSName to match against
     * @return boolean Does the domain match?
     * @throws \WpOrg\Requests\Exception\InvalidArgument When either of the passed arguments is not a string or a stringable object.
     */
    public static function match_domain($host, $reference)
    {
    }
}