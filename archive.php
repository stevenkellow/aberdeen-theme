<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Aberdeen
 */
get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<h1 class="page-title">
				<?php 
				if ( is_category() ){
					echo single_cat_title( '<i class="fa fa-archive"></i>&nbsp;' );
				}
				if ( is_tag() ){
					echo single_tag_title( '<i class="fa fa-tags"></i>&nbsp;' );
				}
				if ( is_date() ){
					echo '<i class="fa fa-calendar"></i>&nbsp;' . get_the_date( 'F Y' );
				}
				?>
				</h1>
				<?php
				if ( is_author() ){
					get_template_part( 'template-parts/author-box' );
				}
				?>
				<?php
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php
					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );
				?>				
			<?php endwhile; ?>
			<div class="nav-previous alignright"><?php next_posts_link( __( 'Older Posts <i class="fa fa-arrow-right fa-3x"></i>', 'aberdeen' ) ); ?></div>
			<div class="nav-next"><?php previous_posts_link( __( '<i class="fa fa-arrow-left fa-3x"></i> Newer Posts', 'aberdeen' ) ); ?></div>
		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
