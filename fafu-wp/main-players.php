<div class="main-players block">
	<h2 class="title"><?php _e('Члены сборной Украины', 'kubrick'); ?> <a href="/category/sbornaya-ukrainy/" class="icon more-icon"></a></h2>
	<ul class="main-players-list jbox">
		<?php
		$args = array( 'numberposts' => 1, 'posts_per_page' => 4, 'category' => "4", 'orderby' => 'rand' );
		$lastposts = get_posts( $args );
		foreach($lastposts as $post) : setup_postdata($post); ?>		
		<?php include (TEMPLATEPATH . '/main-player.php'); ?>
		<?php endforeach; ?>
	</ul>
</div>

