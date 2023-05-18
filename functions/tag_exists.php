<?php


//
// Tags.
//
/**
 * Check whether a post tag with a given name exists.
 *
 * @since 2.3.0
 *
 * @param int|string $tag_name
 * @return mixed
 * @phpstan-return ($tag_name is 0 ? 0 : ($tag_name is '' ? null : array{term_id: string, term_taxonomy_id: string}|null))
 */
function tag_exists($tag_name)
{
}