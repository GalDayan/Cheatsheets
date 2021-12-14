<div class="left-sidebar left_sidebar">

	<?php
		the_custom_header_markup();
	?>

	<div class="site-branding">

		<?php if ( has_custom_logo() ) { ?>

			<div id="logo">
				<?php the_custom_logo(); ?>
			</div><!-- #logo -->

		<?php } ?>

		<?php if (display_header_text()==true) { ?>

			<div class="site-title-desc">

				<div class="site-title">
					<h1><a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo('name'); ?></a></h1>
				</div><!-- .site-title -->	

				<div class="site-description">
					<?php bloginfo('description'); ?>
				</div><!-- .site-desc -->

			</div><!-- .site-title-desc -->

		<?php } ?>

	</div><!-- .site-branding -->	

	<nav id="primary-nav" class="primary-navigation">

		<?php 
			if ( has_nav_menu( 'primary' ) ) {
				wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'sf-menu' ) );
			} else {
		?>

			<ul id="primary-menu" class="sf-menu">
				<li><a href="<?php echo esc_url( home_url() ); ?>"><?php esc_html_e('Home', 'enjoyblog'); ?></a></li>
				<?php wp_list_categories('title_li='); ?>
			</ul><!-- .sf-menu -->

		<?php } ?>

	</nav><!-- #primary-nav -->	

</div><!-- .left-sidebar -->