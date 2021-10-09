<?php
/**
 * Hum Base security tweaks
 *
 * @package hum-core-functionality
 */

/**
 * Remove WordPress version info from head and feeds.
 */
function hum_core_complete_version_removal() {

 	return '';

}

add_filter( 'the_generator', 'hum_core_complete_version_removal' );


/**
 * Remove error message on the login page.
 *
 * @link https://www.wpbeginner.com/wp-tutorials/how-to-disable-login-hints-in-wordpress-login-error-messages/
*/

function hum_core_no_wordpress_errors(){

  return 'Login is mislukt, neem contact op';
}

add_filter( 'login_errors', 'hum_core_no_wordpress_errors' );


/**
 * Remove junk from head.
 *
 * @link https://scotch.io/quick-tips/removing-wordpress-header-junk
 */

remove_action( 'wp_head', 'rsd_link' ); // remove really simple discovery link
remove_action( 'wp_head', 'wp_generator' ); // remove wordpress version
remove_action( 'wp_head', 'wlwmanifest_link' ); // remove wlwmanifest.xml (needed to support windows live writer)
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 ); // remove random post link
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); // remove parent post link
remove_action( 'wp_head', 'feed_links', 2 ); // remove rss feed links (make sure you add them in yourself if you're using feedblitz or an rss project)
remove_action( 'wp_head', 'feed_links_extra', 3 ); // removes all extra rss feed links
remove_action( 'wp_head', 'index_rel_link' ); // remove link to index page
// remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 ); // remove the next and previous post links
// remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
// remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
