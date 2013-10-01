<?php
/*
Single Post Template: referee
*/
?>
<?php get_header(); ?> 
<!--section-->
<section role="main" class="section white_block">
	<?php if (have_posts()) : ?>
	<div class="page-player block">
		<?php while (have_posts()) : the_post(); ?> 
		<div class="player-page-info">
			<?php $postimageurl = get_post_meta($post->ID, 'person', true); ?>
			<?php if ($postimageurl) {?>
			<img src="<? echo get_post_meta($post->ID, 'person', true); ?>" alt="<?php the_title(); ?>">
			<?php }else {?>
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/required/noperson.jpg" alt="<?php _e('Нету фото', 'kubrick'); ?>">
			<?php }?>
			<div class="player-page-box">
				<div class="player-page-top clearfix">
					<div class="player-page-photo left">
						<?php $postimageurl = get_post_meta($post->ID, 'photo', true); ?>
						<?php if ($postimageurl) {?>
						<img src="<? echo get_post_meta($post->ID, 'photo', true); ?>" alt="<?php the_title(); ?>">
						<?php }else {?>
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/required/nophoto.jpg" alt="<?php _e('Нету фото', 'kubrick'); ?>">
						<?php }?>						
					</div>
					<div class="player-page-content">
						<div class="player-page-name">
						<?php 
							$name = get_the_title($post->ID);
						  	$name = substr($name, 0, strpos($name, ' ' ));
						  	echo $name;					
						?>						
						</div>
						<div class="player-page-surname">
						<?php 
							$surname = get_the_title($post->ID);
						  	$surname = stristr($surname, ' ' );
						  	echo $surname;					
						?>
						</div>
						<div class="player-page-desc">
							<div class="player-page-pos dib"><? echo get_post_meta($post->ID, 'status', true); ?></div>
						</div>
						<ul class="player-page-list">
							<li class="player-page-item">Д.Р.: <? echo get_post_meta($post->ID, 'age', true); ?> г.</li>
							<li class="player-page-item">Опыт: с <? echo get_post_meta($post->ID, 'exp', true); ?> г.</li>
							<li class="player-page-item">Город: <? echo get_post_meta($post->ID, 'city', true); ?></li>
						</ul>								
					</div>
				</div>
			</div>
		</div>
		<h2 class="title"><?php _e('Биография', 'kubrick'); ?></h2>
		<div class="text page-player-text break">
			<?php the_content(''); ?>
		</div>	
		<div class="social-share social-share-padding">
			<script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
			<div class="yashare-auto-init" data-yashareL10n="ru" data-yashareType="button" data-yashareQuickServices="vkontakte,facebook,twitter,odnoklassniki,moimir,lj,gplus"></div> 
		</div>		
		<?php endwhile; ?>
	</div>
	<?php else : ?>	
	<div class="page-player block">
		<h1 class="single-title break"><?php _e('Персона не найдена', 'kubrick'); ?></h1>
		<div class="text single-text page-text break">
			<p></p>
			<p><?php _e('Извините, но того, что вы ищете, здесь нет.', 'kubrick'); ?></p>
			<p></p>
		</div>				
	</div>
	<?php endif; ?>
</section>
<!--end section-->
<?php get_footer(); ?>

