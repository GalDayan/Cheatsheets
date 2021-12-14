<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package enjoyblog
 */

get_header(); ?>

	<div class="content-wrap">

	<div id="primary" class="content-area clear">

		<main id="main" class="site-main clear">

		<div class="breadcrumbs clear">		
			<h1>
				<?php printf( esc_html( 'Search Results for %s', 'enjoyblog' ), '"' . get_search_query() . '"' ); ?>			
			</h1>	
		</div><!-- .breadcrumbs -->

		<div id="recent-content" class="content-loop">

			<?php

			if ( have_posts() ) :	
						
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */

				get_template_part( 'template-parts/content', 'loop' );

				endwhile;

				else :

					get_template_part( 'template-parts/content', 'none' );

				?>

			<?php endif; ?>

		</div>

		<?php get_template_part( 'template-parts/pagination', '' ); ?>		

		</main><!-- .site-main -->

	</div><!-- #primary -->

	<?php get_sidebar(); ?>

	</div><!-- .content-wrap -->

<?php get_footer(); ?>

