<aside role="complementary" class="right sidebar">
	<ul class="sidebar-widgets">
		<?php if(is_home()){ ?>
		<!--widget partners-widget-->
		<?php include (TEMPLATEPATH . '/partners-widget.php'); ?>
		<!--end widget partners-widget-->
		<?php } else{ ?>
		<!--widget menu wp-->
		<?php include (TEMPLATEPATH . '/nav-widget.php'); ?>
		<?php include (TEMPLATEPATH . '/cat-widget.php'); ?>
		<?php include (TEMPLATEPATH . '/aside-news-widget.php'); ?>
		<!--end widget menu wp-->
		<?php } ?>
		<!--vk-widget-->
		<li class="widget vk-widget">
			<div class="textwidget">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/temp/vk.jpg" alt="">
			</div>
		</li>
		<!--end vk-widget-->		
		<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>
		<?php endif ?>				
	</ul>
</aside>



