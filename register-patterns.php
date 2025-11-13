<?php
/**
 * Handles the registration of custom block patterns and categories.
 *
 * @package HussainasBlockPatternModule
 */

// Prevent direct script access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register custom block pattern categories.
 */
function hussainas_register_pattern_categories() {
	// Register a custom category for all 'hussainas' patterns.
	register_block_pattern_category(
		'hussainas-general',
		array( 'label' => __( 'Hussainas Patterns', 'hussainas' ) )
	);
}
add_action( 'init', 'hussainas_register_pattern_categories' );


/**
 * Register the custom block patterns.
 */
function hussainas_register_block_patterns() {
	// Ensure the registration function exists (WP 5.5+).
	if ( ! function_exists( 'register_block_pattern' ) ) {
		return;
	}

	// Register the 'Team Member Section' pattern.
	register_block_pattern(
		'hussainas/team-member-section', // Namespaced pattern name.
		array(
			'title'         => __( 'Team Member Section', 'hussainas' ),
			'description'   => __( 'A three-column layout for displaying team members with photos, names, and titles.', 'hussainas' ),
			'categories'    => array( 'hussainas-general', 'columns' ),
			'keywords'      => array( 'team', 'member', 'person', 'profile', 'staff' ),
			'viewportWidth' => 1200, // Provides a better preview width in the inserter.
			'content'       => hussainas_get_pattern_markup( 'team-member-section' ), // Get content from a separate file.
		)
	);

	// --- Add new patterns here by copying the block above ---
	/*
	register_block_pattern(
		'hussainas/another-pattern',
		array(
			'title'       => __( 'Another Pattern', 'hussainas' ),
			'description' => __( 'Description of another pattern.', 'hussainas' ),
			'categories'  => array( 'hussainas-general' ),
			'content'     => hussainas_get_pattern_markup( 'another-pattern' ),
		)
	);
	*/
}
add_action( 'init', 'hussainas_register_block_patterns' );


/**
 * Helper function to get pattern markup from a file.
 *
 * This keeps the registration function clean and allows pattern
 * markup to be stored in its own file.
 *
 * @param string $pattern_slug The slug of the pattern file.
 * @return string The block markup.
 */
function hussainas_get_pattern_markup( $pattern_slug ) {
	$pattern_file = HUSSAINAS_BLOCK_PATTERN_PATH . $pattern_slug . '.php';

	// Check if the file exists.
	if ( ! file_exists( $pattern_file ) ) {
		// Return an empty string or a WP_Error to handle it gracefully.
		return '';
	}

	// Start output buffering to capture the file's contents.
	ob_start();

	// Include the file. The file itself only contains the block markup.
	include $pattern_file;

	// Get the buffered content and clean the buffer.
	$markup = ob_get_clean();

	// Return the markup.
	return $markup;
}
