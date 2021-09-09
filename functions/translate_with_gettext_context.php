<?php


/**
 * Retrieve the translation of $text in the context defined in $context.
 *
 * If there is no translation, or the text domain isn't loaded the original
 * text is returned.
 *
 * *Note:* Don't use translate_with_gettext_context() directly, use _x() or related functions.
 *
 * @since 2.8.0
 *
 * @param string $text    Text to translate.
 * @param string $context Context information for the translators.
 * @param string $domain  Optional. Text domain. Unique identifier for retrieving translated strings.
 *                        Default 'default'.
 * @return string Translated text on success, original text on failure.
 */
function translate_with_gettext_context($text, $context, $domain = 'default')
{
}