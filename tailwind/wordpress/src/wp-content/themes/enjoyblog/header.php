<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package enjoyblog
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="HandheldFriendly" content="true">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
	//wp_body_open hook from WordPress 5.2
	if ( function_exists( 'wp_body_open' ) ) {
	    wp_body_open();
	} else { 
	    do_action( 'wp_body_open' ); 
	}
?>

<div id="page" class="site <?php if (is_admin_bar_showing()) { echo 'has-admin-bar'; } else { echo 'no-admin-bar'; }?>">

	<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content', 'enjoyblog' ); ?></a>

	<header id="masthead" class="site-header clear">

		<div class="site-start container clear">

			<div class="mobile-branding">

				<?php if ( has_custom_logo() ) { ?>

					<div id="logo">
						<?php the_custom_logo(); ?>
					</div><!-- #logo -->

				<?php } ?>

				<?php if (display_header_text()==true) { ?>

					<div class="site-title-desc">

						<div class="site-title">
							<a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo('name'); ?></a>
						</div><!-- .site-title -->	

						<div class="site-description">
							<?php bloginfo('description'); ?>
						</div><!-- .site-desc -->

					</div><!-- .site-title-desc -->

				<?php } ?>

			</div><!-- .site-branding -->	

			<div class="header-toggles">
				<button class="toggle nav-toggle mobile-nav-toggle" data-toggle-target=".menu-modal"  data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
					<span class="toggle-inner">
						<span class="toggle-icon">
							<?php enjoyblog_the_theme_svg( 'ellipsis' ); ?>
						</span>
						<span class="toggle-text"><?php esc_html_e( 'Menu', 'enjoyblog' ); ?></span>
					</span>
				</button><!-- .nav-toggle -->
			</div><!-- .header-toggles -->	

		</div><!-- .site-start -->			

	</header><!-- #masthead -->

	<div class="menu-modal cover-modal header-footer-group" data-modal-target-string=".menu-modal">

		<div class="menu-modal-inner modal-inner">

			<div class="menu-wrapper section-inner">

				<div class="menu-top">

					<button class="toggle close-nav-toggle fill-children-current-color" data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".menu-modal">
						<span class="toggle-text"><?php esc_html_e( 'Close Menu', 'enjoyblog' ); ?></span>
						<?php enjoyblog_the_theme_svg( 'cross' ); ?>
					</button><!-- .nav-toggle -->

					<?php

					$mobile_menu_location = '';

					// If the mobile menu location is not set, use the secondary location as fallbacks, in that order.
					if ( has_nav_menu( 'mobile' ) ) {
						$mobile_menu_location = 'mobile';
					} elseif ( has_nav_menu( 'primary' ) ) {
						$mobile_menu_location = 'primary';
					}

					?>

					<nav class="mobile-menu" aria-label="<?php esc_attr_e( 'Mobile', 'enjoyblog' ); ?>" role="navigation">

						<ul class="modal-menu reset-list-style">

						<?php
						if ( $mobile_menu_location ) {

							wp_nav_menu(
								array(
									'container'      => '',
									'items_wrap'     => '%3$s',
									'show_toggles'   => true,
									'theme_location' => $mobile_menu_location,
								)
							);

						} else {

							wp_list_pages(
								array(
									'match_menu_classes' => true,
									'show_toggles'       => true,
									'title_li'           => false,
									'walker'             => new EnjoyBlog_Walker_Page(),
								)
							);

						}
						?>

						</ul>

					</nav>

				</div><!-- .menu-top -->

			</div><!-- .menu-wrapper -->

		</div><!-- .menu-modal-inner -->

	</div><!-- .menu-modal -->		
		
	<div id="content" class="site-content <?php if ( is_active_sidebar( 'home' ) ) { echo 'has-home-widget'; } else { 'no-home-widget'; } ?> container">

		<div class="clear">

		<?php get_template_part('template-parts/sidebar', 'left'); ?>
