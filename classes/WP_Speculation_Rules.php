<?php


/**
 * Class representing a set of speculation rules.
 *
 * @since 6.8.0
 * @access private
 */
final class WP_Speculation_Rules implements \JsonSerializable
{
    /**
     * Adds a speculation rule to the speculation rules to consider.
     *
     * @since 6.8.0
     *
     * @param string               $mode Speculative loading mode. Either 'prefetch' or 'prerender'.
     * @param string               $id   Unique string identifier for the speculation rule.
     * @param array<string, mixed> $rule Associative array of rule arguments.
     * @return bool True on success, false if invalid parameters are provided.
     * @phpstan-param 'prefetch'|'prerender' $mode
     */
    public function add_rule(string $mode, string $id, array $rule): bool
    {
    }
    /**
     * Checks whether a speculation rule for the given mode and ID already exists.
     *
     * @since 6.8.0
     *
     * @param string $mode Speculative loading mode. Either 'prefetch' or 'prerender'.
     * @param string $id   Unique string identifier for the speculation rule.
     * @return bool True if the rule already exists, false otherwise.
     * @phpstan-param 'prefetch'|'prerender' $mode
     */
    public function has_rule(string $mode, string $id): bool
    {
    }
    /**
     * Returns the speculation rules data ready to be JSON-encoded.
     *
     * @since 6.8.0
     *
     * @return array<string, array<string, mixed>> Speculation rules data.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
    }
    /**
     * Checks whether the given speculation rules mode is valid.
     *
     * @since 6.8.0
     *
     * @param string $mode Speculation rules mode.
     * @return bool True if valid, false otherwise.
     */
    public static function is_valid_mode(string $mode): bool
    {
    }
    /**
     * Checks whether the given speculation rules eagerness is valid.
     *
     * @since 6.8.0
     *
     * @param string $eagerness Speculation rules eagerness.
     * @return bool True if valid, false otherwise.
     */
    public static function is_valid_eagerness(string $eagerness): bool
    {
    }
    /**
     * Checks whether the given speculation rules source is valid.
     *
     * @since 6.8.0
     *
     * @param string $source Speculation rules source.
     * @return bool True if valid, false otherwise.
     */
    public static function is_valid_source(string $source): bool
    {
    }
}