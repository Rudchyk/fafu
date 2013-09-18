<?php get_header(); ?> 
<?php include (TEMPLATEPATH . '/main-block.php'); ?>
<?php include (TEMPLATEPATH . '/middle-menu.php'); ?>
<!--section-->
<section role="main" class="section white_block clearfix">
	<div class="content left">
		<div class="jbox main-posts">
			<div class="tabs-section posts-tabs-section dib">
				<ul class="tabs posts-tabs clearfix">
					<li class="tabs-item current"><?php _e('Новости', 'kubrick'); ?></li>
					<li class="tabs-item"><?php _e('Пресса', 'kubrick'); ?></li>
				</ul>
				<div class="tabs-box visible">
					<ul class="main-posts-list">
						<?php
						$args = array( 'numberposts' => 1, 'posts_per_page' => 3, 'category' => "8" );
						$lastposts = get_posts( $args );
						foreach($lastposts as $post) : setup_postdata($post); ?>
						<?php include (TEMPLATEPATH . '/main-post.php'); ?>
						<?php endforeach; ?>
					</ul>
					<p class="tar main-posts-more-b"><a href="/category/novosti/"><?php _e('Все новости', 'kubrick'); ?></a></p>
				</div>
				<div class="tabs-box">
					<ul class="main-posts-list">
						<?php
						$args = array( 'numberposts' => 1, 'posts_per_page' => 3, 'category' => "9" );
						$lastposts = get_posts( $args );
						foreach($lastposts as $post) : setup_postdata($post); ?>
						<?php include (TEMPLATEPATH . '/main-post.php'); ?>
						<?php endforeach; ?>
					</ul>
					<p class="tar main-posts-more-b"><a href="/category/pressa/"><?php _e('Вся пресса', 'kubrick'); ?></a></p>							
				</div>
			</div>
			<div class="tabs-section posts-tabs-section dib">
				<ul class="tabs posts-tabs clearfix">
					<li class="tabs-item current"><?php _e('Афиша', 'kubrick'); ?></li>
					<li class="tabs-item"><?php _e('Игры', 'kubrick'); ?></li>
				</ul>
				<div class="tabs-box visible">
					<ul class="main-posts-list">
						<?php
						$args = array( 'numberposts' => 1, 'posts_per_page' => 3, 'category' => "10" );
						$lastposts = get_posts( $args );
						foreach($lastposts as $post) : setup_postdata($post); ?>
						<?php include (TEMPLATEPATH . '/main-post.php'); ?>
						<?php endforeach; ?>
					</ul>
					<p class="tar main-posts-more-b"><a href="/category/afisha/"><?php _e('Вся афиша', 'kubrick'); ?></a></p>
				</div>
				<div class="tabs-box">
					<ul class="main-posts-list">
						<?php
						$args = array( 'numberposts' => 1, 'posts_per_page' => 3, 'category' => "11" );
						$lastposts = get_posts( $args );
						foreach($lastposts as $post) : setup_postdata($post); ?>
						<?php include (TEMPLATEPATH . '/main-post.php'); ?>
						<?php endforeach; ?>
					</ul>
					<p class="tar main-posts-more-b"><a href="/category/igry/"><?php _e('Все игры', 'kubrick'); ?></a></p>							
				</div>
			</div>					
		</div>
		<?php include (TEMPLATEPATH . '/main-players.php'); ?>
		<?php include (TEMPLATEPATH . '/main-video.php'); ?>
	</div>
	<?php get_sidebar(); ?>
</section>
<!--end section-->
<?php include (TEMPLATEPATH . '/friends.php'); ?>
<?php get_footer(); ?>