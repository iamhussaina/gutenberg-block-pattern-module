<?php
/**
 * Main loader file for the Block Pattern Module.
 *
 * Include this file in your theme's functions.php to activate the module.
 *
 * @package HussainasBlockPatternModule
 * @version     1.0.0
 * @author      Hussain Ahmed Shrabon
 * @license     GPLv2 or later
 * @link        https://github.com/iamhussaina
 * @textdomain  hussainas
 */

// Prevent direct script access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Define module constants for reliable file includes.
 */

// Path to the root of this module directory.
if ( ! defined( 'HUSSAINAS_BLOCK_PATTERN_MODULE_PATH' ) ) {
	define( 'HUSSAINAS_BLOCK_PATTERN_MODULE_PATH', trailingslashit( __DIR__ ) );
}

// Path to the 'patterns' subdirectory.
if ( ! defined( 'HUSSAINAS_BLOCK_PATTERN_PATH' ) ) {
	define( 'HUSSAINAS_BLOCK_PATTERN_PATH', HUSSAINAS_BLOCK_PATTERN_MODULE_PATH . 'patterns/' );
}

/**
 * Load the pattern registration logic.
 *
 * This file contains the functions responsible for registering
 * the custom block patterns and categories.
 */
require_once HUSSAINAS_BLOCK_PATTERN_PATH . 'register-patterns.php';
