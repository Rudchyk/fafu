<div class="main-players block">
	<h2 class="title"><?php _e('Члены сборной Украины', 'kubrick'); ?> <a href="#" class="icon more-icon"></a></h2>
	<ul class="main-players-list jbox">
		<?php
		$args = array( 'numberposts' => 1, 'posts_per_page' => 4, 'category' => "2" );
		$lastposts = get_posts( $args );
		foreach($lastposts as $post) : setup_postdata($post); ?>		
		<li class="main-player dib">
			<div class="main-player-window">
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
			</div>
		</li>
		<?php endforeach; ?>
	</ul>
</div>

