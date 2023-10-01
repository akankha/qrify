<?php

/*
 * Plugin Name: QRify - WordPress QR Code Generator
 * Description: QRify empowers your WordPress website with the magic of QR codes. Automatically generate QR codes for every page and post, providing a seamless mobile experience for your visitors. Easily share links, content, and information with a simple scan. Customize QR code size, colors, and styles to match your site's branding. Enhance user engagement and accessibility with QRify – your digital gateway to instant information access.
 * Version: 1.0.0
 * Author:Mohi Uddin Ahmed
 * Author URI: https://akankha.com/
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: qrify
 */

// Include the QR code library
require_once(plugin_dir_path(__FILE__) . 'phpqrcode/qrlib.php');


// Include other PHP files
require_once(plugin_dir_path(__FILE__) . 'includes/qrify-admin.php');
require_once(plugin_dir_path(__FILE__) . 'includes/qrify-functions.php');
//Inlcude the QR code library
require_once( plugin_dir_path( __FILE__ ) . 'phpqrcode/qrlib.php' );









