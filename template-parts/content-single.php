<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Aberdeen
 */

?>
<?php custom_breadcrumbs(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<div class="entry-meta">
			<?php get_template_part( 'template-parts/entry-meta'); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="featured-image">
		<?php
		if ( has_post_thumbnail() ) {
		the_post_thumbnail();
		echo get_post(get_post_thumbnail_id())->post_excerpt;
		}
		?></div>
		<?php
		the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'aberdeen' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php aberdeen_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

