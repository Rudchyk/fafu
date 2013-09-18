<div class="last-games">
	<div class="last-games-window">
		<?php
		$args = array( 'numberposts' => 1, 'posts_per_page' => 3, 'category' => "11" );
		$lastposts = get_posts( $args );
		foreach($lastposts as $post) : setup_postdata($post); ?>		
		<div class="last-game">
			<a href="<?php the_permalink(); ?>">
				<div class="dib last-game-championship"><i class="icon championship-small-icon <? echo get_post_meta($post->ID, 'championship', true); ?>-small-icon"></i></div>
				<div class="dib last-game-team">
					<h2 class="last-game-team-name"><? echo get_post_meta($post->ID, 'home-team-name', true); ?></h2>
					<div class="last-game-team-sity"><? echo get_post_meta($post->ID, 'home-team-city', true); ?></div>
				</div>
				<div class="dib last-game-info">
					<div class="last-game-score"><? echo get_post_meta($post->ID, 'game-score', true); ?></div>
					<div class="last-game-data"><? echo get_post_meta($post->ID, 'game-day', true); ?></div>
				</div>
				<div class="dib last-game-team">
					<h2 class="last-game-team-name"><? echo get_post_meta($post->ID, 'visited-team-name', true); ?></h2>
					<div class="last-game-team-sity"><? echo get_post_meta($post->ID, 'visited-team-city', true); ?></div>
				</div>
			</a>
		</div>
		<?php endforeach; ?>
	</div>
</div>

