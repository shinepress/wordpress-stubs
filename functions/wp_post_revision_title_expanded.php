<?php


/**
 * Retrieve formatted date timestamp of a revision (linked to that revisions's page).
 *
 * @since 3.6.0
 *
 * @param int|object $revision Revision ID or revision object.
 * @param bool       $link     Optional, default is true. Link to revisions's page?
 * @return string|false gravatar, user, i18n formatted datetimestamp or localized 'Current Revision'.
 */
function wp_post_revision_title_expanded($revision, $link = \true)
{
}