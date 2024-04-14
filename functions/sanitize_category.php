<?php


/**
 * Sanitizes category data based on context.
 *
 * @since 2.3.0
 *
 * @param object|array $category Category data.
 * @param string       $context  Optional. Default 'display'.
 * @return object|array Same type as $category with sanitized data for safe use.
 * @phpstan-template T of array|object
 * @phpstan-param T $category
 * @phpstan-return T
 */
function sanitize_category($category, $context = 'display')
{
}