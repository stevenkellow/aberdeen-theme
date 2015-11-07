<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>
	<span class="post-info single-meta-author">
			<?php echo get_avatar( get_the_author_meta( 'ID' ), 50 ); ?>&nbsp;<?php the_author_posts_link(); ?>&nbsp;
	</span>&nbsp;
	<span class="post-info single-meta-date">
	<i class="fa fa-calendar fa-lg"></i>&nbsp;<?php the_time('F jS, Y - g:ia'); ?>
	</span>&nbsp;	
	<span class="post-info single-meta-cat">
	<i class="fa fa-archive fa-lg"></i>&nbsp;<?php the_category(', ') ?>
	</span>