<li class="main-post">
	<a href="<?php the_permalink(); ?>" class="clearfix main-post-link">
		<div class="main-posts-img left">
			<div class="main-posts-img-window">
				<?php
				if ( has_post_thumbnail() ) {
					the_post_thumbnail('thumbnail');
				?>
				<?php }else {?>
					<img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>">
				<?php }?>
			</div>
		</div>
		<div class="main-posts-content">
			<h2 class="main-posts-title" title="<?php the_title(); ?>"><?php short_title(40); ?></h2>
			<div class="main-posts-data"><?php the_time('d.m.Y') ?></div>
		</div>
	</a>
</li>