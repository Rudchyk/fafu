<?php get_header(); ?> 
<!--section-->
<section role="main" class="section white_block clearfix">
	<div class="content left">
		<?php if (have_posts()) : ?>
		<!--index-->
		<div class="b-posts block">
			<h2 class="title cat-title"><?php _e('Новости', 'kubrick'); ?></h2>
			<?php while (have_posts()) : the_post(); ?> 
			<?php include (TEMPLATEPATH . '/post.php'); ?>
			<?php endwhile; ?>
			<!--pagenavi wp-->
			<?php if (function_exists('wp_pagenavi')) {wp_pagenavi();} ?>
			<!--end pagenavi wp-->
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