<?php
/*
Single Post Template: video
*/
?>
<?php get_header(); ?>
<!--section-->
<section role="main" class="section white_block clearfix">
	<div class="content left">
		<?php if (have_posts()) : ?>
		<!--single & page-->
		<div class="b-post">
			<?php while (have_posts()) : the_post(); ?> 
			<!--article-->
			<article class="single block">
				<h1 class="single-title break"><?php the_title(); ?></h1>
				<div class="text single-text page-text break">
					<?php the_content(''); ?>
				</div>
			</article>
			<!--end article-->
			<div class="comments-b block">
				<h2 class="title"><span class="small-title-text"><?php _e('Комментарии', 'kubrick'); ?></span> <?php _e('Вконтакте', 'kubrick'); ?></h2>
				<div class="comments-box">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/temp/vk-comments.jpg" alt="">
				</div>
			</div>
			<div class="comments-b block">
				<h2 class="title"><span class="small-title-text"><?php _e('Комментарии', 'kubrick'); ?></span> <?php _e('Facebook', 'kubrick'); ?></h2>
				<div class="comments-box">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/temp/vk-comments.jpg" alt="">
				</div>
			</div>			
			<?php endwhile; ?>
		</div>
		<!--end single & page-->
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