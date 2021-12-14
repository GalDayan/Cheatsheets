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
					<?php echo wp_kses_post( get_the_archive_title('') ); ?>					
				</h1>	
				<?php
					if (is_category()) {
						$term_description = term_description();
						if ( ! empty( $term_description ) ) {
							printf( '<div class="taxonomy-description">%s</div>', wp_kses_post($term_description) );
						}
					}
				?>			
			</div><!-- .breadcrumbs -->

			<div id="recent-content" class="content-loop">

				<?php

				if ( have_posts() ) :	
				
				$i = 1;		
					
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					get_template_part('template-parts/content', 'loop');

					$i++;

				endwhile;

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; 

				?>

			</div><!-- #recent-content -->

			<?php get_template_part( 'template-parts/pagination', '' ); ?>

		</main><!-- .site-main -->

	</div><!-- #primary -->

	<?php get_sidebar(); ?>

	</div><!-- .content-wrap -->
	
<?php get_footer(); ?>

