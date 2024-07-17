<?php


/**
 * Breaks a string into chunks by splitting at whitespace characters.
 *
 * The length of each returned chunk is as close to the specified length goal as possible,
 * with the caveat that each chunk includes its trailing delimiter.
 * Chunks longer than the goal are guaranteed to not have any inner whitespace.
 *
 * Joining the returned chunks with empty delimiters reconstructs the input string losslessly.
 *
 * Input string must have no null characters (or eventual transformations on output chunks must not care about null characters)
 *
 *     _split_str_by_whitespace( "1234 67890 1234 67890a cd 1234   890 123456789 1234567890a    45678   1 3 5 7 90 ", 10 ) ==
 *     array (
 *         0 => '1234 67890 ',  // 11 characters: Perfect split.
 *         1 => '1234 ',        //  5 characters: '1234 67890a' was too long.
 *         2 => '67890a cd ',   // 10 characters: '67890a cd 1234' was too long.
 *         3 => '1234   890 ',  // 11 characters: Perfect split.
 *         4 => '123456789 ',   // 10 characters: '123456789 1234567890a' was too long.
 *         5 => '1234567890a ', // 12 characters: Too long, but no inner whitespace on which to split.
 *         6 => '   45678   ',  // 11 characters: Perfect split.
 *         7 => '1 3 5 7 90 ',  // 11 characters: End of $text.
 *     );
 *
 * @since 3.4.0
 * @access private
 *
 * @param string $text   The string to split.
 * @param int    $goal   The desired chunk length.
 * @return array Numeric array of chunks.
 */
function _split_str_by_whitespace($text, $goal)
{
}