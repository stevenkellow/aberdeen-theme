<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly 

?>
<div class="sharing-si social-icons">
	<h3>Share this:</h3>
	
		<span><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&amp;t=<?php the_title(); ?>" alt="Share on Facebook" title="Share on Facebook"><i class="fa fa-facebook fa-2x"></i></a></span>
	
	
		<span><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" alt="Share on Google Plus" title="Share on Google+"><i class="fa fa-google-plus fa-2x"></i></a></span>
	
	
		<span><a href="http://linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>" alt="Share on LinkedIn" title="Share on LinkedIn"><i class="fa fa-linkedin fa-2x"></i></a></span>
	
		<span><a href="http://www.tumblr.com/share/link?url=<?php the_permalink(); ?>%2F&name=<?php the_title(); ?>"><i class="fa fa-tumblr fa-2x"></i></a></span>
	
		<span><a href="https://twitter.com/intent/tweet?text=<?php the_title(); ?>%20%2D%20<?php the_permalink(); ?>" alt="Share on Twitter" title="Share on Twitter"><i class="fa fa-twitter fa-2x"></i></a></span>

		<span><a href="mailto:?subject=<?php the_title(); ?>&amp;body=<?php the_permalink(); ?>" alt="Share by e-mail" title="Share by e-mail"><i class="fa fa-envelope fa-2x"></i></a></span>

		<span><a href="#" onclick="window.print();return false;" alt="Print this page" title="Print this Page"><i class="fa fa-print fa-2x"></i></a></span>		
</div>