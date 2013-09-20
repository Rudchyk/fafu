<!--post-->
<div class="post">
	<h2 class="post-title break"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<div class="post-header">
		<span class="post-data"><?php the_time('d F Y') ?></span>
		<span class="post-autor"><?php _e('Автор', 'kubrick'); ?>: <?php the_author() ?></span>
	</div>
	<div class="post-box clearfix">
		<div class="post-img left">
			<a href="<?php the_permalink(); ?>">
				<?php
				if ( has_post_thumbnail() ) {
					the_post_thumbnail(array(190,142));
				?>
				<?php }else {?>
					<img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>">
				<?php }?>
			</a>
		</div>
		<div class="post-content">
			<div class="post-text break">
				<?php the_excerpt_max_charlength(450); ?>								
			</div>
			<div class="post-more"><a href="<?php the_permalink() ?>#more-<?php the_ID(); ?>" class="post-more-link"><i class="icon post-more-icon"></i><span><?php _e('Читать полностью', 'kubrick'); ?></span></a></div>
		</div>
	</div>
</div>
<!--end post-->