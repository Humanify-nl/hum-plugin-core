<?php
/**
 * No more jumping for read more link.
 *
 * @link https://digwp.com/2010/01/wordpress-more-tag-tricks/
 */

function hum_core_remove_more_jump_link($link) {

$offset = strpos($link, '#more-');

  if ($offset) {
    $end = strpos($link, '"',$offset);

    if ($end) {
      $link = substr_replace($link, '', $offset, $end-$offset);
    }
    return $link;
  }

}

add_filter( 'the_content_more_link', 'hum_core_remove_more_jump_link' );
