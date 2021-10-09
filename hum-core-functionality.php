<?php
/**
 * Plugin Name: Core Functionality
 * Description: This contains all your site's core functionality so that it is theme independent. <strong>It should always be activated</strong>.
 * Version:     1.2.1
 * Author:      Bill Erickson & Jared Atchison
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 2, as published by the
 * Free Software Foundation.  You may NOT assume that you can use any other
 * version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.
 *
 * @package    CoreFunctionality
 * @since      1.0.0
 * @copyright  Copyright (c) 2014, Bill Erickson & Jared Atchison
 * @license    GPL-2.0+
 */

// Plugin directory
define( 'HUM_DIR' , plugin_dir_path( __FILE__ ) );

require_once( HUM_DIR . '/inc/setup-block-areas.php' );
require_once( HUM_DIR . '/inc/security-tweaks.php' );
require_once( HUM_DIR . '/inc/reverse-comments.php' );
require_once( HUM_DIR . '/inc/remove-more-jump-links.php' );
// more...