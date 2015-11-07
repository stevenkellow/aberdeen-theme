<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Aberdeen
 */
get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="error-404 not-found">			
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'aberdeen' ); ?></h1>
				</header><!-- .page-header -->
				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Check the links below or try a search?', 'aberdeen' ); ?></p>					<!-- Header search form -->					<form class="header-search" method="get" id="searchform" action="<?php echo esc_url( home_url() ); ?>/">					<div><input type="text" size="18" value="<?php echo esc_html( $s ); ?>" name="s" id="header-search" />					<input type="submit" id="header-search" value="Search" class="submit" />					</div>					</form>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
