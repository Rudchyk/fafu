<?php get_header(); ?> 
<!--section-->
<section role="main" class="section white_block clearfix">
	<div class="content left">
		<div class="main-players block">
			<h2 class="title"><?php _e('Доска почёта', 'kubrick'); ?></h2>
			<ul class="main-players-list jbox">
				<?php
				$args = array( 'numberposts' => 1, 'posts_per_page' => 4, 'category' => "19" );
				$lastposts = get_posts( $args );
				foreach($lastposts as $post) : setup_postdata($post); ?>		
				<?php include (TEMPLATEPATH . '/main-player.php'); ?>
				<?php endforeach; ?>
			</ul>
		</div>
		<?php if (have_posts()) : ?>
		<!--index-->
		<div class="b-posts block coach-team">
			<h2 class="title cat-title"><?php _e('Тренерский штаб сборной', 'kubrick'); ?></h2>
			<table class="roster-table">
				<tr class="roster-row roster-light-row">
					<th class="roster-cell roster-p-name"><?php _e('Фамилия Имя', 'kubrick'); ?></th>
					<th class="roster-cell roster-p-status"><?php _e('Статус', 'kubrick'); ?></th>
					<th class="roster-cell roster-p-exp"><?php _e('Опыт', 'kubrick'); ?></th>
					<th class="roster-cell roster-p-team"><?php _e('Команда', 'kubrick'); ?></th>
				</tr>
				<?php
				$args = array( 'numberposts' => 1, 'posts_per_page' => 50, 'category' => "3" );
				$lastposts = get_posts( $args );
				foreach($lastposts as $post) : setup_postdata($post); ?>
				<tr class="roster-row roster-light-row">
					<td class="roster-cell roster-p-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
					<td class="roster-cell roster-p-status"><? echo get_post_meta($post->ID, 'status', true); ?></td>
					<td class="roster-cell"><span class="roster-p-exp"><? echo get_post_meta($post->ID, 'exp', true); ?></span> лет</td>
					<td class="roster-cell roster-p-team">
						<div class="fixed-tooltip-wrapper dib">
							<a href="/<? echo get_post_meta($post->ID, 'team', true); ?>/"><i class="icon team-small-icon <? echo get_post_meta($post->ID, 'team', true); ?>-small-icon"></i></a>
							<span class="fixed-tooltip"><? echo get_post_meta($post->ID, 'team-name', true); ?> (<? echo get_post_meta($post->ID, 'city', true); ?>)</span>									
						</div>
					</td>
				</tr>
				<?php endforeach; ?>
			</table>
		</div>
		<!--end index-->
		<!--index-->
		<div class="b-posts block">
			<h2 class="title cat-title"><?php _e('СБОРНАЯ УКРАИНЫ', 'kubrick'); ?></h2>
			<table class="roster-table">
				<tr class="roster-row roster-light-row">
					<th class="roster-cell roster-p-number">#</th>
					<th class="roster-cell roster-p-name"><?php _e('Фамилия Имя', 'kubrick'); ?></th>
					<th class="roster-cell roster-p-pos"><?php _e('Позиция', 'kubrick'); ?></th>
					<th class="roster-cell roster-p-ht"><?php _e('Рост', 'kubrick'); ?></th>
					<th class="roster-cell roster-p-wt"><?php _e('Вес', 'kubrick'); ?></th>
					<th class="roster-cell roster-p-age"><?php _e('Возраст', 'kubrick'); ?></th>
					<th class="roster-cell roster-p-exp"><?php _e('Опыт', 'kubrick'); ?></th>
					<th class="roster-cell roster-p-team"><?php _e('Команда', 'kubrick'); ?></th>
				</tr>
				<?php
				$args = array( 'numberposts' => 1, 'posts_per_page' => 50, 'category' => "4" );
				$lastposts = get_posts( $args );
				foreach($lastposts as $post) : setup_postdata($post); ?>
				<tr class="roster-row roster-light-row">
					<td class="roster-cell roster-p-number"><? echo get_post_meta($post->ID, 'number', true); ?></td>
					<td class="roster-cell roster-p-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
					<td class="roster-cell roster-p-pos"><? echo get_post_meta($post->ID, 'pos', true); ?></td>
					<td class="roster-cell roster-p-ht"><? echo get_post_meta($post->ID, 'ht', true); ?> см</td>
					<td class="roster-cell roster-p-wt"><? echo get_post_meta($post->ID, 'wt', true); ?> кг</td>
					<td class="roster-cell"><span class="roster-p-age"><? echo get_post_meta($post->ID, 'age', true); ?></span> лет</td>
					<td class="roster-cell"><span class="roster-p-exp"><? echo get_post_meta($post->ID, 'exp', true); ?></span> лет</td>
					<td class="roster-cell roster-p-team">
						<div class="fixed-tooltip-wrapper dib">
							<a href="/<? echo get_post_meta($post->ID, 'team', true); ?>/"><i class="icon team-small-icon <? echo get_post_meta($post->ID, 'team', true); ?>-small-icon"></i></a>
							<span class="fixed-tooltip"><? echo get_post_meta($post->ID, 'team-name', true); ?> (<? echo get_post_meta($post->ID, 'city', true); ?>)</span>									
						</div>
					</td>
				</tr>
				<?php endforeach; ?>
			</table>
		</div>
		<!--end index-->
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