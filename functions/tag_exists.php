<?php


//
// Tags.
//
/**
 * Checks whether a post tag with a given name exists.
 *
 * @since 2.3.0
 *
 * @param int|string $tag_name
 * @return mixed Returns null if the term does not exist.
 *               Returns an array of the term ID and the term taxonomy ID if the pairing exists.
 *               Returns 0 if term ID 0 is passed to the function.
 * @phpstan-return ($tag_name is 0 ? 0 : ($tag_name is '' ? null : array{term_id: string, term_taxonomy_id: string}|null))
 */
function tag_exists($tag_name)
{
}