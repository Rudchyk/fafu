<?php get_header(); ?> 
<!--section-->
<section role="main" class="section white_block clearfix">
	<div class="content left">
		<?php if (have_posts()) : ?>
		<div class="main-players block">
			<h2 class="title"><?php single_cat_title(''); ?></h2>
			<ul class="main-players-list tac no-players-list">
				<?php while (have_posts()) : the_post(); ?> 
				<li class="main-player dib">
					<div class="main-player-window">
						<div class="main-player-status"><? echo get_post_meta($post->ID, 'status', true); ?></div>
						<div class="main-player-photo">
							<?php $postimageurl = get_post_meta($post->ID, 'photo', true); ?>
							<?php if ($postimageurl) {?>
							<img src="<? echo get_post_meta($post->ID, 'photo', true); ?>" alt="<?php the_title(); ?>">
							<?php }else {?>
							<img src="<?php bloginfo('stylesheet_directory'); ?>/images/required/nophoto.jpg" alt="<?php _e('Нету фото', 'kubrick'); ?>">
							<?php }?>									
						</div>
						<div class="main-player-name tac">
							<strong>
							<?php 
								$surname = get_the_title($post->ID);
							  	$surname = mb_substr($surname, 0, stristr($surname, ' ' ));
							  	echo $surname;					
							?>								
							</strong>
							<?php 
								$name = get_the_title($post->ID);
							  	$name = mb_substr($name, 0, strpos($name, ' ' ));
							  	echo $name;					
							?>							
						</div>
						<div class="main-player-city tac">
							(<? echo get_post_meta($post->ID, 'city', true); ?>)
						</div>
					</div>
				</li>
				<?php endwhile; ?>
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