		<!--footer-->
		<div class="empty"></div>
		<footer role="contentinfo" class="clearfix footer">
			<div class="f-left left">
				<!--footer logo-->
				<div class="f-logo">
					<a href="/">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/footer_logo.png" alt="<?php bloginfo('name'); ?>">
					</a>
				</div>
				<!--end footer logo-->
				<!--footer text-->
				<div class="f-text"><?php _e('Все права защищены.', 'kubrick'); ?>© 2012</div>
				<!--end footer text-->			
			</div>
			<!--footer navigation WP-->
			<div class="f-right right">
				<div class="f-nav jbox">
					<div class="f-nav-item dib">
						<h2 class="f-nav-title"><?php _e('Информация', 'kubrick'); ?></h2>
						<?php wp_nav_menu('menu=information'); ?>
					</div>
					<div class="f-nav-item dib">
						<h2 class="f-nav-title"><?php _e('Соревнования', 'kubrick'); ?></h2>
						<?php wp_nav_menu('menu=competitions'); ?>
					</div>
					<div class="f-nav-item dib">
						<h2 class="f-nav-title"><?php _e('Дополнительно', 'kubrick'); ?></h2>
						<?php wp_nav_menu('menu=additionally'); ?>
					</div>
				</div>
				<!--counters-->
				<div class="counter f-counter">
					<ul class="counter-list">
						<li class="counter-item dib">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/images/temp/counter.jpg" alt="">
						</li>
						<li class="counter-item dib">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/images/temp/counter.jpg" alt="">
						</li>
						<li class="counter-item dib">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/images/temp/counter.jpg" alt="">
						</li>
						<li class="counter-item dib">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/images/temp/counter.jpg" alt="">
						</li>
						<li class="counter-item dib">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/images/temp/counter.jpg" alt="">
						</li>
					</ul>
				</div>	
				<!--end counters-->					
			</div>
			<!--end footer navigation WP-->
		</footer>
		<!--end footer-->
	</div>
	<!--end main block-->
	<?php include (TEMPLATEPATH . '/popup.php'); ?>

	<!--
	scripts
	-->
	<!--jQuery library-->
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-1.10.2.min.js"></script>
	<!--jquery sliderkit library-->
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.sliderkit.1.9.2.pack.js"></script>	
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/UkraineOblasti.js"></script>
    <!-- actual -->
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.actual.min.js"></script>
	<!--My Scripts-->
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/scripts.js"></script>
<?php wp_footer(); ?>
</body>
</html>
