<?php


/**
 * WP_Token_Map class.
 *
 * Use this class in specific circumstances with a static set of lookup keys which map to
 * a static set of transformed values. For example, this class is used to map HTML named
 * character references to their equivalent UTF-8 values.
 *
 * This class works differently than code calling `in_array()` and other methods. It
 * internalizes lookup logic and provides helper interfaces to optimize lookup and
 * transformation. It provides a method for precomputing the lookup tables and storing
 * them as PHP source code.
 *
 * All tokens and substitutions must be shorter than 256 bytes.
 *
 * Example:
 *
 *     $smilies = WP_Token_Map::from_array( array(
 *         '8O' => '😯',
 *         ':(' => '🙁',
 *         ':)' => '🙂',
 *         ':?' => '😕',
 *      ) );
 *
 *      true  === $smilies->contains( ':)' );
 *      false === $smilies->contains( 'simile' );
 *
 *      '😕' === $smilies->read_token( 'Not sure :?.', 9, $length_of_smily_syntax );
 *      2    === $length_of_smily_syntax;
 *
 * ## Precomputing the Token Map.
 *
 * Creating the class involves some work sorting and organizing the tokens and their
 * replacement values. In order to skip this, it's possible for the class to export
 * its state and be used as actual PHP source code.
 *
 * Example:
 *
 *      // Export with four spaces as the indent, only for the sake of this docblock.
 *      // The default indent is a tab character.
 *      $indent = '    ';
 *      echo $smilies->precomputed_php_source_table( $indent );
 *
 *      // Output, to be pasted into a PHP source file:
 *      WP_Token_Map::from_precomputed_table(
 *          array(
 *              "storage_version" => "6.6.0",
 *              "key_length" => 2,
 *              "groups" => "",
 *              "long_words" => array(),
 *              "small_words" => "8O\x00:)\x00:(\x00:?\x00",
 *              "small_mappings" => array( "😯", "🙂", "🙁", "😕" )
 *          )
 *      );
 *
 * ## Large vs. small words.
 *
 * This class uses a short prefix called the "key" to optimize lookup of its tokens.
 * This means that some tokens may be shorter than or equal in length to that key.
 * Those words that are longer than the key are called "large" while those shorter
 * than or equal to the key length are called "small."
 *
 * This separation of large and small words is incidental to the way this class
 * optimizes lookup, and should be considered an internal implementation detail
 * of the class. It may still be important to be aware of it, however.
 *
 * ## Determining Key Length.
 *
 * The choice of the size of the key length should be based on the data being stored in
 * the token map. It should divide the data as evenly as possible, but should not create
 * so many groups that a large fraction of the groups only contain a single token.
 *
 * For the HTML5 named character references, a key length of 2 was found to provide a
 * sufficient spread and should be a good default for relatively large sets of tokens.
 *
 * However, for some data sets this might be too long. For example, a list of smilies
 * may be too small for a key length of 2. Perhaps 1 would be more appropriate. It's
 * best to experiment and determine empirically which values are appropriate.
 *
 * ## Generate Pre-Computed Source Code.
 *
 * Since the `WP_Token_Map` is designed for relatively static lookups, it can be
 * advantageous to precompute the values and instantiate a table that has already
 * sorted and grouped the tokens and built the lookup strings.
 *
 * This can be done with `WP_Token_Map::precomputed_php_source_table()`.
 *
 * Note that if there is a leading character that all tokens need, such as `&` for
 * HTML named character references, it can be beneficial to exclude this from the
 * token map. Instead, find occurrences of the leading character and then use the
 * token map to see if the following characters complete the token.
 *
 * Example:
 *
 *     $map = WP_Token_Map::from_array( array( 'simple_smile:' => '🙂', 'sob:' => '😭', 'soba:' => '🍜' ) );
 *     echo $map->precomputed_php_source_table();
 *     // Output
 *     WP_Token_Map::from_precomputed_table(
 *         array(
 *             "storage_version" => "6.6.0",
 *             "key_length" => 2,
 *             "groups" => "si\x00so\x00",
 *             "long_words" => array(
 *                 // simple_smile:[🙂].
 *                 "\x0bmple_smile:\x04🙂",
 *                 // soba:[🍜] sob:[😭].
 *                 "\x03ba:\x04🍜\x02b:\x04😭",
 *             ),
 *             "short_words" => "",
 *             "short_mappings" => array()
 *         }
 *     );
 *
 * This precomputed value can be stored directly in source code and will skip the
 * startup cost of generating the lookup strings. See `$html5_named_character_entities`.
 *
 * Note that any updates to the precomputed format should update the storage version
 * constant. It would also be best to provide an update function to take older known
 * versions and upgrade them in place when loading into `from_precomputed_table()`.
 *
 * ## Future Direction.
 *
 * It may be viable to dynamically increase the length limits such that there's no need to impose them.
 * The limit appears because of the packing structure, which indicates how many bytes each segment of
 * text in the lookup tables spans. If, however, care were taken to track the longest word length, then
 * the packing structure could change its representation to allow for that. Each additional byte storing
 * length, however, increases the memory overhead and lookup runtime.
 *
 * An alternative approach could be to borrow the UTF-8 variable-length encoding and store lengths of less
 * than 127 as a single byte with the high bit unset, storing longer lengths as the combination of
 * continuation bytes.
 *
 * Since it has not been shown during the development of this class that longer strings are required, this
 * update is deferred until such a need is clear.
 *
 * @since 6.6.0
 */
