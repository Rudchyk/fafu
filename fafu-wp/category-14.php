<?php get_header(); ?> 
<!--section-->
<section role="main" class="section white_block clearfix">
	<div class="content left">
		<?php if (have_posts()) : ?>
		<div class="main-video block">
			<h2 class="title"><?php single_cat_title(''); ?></h2>
			<ul class="video-list jbox">
				<?php while (have_posts()) : the_post(); ?> 
				<?php include (TEMPLATEPATH . '/video-item.php'); ?>
				<?php endwhile; ?>				
			</ul>
			<?php if (function_exists('wp_pagenavi')) {wp_pagenavi();} ?>
		</div>
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