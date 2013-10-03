<!--post-->
<div class="post">
	<h2 class="post-title break"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<div class="post-box clearfix">
		<div class="post-img-search left">
			<a href="<?php the_permalink(); ?>">
				<?php $postimageurl = get_post_meta($post->ID, 'photo', true); ?>
				<?php if ($postimageurl) {?>
				<img src="<? echo get_post_meta($post->ID, 'photo', true); ?>" alt="<?php the_title(); ?>">
				<?php }else {?>
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/required/nophoto.jpg" alt="<?php _e('Нету фото', 'kubrick'); ?>">
				<?php }?>
			</a>
		</div>
		<div class="post-content post-content-search">
			<div class="post-text break">
				<?php the_excerpt_max_charlength(450); ?>								
			</div>
			<div class="post-more"><a href="<?php the_permalink() ?>#more-<?php the_ID(); ?>" class="post-more-link"><i class="icon post-more-icon"></i><span><?php _e('Читать полностью', 'kubrick'); ?></span></a></div>
		</div>
	</div>
</div>
<!--end post-->