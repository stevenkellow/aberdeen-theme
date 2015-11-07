<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Aberdeen
 */
get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', 'single' ); ?>
			<?php get_template_part( 'template-parts/social-media', 'sharing' ); ?>
            <div class="nav-previous alignright"><?php next_posts_link( __( 'Older Posts <i class="fa fa-arrow-right fa-3x"></i>', 'aberdeen' ) ); ?></div>			<div class="nav-next"><?php previous_posts_link( __( '<i class="fa fa-arrow-left fa-3x"></i> Newer Posts', 'aberdeen' ) ); ?></div>
			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
		<?php endwhile; // End of the loop. ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
