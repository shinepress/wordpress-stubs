<?php


/**
 * Parses unified or context diffs output from eg. the diff utility.
 *
 * Example:
 * <code>
 * $patch = file_get_contents('example.patch');
 * $diff = new Text_Diff('string', array($patch));
 * $renderer = new Text_Diff_Renderer_inline();
 * echo $renderer->render($diff);
 * </code>
 *
 * Copyright 2005 Örjan Persson <o@42mm.org>
 * Copyright 2005-2010 The Horde Project (http://www.horde.org/)
 *
 * See the enclosed file COPYING for license information (LGPL). If you did
 * not receive this file, see https://opensource.org/license/lgpl-2-1/.
 *
 * @author  Örjan Persson <o@42mm.org>
 * @package Text_Diff
 * @since   0.2.0
 */
class Text_Diff_Engine_string
{
    /**
     * Parses a unified or context diff.
     *
     * First param contains the whole diff and the second can be used to force
     * a specific diff type. If the second parameter is 'autodetect', the
     * diff will be examined to find out which type of diff this is.
     *
     * @param string $diff  The diff content.
     * @param string $mode  The diff mode of the content in $diff. One of
     *                      'context', 'unified', or 'autodetect'.
     *
     * @return array  List of all diff operations.
     * @phpstan-param 'context'|'unified'|'autodetect' $mode
     */
    function diff($diff, $mode = 'autodetect')
    {
    }
    /**
     * Parses an array containing the unified diff.
     *
     * @param array $diff  Array of lines.
     *
     * @return array  List of all diff operations.
     */
    function parseUnifiedDiff($diff)
    {
    }
    /**
     * Parses an array containing the context diff.
     *
     * @param array $diff  Array of lines.
     *
     * @return array  List of all diff operations.
     */
    function parseContextDiff(&$diff)
    {
    }
}