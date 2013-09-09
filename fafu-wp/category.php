<?php get_header(); ?> 
<!--section-->
<section role="main" class="section white_block clearfix">
	<div class="content left">
		<?php if (have_posts()) : ?>
		<!--index-->
		<div class="b-posts block">
			<h2 class="title cat-title"><?php single_cat_title(''); ?></h2>
			<?php while (have_posts()) : the_post(); ?> 
			<!--post-->
			<div class="post">
				<h2 class="post-title break"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<div class="post-header">
					<span class="post-data"><?php the_time('d F Y') ?></span>
					<span class="post-autor"><?php _e('Автор', 'kubrick'); ?>: <?php the_author() ?></span>
				</div>
				<div class="post-box clearfix">
					<div class="post-img left">
						<a href="<?php the_permalink(); ?>"><img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>"></a>
					</div>
					<div class="post-content">
						<div class="post-text break">
							<?php the_excerpt_max_charlength(200); ?>								
						</div>
						<div class="post-more"><a href="#" class="post-more-link"><i class="icon post-more-icon"></i><span><?php _e('Читать полностью', 'kubrick'); ?></span></a></div>
					</div>
				</div>
			</div>
			<!--end post-->
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