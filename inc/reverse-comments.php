<?php
/**
 * Reverse post comments
 *
 */

function hum_core_reverse_comments($comments) {

return array_reverse($comments);

}

add_filter ('comments_array', 'hum_core_reverse_comments');
