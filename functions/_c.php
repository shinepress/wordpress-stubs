<?php


/**
 * Retrieve translated string with vertical bar context
 *
 * Quite a few times, there will be collisions with similar translatable text
 * found in more than two places but with different translated context.
 *
 * In order to use the separate contexts, the _c() function is used and the
 * translatable string uses a pipe ('|') which has the context the string is in.
 *
 * When the translated string is returned, it is everything before the pipe, not
 * including the pipe character. If there is no pipe in the translated text then
 * everything is returned.
 *
 * @since 2.2.0
 * @deprecated 2.9.0 Use _x()
 * @see _x()
 *
 * @param string $text Text to translate.
 * @param string $domain Optional. Domain to retrieve the translated text.
 * @return string Translated context string without pipe.
 */
function _c($text, $domain = 'default')
{
}