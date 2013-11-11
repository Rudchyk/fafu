<div class="future-games clearfix <?php echo get_option('display'); ?>">
<div class="future-games-title left"><?php _e('Ожидайте', 'kubrick'); ?>:</div>
<div class="future-games-slider sliderkit carousel right">
	<div class="sliderkit-nav">
		<div class="sliderkit-nav-clip">
			<ul class="future-games-list">
				<?php
				$args = array( 'numberposts' => 1, 'posts_per_page' => 8, 'category' => "10", 'order'=> 'ASC' );
				$lastposts = get_posts( $args );
				foreach($lastposts as $post) : setup_postdata($post); ?>
				<li class="future-game">
					<div class="future-game-team future-game-team-first">
						<a href="/<? echo get_post_meta($post->ID, 'home-team', true); ?>/">
							<i class="icon team-square-icon  <? echo get_post_meta($post->ID, 'home-team', true); ?>-square-icon"></i>
							<span class="future-game-team-name"><? echo get_post_meta($post->ID, 'home-team-name', true); ?></span>
						</a>
					</div>
					<div class="future-game-box">
						<div class="vs"><?php _e('VS', 'kubrick'); ?>.</div>
						<div class="future-game-info">
							<span class="fixed-tooltip-wrapper">
								<i class="icon championship-very-small-icon <? echo get_post_meta($post->ID, 'championship', true); ?>-very-small-icon"></i>
								<span class="fixed-tooltip"></span>
							</span>
							<span class="future-game-data"><? echo get_post_meta($post->ID, 'game-day', true); ?></span>
						</div>
					</div>
					<div class="future-game-team future-game-team-last">
						<a href="/<? echo get_post_meta($post->ID, 'visited-team', true); ?>/">
							<i class="icon team-square-icon  <? echo get_post_meta($post->ID, 'visited-team', true); ?>-square-icon"></i>
							<span class="future-game-team-name"><? echo get_post_meta($post->ID, 'visited-team-name', true); ?></span>
						</a>
					</div>
				</li>
				<?php endforeach; ?>
			</ul>
		</div>
		<div class="sliderkit-btn sliderkit-nav-btn sliderkit-nav-prev">
			<a href="#"></a>
		</div>
		<div class="sliderkit-btn sliderkit-nav-btn sliderkit-nav-next">
			<a href="#" ></a>
		</div>
	</div>
</div>
</div>

