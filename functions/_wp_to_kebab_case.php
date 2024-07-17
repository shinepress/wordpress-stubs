<?php


/**
 * This function is trying to replicate what
 * lodash's kebabCase (JS library) does in the client.
 *
 * The reason we need this function is that we do some processing
 * in both the client and the server (e.g.: we generate
 * preset classes from preset slugs) that needs to
 * create the same output.
 *
 * We can't remove or update the client's library due to backward compatibility
 * (some of the output of lodash's kebabCase is saved in the post content).
 * We have to make the server behave like the client.
 *
 * Changes to this function should follow updates in the client
 * with the same logic.
 *
 * @link https://github.com/lodash/lodash/blob/4.17/dist/lodash.js#L14369
 * @link https://github.com/lodash/lodash/blob/4.17/dist/lodash.js#L278
 * @link https://github.com/lodash-php/lodash-php/blob/master/src/String/kebabCase.php
 * @link https://github.com/lodash-php/lodash-php/blob/master/src/internal/unicodeWords.php
 *
 * @param string $input_string The string to kebab-case.
 *
 * @return string kebab-cased-string.
 */
function _wp_to_kebab_case($input_string)
{
}