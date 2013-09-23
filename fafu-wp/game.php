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
					<i class="<? echo get_post_meta($post->ID, 'home-team', true); ?>-big-icon team-big-icon icon"></i>
					<div class="game-page-team-logo-bg"></div>
				</div>
				<h2 class="game-page-team-name"><? echo get_post_meta($post->ID, 'home-team-name', true); ?></h2>
				<div class="game-page-team-sity">(<? echo get_post_meta($post->ID, 'home-team-city', true); ?>)</div>				
			</div>
			<div class="game-page-visited-team game-page-team right">
				<div class="game-page-team-logo">
					<i class="<? echo get_post_meta($post->ID, 'visited-team', true); ?>-big-icon team-big-icon icon"></i>
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
				<div class="game-page-table-b">
					<table class="game-page-table">
						<tr>
							<th class="game-page-td-name game-page-td-empty"></th>
							<th class="game-page-td-first">I</th>
							<th class="game-page-td-second">II</th>
							<th class="game-page-td-third">III</th>
							<th class="game-page-td-four">IV</th>
							<th class="game-page-td-four">OT</th>
						</tr>
						<tr>
							<td class="game-page-td-name">
								<? echo get_post_meta($post->ID, 'home-team-name', true); ?>								
							</td>
							<td class="game-page-td-first"><? echo get_post_meta($post->ID, 'home-team-first-quarter', true); ?></td>
							<td class="game-page-td-second"><? echo get_post_meta($post->ID, 'home-team-second-quarter', true); ?></td>
							<td class="game-page-td-third"><? echo get_post_meta($post->ID, 'home-team-third-quarter', true); ?></td>
							<td class="game-page-td-four"><? echo get_post_meta($post->ID, 'home-team-four-quarter', true); ?></td>
							<td class="game-page-td-five">
								<?php 
									$scor = get_post_meta($post->ID, 'game-score', true);
								  	$scor = mb_substr($scor,0,2);
								  	echo $scor;					
								?>
							</td>
						</tr>
						<tr>
							<td class="game-page-td-name">
								<? echo get_post_meta($post->ID, 'visited-team-name', true); ?>							
							</td>
							<td class="game-page-td-first"><? echo get_post_meta($post->ID, 'visited-team-first-quarter', true); ?></td>
							<td class="game-page-td-second"><? echo get_post_meta($post->ID, 'visited-team-second-quarter', true); ?></td>
							<td class="game-page-td-third"><? echo get_post_meta($post->ID, 'visited-team-third-quarter', true); ?></td>
							<td class="game-page-td-four"><? echo get_post_meta($post->ID, 'visited-team-four-quarter', true); ?></td>
							<td class="game-page-td-five">
								<?php 
									$scor = get_post_meta($post->ID, 'game-score', true);
								  	$scor = mb_substr($scor,3,4);
								  	echo $scor;					
								?>
							</td>
						</tr>
					</table>
				</div>
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

