<li class="video-item dib">
	<div class="video-photo">
		<?php $postimageurl = get_post_meta($post->ID, 'video-img', true); ?>
		<?php if ($postimageurl) {?>
		<img src="<? echo get_post_meta($post->ID, 'video-img', true); ?>" alt="<?php the_title(); ?>">
		<?php }else {?>
		<img src="<?php bloginfo('stylesheet_directory'); ?>/images/required/novideo.jpg" alt="<?php _e('Нету превью', 'kubrick'); ?>">
		<?php }?>		
	</div>
	<h2 class="video-title">
		<?php the_title(); ?>
	</h2>
	<a href="<?php the_permalink(); ?>" class="video-hover">
		<i class="icon icon-play"></i>
	</a>
</li>