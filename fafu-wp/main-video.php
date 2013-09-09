<div class="main-video block">
	<h2 class="title"><?php _e('Свежее видео', 'kubrick'); ?> <a href="#" class="icon more-icon"></a></h2>
	<ul class="video-list jbox">
		<?php
		$args = array( 'numberposts' => 1, 'posts_per_page' => 4, 'category' => "2" );
		$lastposts = get_posts( $args );
		foreach($lastposts as $post) : setup_postdata($post); ?>		
		<li class="video-item dib">
			<div class="video-photo"><img src="<? echo get_post_meta($post->ID, 'video-img', true); ?>" alt="<?php the_title(); ?>"></div>
			<h2 class="video-title">
				<?php the_title(); ?>
			</h2>
			<a href="<?php the_permalink(); ?>" class="video-hover">
				<i class="icon icon-play"></i>
			</a>
		</li>
		<?php endforeach; ?>
	</ul>
</div>

