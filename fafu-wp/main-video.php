<div class="main-video block">
	<h2 class="title"><?php _e('Свежее видео', 'kubrick'); ?> <a href="/category/video/" class="icon more-icon"></a></h2>
	<ul class="video-list jbox">
		<?php
		$args = array( 'numberposts' => 1, 'posts_per_page' => 4, 'category' => "7" );
		$lastposts = get_posts( $args );
		foreach($lastposts as $post) : setup_postdata($post); ?>		
		<?php include (TEMPLATEPATH . '/video-item.php'); ?>
		<?php endforeach; ?>
	</ul>
</div>

