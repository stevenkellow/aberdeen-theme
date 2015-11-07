<?php
// Get Author Data
$author             = get_the_author();
$author_description = get_the_author_meta( 'description' );
$author_url         = esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) );
$author_avatar      = get_avatar( get_the_author_meta( 'ID' ), 100 );
$author_twitter		= get_the_author_meta( 'twitter' );
$author_facebook	= get_the_author_meta( 'facebook' );
$author_google_plus = get_the_author_meta( 'google-plus');
$author_linkedin	= get_the_author_meta( 'linkedin');
?>
    <div class="author-box">
        <h1>
				<?php if ( $author_avatar ) { ?>
                        <a href="<?php echo $author_url; ?>" rel="author">
                        <?php echo $author_avatar; ?>
                    </a>
				<?php } ?>
				<?php echo $author; ?>
				<?php if ( $author_facebook ) { ?>
					<a href="<?php echo $author_facebook; ?>">
						<i class="fa fa-facebook"></i>
					</a>
				<?php } ?>
				<?php if ( $author_twitter ) { ?>
					<a href="<?php echo $author_twitter; ?>">
						<i class="fa fa-twitter"></i>
					</a>
				<?php } ?>
				<?php if ( $author_google_plus ) { ?>
					<a href="<?php echo $author_google_plus; ?>">
						<i class="fa fa-google-plus"></i>
					</a>
				<?php } ?>				
				<?php if ( $author_linkedin ) { ?>
					<a href="<?php echo $author_linkedin; ?>">
						<i class="fa fa-linkedin"></i>
					</a>
				<?php } ?>
            </h1>
            <div class="author-description">
                <p><?php echo $author_description; ?></p>
				<?php if( !is_author() ){ ?>
                <p><a href="<?php echo $author_url; ?>" title="<?php _e( 'View all author posts', 'aberdeen' ); ?>"><?php _e( 'View all author posts', 'aberdeen' ); ?> &rarr;</a></p>
				<?php } ?>
            </div><!-- .author-description -->
    </div><!-- .author-info -->