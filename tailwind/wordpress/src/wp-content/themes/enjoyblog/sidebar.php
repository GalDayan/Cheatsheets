<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package enjoyblog
 */


?>

<aside id="secondary" class="widget-area sidebar">

<?php dynamic_sidebar( 'sidebar-1' ); ?>

<div id="site-bottom">

	<?php 
		if ( has_nav_menu( 'footer' ) ) {
			wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'footer-menu', 'menu_class' => 'footer-nav' ) );
		}
	?>	
	
	<div class="site-info">

		<?php
			$enjoyblog_theme = wp_get_theme();
		?>

		&copy; <?php echo esc_html( date("o") ); ?> <?php echo esc_html( get_bloginfo('name') ); ?> - <a href="<?php echo esc_url( $enjoyblog_theme->get( 'AuthorURI' ) ); ?>"><?php esc_html_e('WordPress Theme', 'enjoyblog'); ?></a> <?php esc_html_e('by', 'enjoyblog'); ?> <a href="<?php echo esc_url( $enjoyblog_theme->get( 'AuthorURI' ) ); ?>"><?php esc_html_e('WPEnjoy', 'enjoyblog'); ?></a>

	</div><!-- .site-info -->

</div><!-- #site-bottom -->

</aside><!-- #secondary -->

