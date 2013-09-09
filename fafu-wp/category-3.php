<?php get_header(); ?> 
<!--section-->
<section role="main" class="section white_block clearfix">
	<div class="content left">
		<?php if (have_posts()) : ?>
		<div class="main-video block">
			<h2 class="title"><?php single_cat_title(''); ?></h2>
			<ul class="video-list jbox">
				<li class="video-item dib">
					<div class="video-photo"><img src="<? echo get_post_meta($post->ID, 'video-img', true); ?>" alt="<?php the_title(); ?>"></div>
					<h2 class="video-title">
						<?php the_title(); ?>
					</h2>
					<a href="<?php the_permalink(); ?>" class="video-hover">
						<i class="icon icon-play"></i>
					</a>
				</li>
			</ul>
		</div>
		<?php else : ?>
		<!--single & page-->
		<div class="b-post">
			<!--article-->
			<article class="single block">
				<h1 class="single-title break"><?php _e('Пост не найден', 'kubrick'); ?></h1>
				<div class="text single-text page-text break">
					<p></p>
					<p><?php _e('Извините, но того, что вы ищете, здесь нет.', 'kubrick'); ?></p>
					<p></p>
				</div>
			</article>
			<!--end article-->
		</div>
		<!--end single & page-->
		<?php endif; ?>		
	</div>
	<?php get_sidebar(); ?>
</section>
<!--end section-->
<?php get_footer(); ?>