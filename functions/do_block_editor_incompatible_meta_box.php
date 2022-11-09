<?php


/**
 * Function that renders a "fake" meta box with an information message,
 * shown on the block editor, when an incompatible meta box is found.
 *
 * @since 5.0.0
 *
 * @param mixed $object The data object being rendered on this screen.
 * @param array $box    {
 *     Custom formats meta box arguments.
 *
 *     @type string   $id           Meta box 'id' attribute.
 *     @type string   $title        Meta box title.
 *     @type callable $old_callback The original callback for this meta box.
 *     @type array    $args         Extra meta box arguments.
 * }
 * @phpstan-param array{
 *   id?: string,
 *   title?: string,
 *   old_callback?: callable,
 *   args?: array,
 * } $box
 */
function do_block_editor_incompatible_meta_box($object, $box)
{
}