class WP_Token_Map
{
    /**
     * Denotes the version of the code which produces pre-computed source tables.
     *
     * This version will be used not only to verify pre-computed data, but also
     * to upgrade pre-computed data from older versions. Choosing a name that
     * corresponds to the WordPress release will help people identify where an
     * old copy of data came from.
     */
    const STORAGE_VERSION = '6.6.0-trunk';
    /**
     * Maximum length for each key and each transformed value in the table (in bytes).
     *
     * @since 6.6.0
     */
    const MAX_LENGTH = 256;
    /**
     * Create a token map using an associative array of key/value pairs as the input.
     *
     * Example:
     *
     *     $smilies = WP_Token_Map::from_array( array(
     *          '8O' => '😯',
     *          ':(' => '🙁',
     *          ':)' => '🙂',
     *          ':?' => '😕',
     *       ) );
     *
     * @since 6.6.0
     *
     * @param array $mappings   The keys transform into the values, both are strings.
     * @param int   $key_length Determines the group key length. Leave at the default value
     *                          of 2 unless there's an empirical reason to change it.
     *
     * @return WP_Token_Map|null Token map, unless unable to create it.
     */
    public static function from_array(array $mappings, int $key_length = 2): ?\WP_Token_Map
    {
    }
    /**
     * Creates a token map from a pre-computed table.
     * This skips the initialization cost of generating the table.
     *
     * This function should only be used to load data created with
     * WP_Token_Map::precomputed_php_source_tag().
     *
     * @since 6.6.0
     *
     * @param array $state {
     *     Stores pre-computed state for directly loading into a Token Map.
     *
     *     @type string $storage_version Which version of the code produced this state.
     *     @type int    $key_length      Group key length.
     *     @type string $groups          Group lookup index.
     *     @type array  $large_words     Large word groups and packed strings.
     *     @type string $small_words     Small words packed string.
     *     @type array  $small_mappings  Small word mappings.
     * }
     *
     * @return WP_Token_Map Map with precomputed data loaded.
     * @phpstan-param array{
     *   storage_version?: string,
     *   key_length?: int,
     *   groups?: string,
     *   large_words?: array,
     *   small_words?: string,
     *   small_mappings?: array,
     * } $state
     */
    public static function from_precomputed_table($state): ?\WP_Token_Map
    {
    }
    /**
     * Indicates if a given word is a lookup key in the map.
     *
     * Example:
     *
     *     true  === $smilies->contains( ':)' );
     *     false === $smilies->contains( 'simile' );
     *
     * @since 6.6.0
     *
     * @param string $word             Determine if this word is a lookup key in the map.
     * @param string $case_sensitivity Optional. Pass 'ascii-case-insensitive' to ignore ASCII case when matching. Default 'case-sensitive'.
     * @return bool Whether there's an entry for the given word in the map.
     */
    public function contains(string $word, string $case_sensitivity = 'case-sensitive'): bool
    {
    }
    /**
     * If the text starting at a given offset is a lookup key in the map,
     * return the corresponding transformation from the map, else `false`.
     *
     * This function returns the translated string, but accepts an optional
     * parameter `$matched_token_byte_length`, which communicates how many
     * bytes long the lookup key was, if it found one. This can be used to
     * advance a cursor in calling code if a lookup key was found.
     *
     * Example:
     *
     *     false === $smilies->read_token( 'Not sure :?.', 0, $token_byte_length );
     *     '😕'  === $smilies->read_token( 'Not sure :?.', 9, $token_byte_length );
     *     2     === $token_byte_length;
     *
     * Example:
     *
     *     while ( $at < strlen( $input ) ) {
     *         $next_at = strpos( $input, ':', $at );
     *         if ( false === $next_at ) {
     *             break;
     *         }
     *
     *         $smily = $smilies->read_token( $input, $next_at, $token_byte_length );
     *         if ( false === $next_at ) {
     *             ++$at;
     *             continue;
     *         }
     *
     *         $prefix  = substr( $input, $at, $next_at - $at );
     *         $at     += $token_byte_length;
     *         $output .= "{$prefix}{$smily}";
     *     }
     *
     * @since 6.6.0
     *
     * @param string   $text                       String in which to search for a lookup key.
     * @param int      $offset                     Optional. How many bytes into the string where the lookup key ought to start. Default 0.
     * @param int|null &$matched_token_byte_length Optional. Holds byte-length of found token matched, otherwise not set. Default null.
     * @param string   $case_sensitivity           Optional. Pass 'ascii-case-insensitive' to ignore ASCII case when matching. Default 'case-sensitive'.
     *
     * @return string|null Mapped value of lookup key if found, otherwise `null`.
     */
    public function read_token(string $text, int $offset = 0, &$matched_token_byte_length = \null, $case_sensitivity = 'case-sensitive'): ?string
    {
    }
    /**
     * Exports the token map into an associate array of key/value pairs.
     *
     * Example:
     *
     *     $smilies->to_array() === array(
     *         '8O' => '😯',
     *         ':(' => '🙁',
     *         ':)' => '🙂',
     *         ':?' => '😕',
     *     );
     *
     * @return array The lookup key/substitution values as an associate array.
     */
    public function to_array(): array
    {
    }
    /**
     * Export the token map for quick loading in PHP source code.
     *
     * This function has a specific purpose, to make loading of static token maps fast.
     * It's used to ensure that the HTML character reference lookups add a minimal cost
     * to initializing the PHP process.
     *
     * Example:
     *
     *     echo $smilies->precomputed_php_source_table();
     *
     *     // Output.
     *     WP_Token_Map::from_precomputed_table(
     *         array(
     *             "storage_version" => "6.6.0",
     *             "key_length" => 2,
     *             "groups" => "",
     *             "long_words" => array(),
     *             "small_words" => "8O\x00:)\x00:(\x00:?\x00",
     *             "small_mappings" => array( "😯", "🙂", "🙁", "😕" )
     *         )
     *     );
     *
     * @since 6.6.0
     *
     * @param string $indent Optional. Use this string for indentation, or rely on the default horizontal tab character. Default "\t".
     * @return string Value which can be pasted into a PHP source file for quick loading of table.
     */
    public function precomputed_php_source_table(string $indent = "\t"): string
    {
    }
}