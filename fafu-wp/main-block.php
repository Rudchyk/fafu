<div class="main-block clearfix white_block">
	<!--sliderkit-->
	<div class="main-carousel sliderkit carousel left">
		<div class="sliderkit-nav">
			<div class="sliderkit-nav-clip">
				<ul>
					<li>
						<a href="#"><span class="slider-nav-icon slider-icon icon"></span></a>
					</li>
					<li>
						<a href="#"><span class="slider-nav-icon slider-icon icon"></span></a>
					</li>
					<li>
						<a href="#"><span class="slider-nav-icon slider-icon icon"></span></a>
					</li>
					<li>
						<a href="#"><span class="slider-nav-icon slider-icon icon"></span></a>
					</li>
					<li>
						<a href="#"><span class="slider-nav-icon slider-icon icon"></span></a>
					</li>
				</ul>
			</div>								
		</div>
		<div class="sliderkit-panels">
			<?php
			$args = array( 'numberposts' => 1, 'posts_per_page' => 5, 'category' => "8" );
			$lastposts = get_posts( $args );
			foreach($lastposts as $post) : setup_postdata($post); ?>			
			<div class="sliderkit-panel">
				<a href="<?php the_permalink(); ?>">
					<?php $postimageurl = get_post_meta($post->ID, 'slide', true); ?>
					<?php if ($postimageurl) {?>
					<img src="<? echo get_post_meta($post->ID, 'slide', true); ?>" alt="<?php the_title(); ?>">
					<?php }else {?>
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/required/noslide.jpg" alt="<?php _e('Нету фото', 'kubrick'); ?>">
					<?php }?>
				</a>
				<div class="main-carousel-content">
					<h2 class="main-carousel-title"><a href="<?php the_permalink(); ?>" class="main-carousel-title-link"><?php the_title(); ?></a></h2>
					<div class="main-carousel-text">
						<?php the_excerpt_max_charlength(100); ?> <a href="<?php the_permalink() ?>#more-<?php the_ID(); ?>" class="main-carousel-more"><?php _e('читать далее', 'kubrick'); ?>...</a>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
	<!--end sliderkit-->
	<div class="tabs-section main-tabs-section right">
		<ul class="tabs home-tabs">
			<li class="tabs-item current"><?php _e('Высшая лига', 'kubrick'); ?></li>
			<li class="tabs-item"><?php _e('Первая лига', 'kubrick'); ?></li>
			<li class="tabs-item"><?php _e('Кубок', 'kubrick'); ?></li>
		</ul>
		<div class="tabs-box visible">
			<div class="news-carousel sliderkit carousel">
				<div class="sliderkit-nav">
					<div class="sliderkit-nav-clip">
						<ul class="news-carousel-list">
							<?php
							$args = array( 'numberposts' => 1, 'posts_per_page' => 5, 'category' => "5" );
							$lastposts = get_posts( $args );
							foreach($lastposts as $post) : setup_postdata($post); ?>							
							<li class="news-carousel-item">
								<h2 class="news-carousel-title"><a href="<?php the_permalink(); ?>" class="news-carousel-title-link"><?php the_title(); ?></a></h2>
								<div class="news-carousel-data"><?php the_time('d.m.Y') ?></div>
								<div class="news-carousel-text">
									<?php the_excerpt_max_charlength(400); ?>
								</div>
							</li>
							<?php endforeach; ?>
						</ul>
					</div>
					<div class="sliderkit-btn sliderkit-nav-btn sliderkit-nav-prev">
						<a href="#"></a>
					</div>
					<div class="sliderkit-btn sliderkit-nav-btn sliderkit-nav-next">
						<a href="#"></a>
					</div>
				</div>
			</div>
		</div>
		<div class="tabs-box">
			<ul class="main-list-news">
				<?php
				$args = array( 'numberposts' => 1, 'posts_per_page' => 9, 'category' => "6" );
				$lastposts = get_posts( $args );
				foreach($lastposts as $post) : setup_postdata($post); ?>				
				<li class="main-item-news clearfix">
					<div class="main-item-data left"><?php the_time('d.m') ?></div>
					<div class="main-item-content">
						<div class="main-link-news dib overflow_text">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						</div>
					</div>
				</li>
				<?php endforeach; ?>
			</ul>
			<p class="tar main-list-more"><a href="/category/pervaya-liga/"><?php _e('Все новости', 'kubrick'); ?></a></p>
		</div>
		<div class="tabs-box">
			<ul class="main-list-news">
				<?php
				$args = array( 'numberposts' => 1, 'posts_per_page' => 9, 'category' => "7" );
				$lastposts = get_posts( $args );
				foreach($lastposts as $post) : setup_postdata($post); ?>				
				<li class="main-item-news clearfix">
					<div class="main-item-data left"><?php the_time('d.m') ?></div>
					<div class="main-item-content">
						<div class="main-link-news dib overflow_text">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						</div>
					</div>
				</li>
				<?php endforeach; ?>
			</ul>
			<p class="tar main-list-more"><a href="/category/kubok/"><?php _e('Все новости', 'kubrick'); ?></a></p>				
		</div>
	</div>				
</div>

