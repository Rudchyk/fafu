<li class="main-player dib">
	<div class="main-player-window">
		<a href="<?php the_permalink(); ?>" class="b">
			<div class="main-player-photo">
				<?php $postimageurl = get_post_meta($post->ID, 'photo', true); ?>
				<?php if ($postimageurl) {?>
				<img src="<? echo get_post_meta($post->ID, 'photo', true); ?>" alt="<?php the_title(); ?>">
				<?php }else {?>
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/required/nophoto.jpg" alt="<?php _e('Нету фото', 'kubrick'); ?>">
				<?php }?>
				<div class="main-player-info">
					<? echo get_post_meta($post->ID, 'pos', true); ?> <strong>#<? echo get_post_meta($post->ID, 'number', true); ?></strong>
				</div>									
			</div>
			<div class="main-player-name tac">
				<strong>
				<?php 
					$surname = get_the_title($post->ID);
				  	$surname = stristr($surname, ' ' );
				  	echo $surname;					
				?>						
				</strong>
				<?php 
					$name = get_the_title($post->ID);
				  	$name = substr($name, 0, strpos($name, ' ' ));
				  	echo $name;					
				?>					
			</div>
		</a>
	</div>
</li>