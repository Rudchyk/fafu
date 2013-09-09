<?php
/*
Single Post Template: game
*/
?>
<?php get_header(); ?> 
<!--section-->
<section role="main" class="section white_block">
	<?php if (have_posts()) : ?>
	<div class="page-game block">
		<?php while (have_posts()) : the_post(); ?> 
		<div class="game-page-info clearfix">
			<div class="game-page-home-team game-page-team left">
				<div class="game-page-team-logo">
					<i class="<? echo get_post_meta($post->ID, 'home-team', true); ?>-big-icon team-small-icon icon"></i>
					<div class="game-page-team-logo-bg"></div>
				</div>
				<h2 class="game-page-team-name"><? echo get_post_meta($post->ID, 'home-team-name', true); ?></h2>
				<div class="game-page-team-sity">(<? echo get_post_meta($post->ID, 'home-team-city', true); ?>)</div>				
			</div>
			<div class="game-page-visited-team game-page-team right">
				<div class="game-page-team-logo">
					<i class="<? echo get_post_meta($post->ID, 'visited-team', true); ?>-big-icon team-small-icon icon"></i>
					<div class="game-page-team-logo-bg"></div>
				</div>
				<h2 class="game-page-team-name"><? echo get_post_meta($post->ID, 'visited-team-name', true); ?></h2>
				<div class="game-page-team-sity">(<? echo get_post_meta($post->ID, 'visited-team-city', true); ?>)</div>				
			</div>
			<div class="game-page-info-box">
				<div class="game-page-data"><? echo get_post_meta($post->ID, 'game-day', true); ?></div>
				<div class="game-page-championship">
					<span class="fixed-tooltip-wrapper">
						<i class="icon championship-big-icon <? echo get_post_meta($post->ID, 'championship', true); ?>-big-icon"></i>
						<span class="fixed-tooltip"></span>
					</span>
				</div>
				<div class="game-page-score"><? echo get_post_meta($post->ID, 'game-score', true); ?></div>
			</div>
		</div>
		<h2 class="title"><?php _e('Отчет', 'kubrick'); ?></h2>
		<div class="text page-game-text break">
			<?php the_content(''); ?>
		</div>	
		<?php endwhile; ?>
	</div>
	<?php else : ?>	
	<div class="page-game block">
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

