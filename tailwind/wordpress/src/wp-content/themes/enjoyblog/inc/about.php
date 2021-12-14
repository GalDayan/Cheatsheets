<?php
/**
 * EnjoyBlog Theme page
 *
 * @package enjoyblog
 */

function enjoyblog_about_admin_style( $hook ) {
	if ( 'appearance_page_enjoyblog-about' === $hook ) {
		wp_enqueue_style( 'enjoyblog-about-admin', get_theme_file_uri( 'assets/css/about-admin.css' ), null, '1.0' );
	}
}
add_action( 'admin_enqueue_scripts', 'enjoyblog_about_admin_style' );

/**
 * Add theme page
 */
function enjoyblog_menu() {
	add_theme_page( esc_html__( 'About EnjoyBlog', 'enjoyblog' ), esc_html__( 'About EnjoyBlog', 'enjoyblog' ), 'edit_theme_options', 'enjoyblog-about', 'enjoyblog_about_display' );
}
add_action( 'admin_menu', 'enjoyblog_menu' );

/**
 * Display About page
 */
function enjoyblog_about_display() {
	$theme = wp_get_theme();
	?>
	<div class="wrap about-wrap full-width-layout">
		<h1><?php echo esc_html( $theme ); ?></h1>
		<div class="about-theme">
			<div class="theme-description">
				<p class="about-text">
					<?php
					// Remove last sentence of description.
					$description = explode( '. ', $theme->get( 'Description' ) );

					array_pop( $description );

					$description = implode( '. ', $description );

					echo esc_html( $description . '.' );
				?></p>
				<p class="actions">
					<a href="<?php echo esc_url( $theme->get( 'ThemeURI' ) ); ?>" class="button button-secondary" target="_blank"><?php esc_html_e( 'Theme Demo', 'enjoyblog' ); ?></a>

					<a href="<?php echo esc_url( $theme->get( 'AuthorURI' ) . '/documentation/enjoyblog' ); ?>" class="button button-secondary" target="_blank"><?php esc_html_e( 'Documentation', 'enjoyblog' ); ?></a>

					<a href="<?php echo esc_url( $theme->get( 'AuthorURI' ) . '/themes' ); ?>" class="button button-primary" target="_blank"><?php esc_html_e( 'More Themes', 'enjoyblog' ); ?></a>
				</p>
			</div>

			<div class="theme-screenshot">
				<img src="<?php echo esc_url( $theme->get_screenshot() ); ?>" />
			</div>

		</div>

	</div>
	<?php
}