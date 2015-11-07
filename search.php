<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Aberdeen
 */
get_header(); ?>
	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'aberdeen' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );
				?>
			<?php endwhile; ?>

			<div class="nav-previous alignright"><?php next_posts_link( __( 'Older Posts <i class="fa fa-arrow-right fa-3x"></i>', 'aberdeen' ) ); ?></div>			<div class="nav-next"><?php previous_posts_link( __( '<i class="fa fa-arrow-left fa-3x"></i> Newer Posts', 'aberdeen' ) ); ?></div>
		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>
		</main><!-- #main -->
	</section><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
