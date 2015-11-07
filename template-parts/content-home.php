<?php
/**
 * Template part for displaying posts on home page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Aberdeen
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
		?>
		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php get_template_part( 'template-parts/entry-meta'); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
	<div class="archive-thumbnail">
		<?php
		// checks for the post thumbnail
		if ( has_post_thumbnail() ) { ?>
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail('medium'); ?>
		</a>
		<?php } ?>
	</div>
	<div class="archive-excerpt">
		<?php
			the_excerpt( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'aberdeen' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>
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
