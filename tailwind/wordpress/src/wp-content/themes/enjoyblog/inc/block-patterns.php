<?php
/**
 * Block Patterns
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'enjoyblog',
		array( 'label' => esc_html__( 'enjoyblog', 'enjoyblog' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {

	// Large Text.
	register_block_pattern(
		'enjoyblog/large-text',
		array(
			'title'         => esc_html__( 'Large text', 'enjoyblog' ),
			'categories'    => array( 'enjoyblog' ),
			'viewportWidth' => 1440,
			'content'       => '<!-- wp:heading {"align":"none","fontSize":"gigantic","style":{"typography":{"lineHeight":"1.1"}}} --><h2 class="has-gigantic-font-size" style="line-height:1.1">' . esc_html__( 'A new blog theme for WordPress', 'enjoyblog' ) . '</h2><!-- /wp:heading -->',
		)
	);
}