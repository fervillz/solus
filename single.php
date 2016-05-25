<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Solus
 */
get_header(); ?>
<div class="row">
		<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
				<div id="primary" class="content-area">
						<main id="main" class="site-main" role="main">
								<?php while ( have_posts() ) : the_post(); ?>
								<?php get_template_part( 'template-parts/content', 'single' ); ?>
								<?php the_post_navigation(); ?>
								<?php
									// If comments are open or we have at least one comment, load up the comment template.
									if ( comments_open() || get_comments_number() ) :
										comments_template();
									endif;
								?>
								<?php endwhile; // End of the loop. ?>
						</main>
						<!-- #main -->
				</div>
				<!-- #primary -->
		</div>
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<?php get_sidebar(); ?>
		</div>
</div>
<?php get_footer(); ?>
