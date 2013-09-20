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
				<div class="f-text"><?php _e('Все права защищены', 'kubrick'); ?> © 2013</div>
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
							<!--Openstat--><span id="openstat2170219"></span><script type="text/javascript">
							var openstat = { counter: 2170219, image: 5045, next: openstat }; (function(d, t, p) {
							var j = d.createElement(t); j.async = true; j.type = "text/javascript";
							j.src = ("https:" == p ? "https:" : "http:") + "//openstat.net/cnt.js";
							var s = d.getElementsByTagName(t)[0]; s.parentNode.insertBefore(j, s);
							})(document, "script", document.location.protocol);
							</script><!--/Openstat-->
						</li>
						<li class="counter-item dib">
							<a title="Яна Ерина - услуги редактора-корректора" href="http://www.yerina.com.ua" target="_blank"><img src="http://www.yerina.com.ua/images/YE_white.png" alt="Яна Ерина - услуги литературного редактора, корректора" width="88" height="31" border="0" /></a>
						</li>
						<!-- <li class="counter-item dib">
							
						</li> -->
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
	<!-- easing plugin ( optional ) -->
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/easing.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/lightbox-2.6.min.js"></script>
	<!--My Scripts-->
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/scripts.js"></script>
<?php wp_footer(); ?>
</body>
</html>
