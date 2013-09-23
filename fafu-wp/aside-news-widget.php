<li class="widget news-widget">
	<h2 class="widgettitle"><?php _e('Последние новости', 'kubrick'); ?></h2>
	<ul class="aside-news-list">
		<?php
		$args = array( 'numberposts' => 1, 'posts_per_page' => 5, 'category' => "8" );
		$lastposts = get_posts( $args );
		foreach($lastposts as $post) : setup_postdata($post); ?>		
		<li class="aside-news-item clear clearfix">
			<div class="aside-news-img left">
				<div class="aside-news-img-window">
					<a href="<?php the_permalink(); ?>">
						<?php
						if ( has_post_thumbnail() ) {
							the_post_thumbnail('thumbnail');
						?>
						<?php }else {?>
							<img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>">
						<?php }?>
					</a>
				</div>
			</div>
			<div class="aside-news-content">
				<h2 class="aside-news-title break"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<div class="aside-news-data"><?php the_time('d.m.Y') ?></div>
			</div>								
		</li>
		<?php endforeach; ?>
	</ul>
</li>

