<?php
/*
Single Post Template: team
*/
?>
<?php get_header(); ?> 
<!--section-->
<section role="main" class="section white_block">
	<?php if (have_posts()) : ?>
	<div class="page-team block">
		<?php while (have_posts()) : the_post(); ?> 
		<div class="team-page-info">
			<?php $postimageurl = get_post_meta($post->ID, 'team-art', true); ?>
			<?php if ($postimageurl) {?>
			<img src="<? echo get_post_meta($post->ID, 'team-art', true); ?>" alt="<?php the_title(); ?>">
			<?php }else {?>
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/required/noperson.jpg" alt="<?php _e('Нету фото', 'kubrick'); ?>">
			<?php }?>			
			<div class="team-page-left">
				<div class="team-page-photo left">
					<?php $postimageurl = get_post_meta($post->ID, 'team', true); ?>
					<?php if ($postimageurl) {?>
					<i class="<? echo get_post_meta($post->ID, 'team', true); ?>-big-icon team-big-icon icon"></i>
					<?php }else {?>
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/required/noteam.jpg" alt="<?php _e('Нету фото', 'kubrick'); ?>">
					<?php }?>						
				</div>
				<div class="team-page-content">
					<div class="team-page-name">
						<?php the_title(); ?>						
					</div>
					<div class="team-page-surname">
						<? echo get_post_meta($post->ID, 'team-name-en', true); ?>	
					</div>
					<ul class="team-page-list">
						<li class="team-page-item">Город: <? echo get_post_meta($post->ID, 'city', true); ?></li>
						<li class="team-page-item">Дата основания: <? echo get_post_meta($post->ID, 'date', true); ?></li>
						<li class="team-page-item">Детская команда: <? echo get_post_meta($post->ID, 'children', true); ?></li>
						<li class="team-page-item">Сайт: <noindex><a href="<? echo get_post_meta($post->ID, 'website', true); ?>" target="_blank" rel="nofollow"><? echo get_post_meta($post->ID, 'website', true); ?></a></noindex></li>
					</ul>								
				</div>
			</div>
		</div>
		<h2 class="title"><?php _e('История', 'kubrick'); ?></h2>
		<div class="text page-team-text break clearfix">
			<div class="team-page-right right">
				<?php $postimageurl = get_post_meta($post->ID, 'team-photo', true); ?>
				<?php if ($postimageurl) {?>
				<a href="<? echo get_post_meta($post->ID, 'team-photo', true); ?>" data-lightbox="<? echo get_post_meta($post->ID, 'team-photo', true); ?>" title="<?php the_title(); ?>"><img src="<? echo get_post_meta($post->ID, 'team-photo', true); ?>" alt="<?php the_title(); ?>"></a>
				<?php }else {?>
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/required/noteam-photo.jpg" alt="<?php _e('Нету фото', 'kubrick'); ?>">
				<?php }?>
			</div>			
			<?php the_content(''); ?>
		</div>
		<h2 class="title"><?php _e('Достижения', 'kubrick'); ?></h2>
		<div class="text page-team-text break clearfix">
			<? echo get_post_meta($post->ID, 'progress', true); ?>
		</div>	
		<h2 class="title"><?php _e('Контакты', 'kubrick'); ?></h2>
		<div class="text page-team-text break clearfix">
			<? echo get_post_meta($post->ID, 'contacts', true); ?>
		</div>	
		<?php endwhile; ?>
	</div>
	<?php else : ?>
	<div class="page-team block">
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

