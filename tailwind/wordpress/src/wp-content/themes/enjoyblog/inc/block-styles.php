<?php
/**
 * Block Styles
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 */
	function enjoyblog_register_block_styles() {
		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'enjoyblog-border',
				'label' => esc_html__( 'Borders', 'enjoyblog' ),
			)
		);
	}
	add_action( 'init', 'enjoyblog_register_block_styles' );
}
