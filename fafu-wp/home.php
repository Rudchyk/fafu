<?php get_header(); ?> 
<?php include (TEMPLATEPATH . '/main-block.php'); ?>
<?php include (TEMPLATEPATH . '/middle-menu.php'); ?>
<!--section-->
<section role="main" class="section white_block clearfix">
	<div class="content left">
		<div class="jbox main-posts">
			<div class="tabs-section posts-tabs-section dib">
				<ul class="tabs posts-tabs clearfix">
					<li class="tabs-item current"><?php _e('Новини', 'kubrick'); ?></li>
					<li class="tabs-item"><?php _e('Преса', 'kubrick'); ?></li>
				</ul>
				<div class="tabs-box visible">
					<ul class="main-posts-list">
						<?php
						$args = array( 'numberposts' => 1, 'posts_per_page' => 3, 'category' => "2" );
						$lastposts = get_posts( $args );
						foreach($lastposts as $post) : setup_postdata($post); ?>
						<?php include (TEMPLATEPATH . '/main-post.php'); ?>
						<?php endforeach; ?>
					</ul>
					<p class="tar main-posts-more-b"><a href="#"><?php _e('Все новости', 'kubrick'); ?></a></p>
				</div>
				<div class="tabs-box">
					<ul class="main-posts-list">
						<?php
						$args = array( 'numberposts' => 1, 'posts_per_page' => 3, 'category' => "2" );
						$lastposts = get_posts( $args );
						foreach($lastposts as $post) : setup_postdata($post); ?>
						<?php include (TEMPLATEPATH . '/main-post.php'); ?>
						<?php endforeach; ?>
					</ul>
					<p class="tar main-posts-more-b"><a href="#"><?php _e('Все новости', 'kubrick'); ?></a></p>							
				</div>
			</div>
			<div class="tabs-section posts-tabs-section dib">
				<ul class="tabs posts-tabs clearfix">
					<li class="tabs-item current"><?php _e('Афиша', 'kubrick'); ?></li>
					<li class="tabs-item"><?php _e('Ігри', 'kubrick'); ?></li>
				</ul>
				<div class="tabs-box visible">
					<ul class="main-posts-list">
						<?php
						$args = array( 'numberposts' => 1, 'posts_per_page' => 3, 'category' => "2" );
						$lastposts = get_posts( $args );
						foreach($lastposts as $post) : setup_postdata($post); ?>
						<?php include (TEMPLATEPATH . '/main-post.php'); ?>
						<?php endforeach; ?>
					</ul>
					<p class="tar main-posts-more-b"><a href="#"><?php _e('Все новости', 'kubrick'); ?></a></p>
				</div>
				<div class="tabs-box">
					<ul class="main-posts-list">
						<?php
						$args = array( 'numberposts' => 1, 'posts_per_page' => 3, 'category' => "2" );
						$lastposts = get_posts( $args );
						foreach($lastposts as $post) : setup_postdata($post); ?>
						<?php include (TEMPLATEPATH . '/main-post.php'); ?>
						<?php endforeach; ?>
					</ul>
					<p class="tar main-posts-more-b"><a href="#"><?php _e('Все новости', 'kubrick'); ?></a></p>							
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